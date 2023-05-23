<?php
include($_SERVER["DOCUMENT_ROOT"].'/shopping_express/html/navbar.html');

?><!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="../css/reg.css">
</head>
<body>
  
  <div class="container">
    <h1>Register</h1>
    <div class="register-form">
      <form action="../register.php" method="POST">

      <input type="text" id="first-name" placeholder="First Name">
      <input type="text" id="last-name" placeholder="Last Name">
      <input type="email" id="email" placeholder="Email">
      <input type="password" id="password" placeholder="Password">
      <input type="tel" id="phone" placeholder="Phone Number">
      <button type="submit" id="register-btn">Register</button>
      </form>
    </div>
    <p class="login-link">Already registered? <a href="login.php">Log in here</a></p>
  </div>
</body>
</html>
