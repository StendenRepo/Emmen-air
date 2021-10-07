<?php

require "../../src/validateUser.php";

session_start();

if (isset($_POST["submit"])) {
  if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPwd"])) {
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPwd"];

    if(authUser($email, $pwd)){
      session_destroy();
      header("Location: ../home.php");
      exit;
    }
      header("Location: ../index.php");
      $_SESSION["error"] = "Incorrect login details";
      exit;
  }
  $_SESSION["error"] = "Please fill in all fields.";
  header("Location: ../index.php");
  exit;
}