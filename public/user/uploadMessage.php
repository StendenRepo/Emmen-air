<?php

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

require "../../src/translate.php";
require "../../utils/formValidation.php";

if (isset($_POST["submit"])) {
  $title = $_POST["titel_berichten"];
  $file = $_FILES["file"];
  $contentNl = $_POST["messageNL"];
  $contentEn = $_POST["messageEN"];

  if(empty($title) && $file["error"] === UPLOAD_ERR_NO_FILE && empty($contentNl) && empty($contentEn)){
    /**
     * form was not correctly filled in return to the form page with errors.
     */
    echo "form was not correctly filled in";
  }


  if(validateImage($_FILES["file"])){
    /**
     * There was something with the img
     */
  }
}


?>