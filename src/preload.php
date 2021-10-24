<?php
// Check if there is no sessions. if there is no session, start a new one.
if(session_status() !== PHP_SESSION_ACTIVE) {

  session_start();
}

/**
 * Check if the user is logged in. if not return them to the login page.
 */
if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') === false && !isset($_SESSION["userEmail"])) {
  /**
   * Please Login Message
   */
  $_SESSION["error"] = "you have to be logged in.";
  header("Location: ../index.php");
  exit;
}

?>