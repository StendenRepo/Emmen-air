<?php

require "../../src/validateUser.php";

if (isset($_POST["submit"])) {
  if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPwd"])) {
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPwd"];

    if(authUser($email, $pwd)){
      header("Location: ../home.php");

      $_SESSION["email"] = $email;
      // check if the session contains an error message. if it does have one remove it from the session.
      if(isset($_SESSION['error']) && !empty($_SESSION['error'])) unset($_SESSION["error"]);
      exit;
    }
    setErrorMsg($lang["error-message-1"]);
    header("Location: ../index.php");
    exit;
  }
  setErrorMsg($lang["error-message-2"]);
  header("Location: ../index.php");
  exit;
}


function setErrorMsg($msg) {
  if(!empty($_SESSION['language'])) {
    switch ($_SESSION['language']) {
      case 'eng':
        return $msg;
        break;

      default:
        return $msg;
        break;
    }
  }
  return "Something went wrong...";
}