<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php" ?>
</head>
<body>
  <div class="login-wrapper">
    <div class="logo-wrapper"></div>
    <img src="" alt="Login logo">
    <form method="POST" action="user/login.php" id="login-form">

      <label class="login-label" for="inputEmail">Email</label>
      <input class="login-input" type="text" name="inputEmail">

      <label class="login-label" for="inputPwd">Wachtwoord</label>
      <input class="login-input" type="password" name="inputPwd">

      <input class="login-btn" name="submit" type="submit">
      <?php
        if(isset($_SESSION["error"])){
          echo "<span>".$_SESSION["error"]."</span>";
        }
      ?>
    </form>

  </div>
</body>
</html>