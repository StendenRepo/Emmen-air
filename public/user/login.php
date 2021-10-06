<?php

require "../../src/validateUser.php";

if (isset($_POST["submit"])) {
  if(!empty($_POST["inputEmail"]) && !empty($_POST["inputPwd"])) {
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPwd"];

    if(authUser($email, $pwd)){
      echo "user is authenticated";
      /**
       * TODO: set cookies and redirect to the dashboard.
       */
    }
      /**
      * TODO: return back to login screen. with error message : incorrect login details.
      */
  }
  /**
   * TODO: return back to login screen. with error message : please fill in all fields.
   */
}