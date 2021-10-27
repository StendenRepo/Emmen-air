<?php

include dirname(__FILE__). "/../utils/mailSeperator.php";

function getAllImages($limit = null) {
  return array_slice(getParsedData(), 0, $limit);
}

function setImage($id, $imageName, $hoverTextNl, $hoverTextEn) {
  $data = getParsedData();
  $userName = seperateNameFromMail($id);

  $tmpData = array("id" => $id, "user" => $user, "imageName" => $imageName,
  "hoverTextNl" => $hoverTextNl, "hoverTextEn" => $hoverTextEn);

  array_unshift($data, $tmpData);
  $jsonParsedData = json_encode($data);

  file_put_contents(dirname(__FILE__)."/../data/images.json", $jsonParsedData);

  return true;
}

function getParsedData() {
  return json_decode(file_get_contents(dirname(__FILE__)."/../data/images.json"), true);
}

?>