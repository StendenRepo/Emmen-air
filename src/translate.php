<?php

// If the $_GET variable 'language' is set, the $_SESSION['language'] variable will be adjusted to that (normally either 'eng' or 'nl').
if(isset($_GET['language'])){
    $_SESSION['language'] = $_GET['language'];
}

// If the $_SESSION['language'] var is not empty, continue. Otherwise, include the nl.php file;
if (!empty($_SESSION['language'])) {
    switch($_SESSION['language']){
        case "eng":
            include dirname(__FILE__)."/../public/lang/eng.php";
        break;
        default:
            include dirname(__FILE__)."/../public/lang/nl.php";

        }
} else {
    include dirname(__FILE__)."/../public/lang/nl.php";
}

?>