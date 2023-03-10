<?php
include('./public/header.php');
include('./public/meta.php');
$error= "";
session_start();
if(isset($_POST['submit'])) {
  $userName= $_POST['eMail'];
  $userPassword= $_POST['password'];

  // if(!empty($userName)|| !empty($userPassword)) {
  //   $error="incomplete Credentials";
  // } else {
    $error = $auth->login($userName,$userPassword);
    if ($error) {
      echo "Logged in!";

                $_SESSION['eMail'] = $userName;

                $_SESSION['password'] = $userPassword;

                

               header("Location: dashboard.php");

                exit();
      
   } else {
    $error="Incorrect Credentials";
   }
  }





?>
  
<!-- body start -->
<div class="login-form">
  <form action="index.php" method="POST">
    <h1>Login into Your Account</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="eMail"/>
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password"/>
      </div>
      <a href="html/forgetPassword.html" class="link">Forgot Password?</a>
    </div>
    <div class="action">
    <!-- <button><a href="html/register.html">Register</a></button> -->
    <!-- <button type="submit" name="submit" >Sign in</button> -->
    <button><input type="submit" name="submit"  value="Login"></button>
    <?php echo $error ? ($error) : (""); ?>
    </div>
  </form>
</div>
<!-- body end -->

<?php

include('./public/footer.php');
?>