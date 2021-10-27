<?php

function getAllImages($limit = null) {
  return getParsedData();
}

function setImage($id, $imageName, $hoverTextNl, $hoverTextEn) {
  $data = getParsedData();

  $tmpData = array("id" => $id, "imageName" => $imageName,
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