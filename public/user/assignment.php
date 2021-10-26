<?php

    require("../../src/preload.php");
    require "../../src/translate.php";
    require "../../src/flightroutes.php";

    if (isset($_POST["save"])) {

        $amstoist = $_POST["AMStoIST"];
        $amstojfk = $_POST["AMStoJFK"];
        $amstopvg = $_POST["AMStoPVG"];
        $amstosfo = $_POST["AMStoSFO"];
        $amstosvo = $_POST["AMStoSVO"];

        setAssignment($amstoist, $amstojfk, $amstopvg, $amstopvg, $amstosfo, $amstosvo);
        exit;
    }
?>