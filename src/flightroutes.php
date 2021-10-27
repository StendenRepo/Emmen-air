<?php
/**
 * input "Cedric Smit"
 */
    function setAssignment($student) {
        $data = getParsedData();
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        return $flightCode;
    }

    function getParsedData() {
        return json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true);
    }

?>