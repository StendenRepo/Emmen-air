<?php

    require("../../src/preload.php");
    require "../../src/translate.php";
    require "../../src/flightroutes.php";

    if (isset($_POST["number-finder"])) {

        $student = $_POST["number-finder"];

        $flightCode = setAssignment($student);

        if (empty($student)) {
            echo "Please enter a name";
            exit;
        }

        echo $flightCode;

        header("../vliegroutes.php");
        exit;
    }
?>