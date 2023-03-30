<?php

session_start();

include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/public/header.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/public/meta.php');



$error = "";
if (isset($_POST['submit'])) {
  $userName = $_POST['eMail'];
  $userPassword = $_POST['password'];

  $error = $auth->login($userName, $userPassword);
  if ($error) {
    echo "Logged in!";
  } else {
    $error = "Incorrect Credentials";
  }
}

$_SESSION['eMail'] = $userName;
$_SESSION['passWord'] = $userPassword;





?>

<!-- body start -->
<div class="login-form">
  <form action="index.php" method="POST">
    <h1>Login into Your Account</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="eMail" />
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password" />
      </div>

      <a href="./forgetPassword.php" class="link">Forgot Password?</a>
    </div>
    <div class="action">

      <button><input type="submit" name="submit" value="Login"></button>
      <?php echo $error ? ($error) : (""); ?>
    </div>
  </form>
</div>
<!-- body end -->

<?php

// include('./public/footer.php');

include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/public/footer.php');
?>