<?php
/**
 * input "Cedric Smit"
 */
    function setAssignment($student) {
        $data = getParshedData();

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    
        // return true;
    }

    function getParsedData() {
        return json_decode(dirname(__FILE__)."../data/vliegroutes.json", true);
    }

?>