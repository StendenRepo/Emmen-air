<?php

require("../../src/preload.php");
require "../../src/translate.php";
require "../../src/messages.php";

if (isset($_POST["submit_berichten"])) {
  $title = $_POST["titel_berichten"];
  $contentNl = $_POST["messageNL"];
  $contentEn = $_POST["messageEN"];
  $userId = $_SESSION["userEmail"];

  if(empty($title) || empty($contentNl) || empty($contentEn)){
    /**
     * form was not correctly filled in return to the form page with errors.
     */
    echo "form was not correctly filled in";
    exit;
  }

  setMessage($userId, $title, $contentNl, $contentEn);
  header("Location: ../home.php");
  exit;
}

?>