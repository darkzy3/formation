<?php
    function shuffleLocation(array $studentsLocations) : array{
        //cut array key => value
        $placesList = array_keys($studentsLocations);
        $studentsList = array_values($studentsLocations);
        //shuffle value
        shuffle($studentsList);
        //set studentsLocations value (recombine array key => value)
        $studentsLocations = array_combine($placesList, $studentsList);
        // return value (studentsLocations)
        return $studentsLocations;
    }

    function createStudentLocations(array $placesList, array $studentsList) : array{
        if (sizeof($placesList) == sizeof($studentsList)) {
            $studentsLocations = array_combine($placesList, $studentsList);
            return $studentsLocations;
        }
        if ($placesList > $studentsList) {
            while (sizeof($placesList) > sizeof($studentsList)) {
            array_push($studentsList, "");
        }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }
        if ($placesList < $studentsList) {
            while (sizeof($placesList) < sizeof($studentsList)) {
                array_pop($studentsList);
            }
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }  
        }
?>