<?php
include($_SERVER["DOCUMENT_ROOT"].'/shopping_express/html/navbar.html');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <div class="login-form">
      <input type="text" id="username" placeholder="Username">
      <input type="password" id="password" placeholder="Password">
      <button type="submit" id="login-btn">Log in</button>
    </div>
    <div class="social-login">
      <button class="google-btn">Login with Gmail</button>
      <button class="facebook-btn">Login with Facebook</button>
    </div>
    <p class="register-link">Not registered? <a href="./register.php">Register here</a><button onclick="history.go(-1);">Back </button></p>
    
  </div>
  
</body>
</html>
