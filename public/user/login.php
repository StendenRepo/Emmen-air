<?php

require "../../src/validateUser.php";

if (isset($_POST["submit"])) {
  if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPwd"])) {
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPwd"];

    if(authUser($email, $pwd)){
      echo "user is authenticated";
    }
  }
    echo "Incorrect login credentials...";
}