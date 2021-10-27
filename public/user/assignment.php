<?php
    require("../../src/preload.php");
    require "../../src/translate.php";
    require "../../src/flightroutes.php";

    if (isset($_POST["number-finder"])) {
        $student = $_POST["number-finder"];
        $studentLowerChars = strtolower($student);
        $flightCode = getFlightCode($studentLowerChars);

        if($flightCode === false) {
            header("Location: ../vliegroutes.php?error=invalidPerson");
            exit;
        }

        header("Location: ../vliegroutes.php?flightCode={$flightCode}&name={$student}");
        exit;
    }
?>