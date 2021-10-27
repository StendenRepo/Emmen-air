<?php

function getAllMessages($limit = null) {



  return getParsedData();
}

function setMessage($userId, $title ,$contentNl, $contentEn) {
  $data = getParsedData();

  $tmpData = array("id" => $userId, "title" => $title, "content_nl" => $contentNl, "content_en" => $contentEn);
  array_unshift($data, $tmpData);
  $jsonParsedData = json_encode($data);

  file_put_contents(dirname(__FILE__)."/../data/post.json", $jsonParsedData);

  return true;
}

function getParsedData() {
  return json_decode(file_get_contents(dirname(__FILE__)."/../data/post.json"), true);
}

?>