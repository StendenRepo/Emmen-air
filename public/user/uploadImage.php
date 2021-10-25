<?php

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

require "../../src/translate.php";
require "../../utils/formValidation.php";

if (isset($_POST["submit_berichten"])) {
  $title = $_POST["titel_berichten"];
  $file = $_FILES["file"];
  $contentNl = $_POST["messageNL"];
  $contentEn = $_POST["messageEN"];

  echo "form was validated and moved";



  // header("Location: ../home.php");
  exit;
}
?>