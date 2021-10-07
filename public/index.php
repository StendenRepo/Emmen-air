<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php" ?>
</head>
<body>
  <div id="container">
    <form method="POST" action="user/login.php">
      <label for="inputEmail">Email</label>
      <input type="text" name="inputEmail">

      <label for="inputPwd">Wachtwoord</label>
      <input type="password" name="inputPwd">

      <input name="submit" type="submit">
  </div>
  </form>

  <?php
  if(isset($_SESSION["error"])){
    echo "<span>".$_SESSION["error"]."</span>";
   }
  ?>
</body>
</html>