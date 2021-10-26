<?php
    function getAllAssignments($limit = null) {

        return getParsedData();
      }

    setAssignment($amstoist, $amstojfk, $amstopvg, $amstosfo, $amstosvo) {
        $data = getParashedData();

        $tempdata = array("AMStoIST" => $amstoist, "AMStoJFK" => $amstojfk, "AMStoPVG" => $amstopvg, "AMStoSFO" => $amstosfo, "AMStoSVO" => $amstosfo);
        array_unshift($data, $tempdata);
        $jsonParsedData = json_encode($data);

        file_put_contents(dirname(__FILE__)."/../data/vliegroutes.json", $jsonParsedData);
    }
?>