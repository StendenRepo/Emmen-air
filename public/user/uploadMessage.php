<?php

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

require "../../src/translate.php";
require "../../utils/formValidation.php";

if (isset($_POST["submit_berichten"])) {
  $title = $_POST["titel_berichten"];
  $file = $_FILES["file"];
  $contentNl = $_POST["messageNL"];
  $contentEn = $_POST["messageEN"];

  if(empty($title) || $file["error"] > UPLOAD_ERR_OK || empty($contentNl) || empty($contentEn)){
    /**
     * form was not correctly filled in return to the form page with errors.
     */
    echo "form was not correctly filled in";
    exit;
  }


  if(!validateImageAndMove($file)){
    echo "file was not validated correctly";
    exit;
  }
  echo "file was validated and moved";


}

?>