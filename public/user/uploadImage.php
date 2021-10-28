<?php

require "../../src/preload.php";
require "../../src/translate.php";
require "../../utils/formValidation.php";
require "../../src/images.php";

if (isset($_POST["submit"])) {
  $file = $_FILES["file"];
  $hoverTextNl = $_POST["messageNL"];
  $hoverTextEn = $_POST["messageEN"];
  $userId = $_SESSION["userEmail"];

  if($file["error"] > UPLOAD_ERR_OK ||empty($hoverTextNl) || empty($hoverTextEn)){
    echo "form was not correctly filled in";
    exit;
  }

  $savedImageName = validateImageAndMove($file);

  setImage($userId, $savedImageName, $hoverTextNl, $hoverTextEn);
  header("Location: ../gallerij.php");
  exit;
}
?>