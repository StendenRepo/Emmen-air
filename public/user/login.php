<?php

require "../../src/validateUser.php";

// Check if there is no sessions. if there is no session, start a new one.
if(session_status() === PHP_SESSION_NONE) session_start();

if (isset($_POST["submit"])) {
  if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPwd"])) {
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPwd"];

    if(authUser($email, $pwd)){
      header("Location: ../home.php");
      //check if the session contains an error message. if it does have one remove it from the session.
      if(isset($_SESSION['error']) && !empty($_SESSION['error'])) unset($_SESSION["error"]);
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