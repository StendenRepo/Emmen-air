<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php" ?>
</head>
<body>
  <div class="login-container">
    <div class="login-wrapper">
      <div class="logo-wrapper">
        <img src="assets/capEmbleemT.svg" alt="Login logo">
      </div>
      <form method="POST" action="user/login.php" id="login-form">

        <label class="login-label" for="inputEmail">E-Mail</label>
        <input class="login-input" type="text" id="inputEmail" name="inputEmail">

        <label class="login-label" for="inputPwd">Wachtwoord</label>
        <input class="login-input" type="password" id="inputPwd" name="inputPwd">

        <input class="login-btn" name="submit" type="submit" value="Inloggen">
        <div>
          <?php
        if(isset($_SESSION["error"])){
          echo "<span class='login-err-msg'>".$_SESSION["error"]."</span>";
        }
        ?>
        </div>
      </form>
    </div>
  </div>
</body>
</html>