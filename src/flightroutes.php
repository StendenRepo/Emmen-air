<?php
/**
 * input "Cedric Smit"
 */
    function getFlightCode($student) {
        $data = getParsedData();

        foreach ($data as $flightCode => $arrayOfNames) {
            foreach ($arrayOfNames as $person) {
                if($person["name"] === $student)
                return $flightCode;
            }
        }
        return false;
    }

    function getParsedData() {
        return json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true);
    }

?>