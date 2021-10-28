<?php

  /**
   * ex: "john.doe@emmenair.com"
   * removes @emmenair.com
   * return john doe
   */
  function seperateNameFromMail($email) {
    $nameAndMail = explode("@", $email);
    $firstAndLastName = explode(".", $nameAndMail[0]);
    $finalString = ucfirst($firstAndLastName[0]) . " " . ucfirst($firstAndLastName[1]);
    return  $finalString;
  }

?>