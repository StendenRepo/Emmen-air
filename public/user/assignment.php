<?php

    require("../../src/preload.php");
    require "../../src/translate.php";
    require "../../src/flightroutes.php";

    if (isset($_POST["save"])) {

        $student = $_POST["zoekStudent"];

        setAssignment($student);

        // header("../vliegroutes.php");
        exit;
    }
?>