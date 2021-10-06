<?php

// why does it read from the login.php file path..
// $data = file_get_contents("../../data/user.json");
$dataStream = file_get_contents(dirname(__FILE__)."/../data/user.json");

function authUser($email, $pwd) {

  return true;
}

?>