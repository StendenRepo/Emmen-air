<?php

function authUser($email, $pwd) {
  $userData = json_decode(file_get_contents(dirname(__FILE__)."/../data/user.json"), true)["users"];

  $userId = findUser($email, $userData);
  if($userData[$userId]["email"] === $email && $userData[$userId]["pwd"] === $pwd) {
    return true;
  }
  return false;
}


function findUser($email, $userArray) {
  foreach ($userArray as $key => $attributes) {
    if($email === $attributes["email"]){
      return $key;
    }
  }
  return NULL;
}
?>