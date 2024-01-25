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
        // make condition if placeList = $studentList combine them for return associativ board
        if (sizeof($placesList) == sizeof($studentsList)) {
            $studentsLocations = array_combine($placesList, $studentsList);
            return $studentsLocations;
        }
        //make condition if placeList > studentList add value
        if ($placesList > $studentsList) {
            while (sizeof($placesList) > sizeof($studentsList)) {
            array_push($studentsList, "");
        }
        //combine value of condition and return board
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }
        //make condition if $placeList < studentsList remove value
        if ($placesList < $studentsList) {
            while (sizeof($placesList) < sizeof($studentsList)) {
                array_pop($studentsList);
            }
        //combine value of condition and return board
        $studentsLocations = array_combine($placesList, $studentsList);
        return $studentsLocations;
        }  
    }

    function CSVFileToArray ($pathFile): Array{
        //set csv file in variable and read 'r';
        $file = fopen ($pathFile, 'r');
        //make while loop to read all line
        while (!feof ($file)) {
            $line[] = (fgetcsv($file, 100, ";"));
        };
        //close file
        fclose ($file);
        //return value for use
        return $line;
    }

    function getColumnsFromCsv(String $pathFile, int $selectCol) : array{
        //open file for reeding ('r')
        $file = fopen ($pathFile, "r");
        //count number of value in one line
        $nbLinesFile = count(file("$pathFile"));
        //make for loop to view all document.csv
        for ($i = 0; $i < $nbLinesFile; $i++) {
           $tabCSV[] = fgetcsv($file, 500, ";");
        }
        //close document
        fclose($file);
        //make foreach loop with if condition
        foreach ($tabCSV as $line) {
            //condition 
            if ($selectCol < 0) {
                $newTab = $tabCSV;
            //condition test equality and display juste base colomun
            } elseif ($selectCol == 0) {
                $newTab[] = [$line[0],];
            //condition test number ask are conting in colomun to display first colomun and
            //spécified colomun
            } elseif ($selectCol < count($tabCSV[0])) {
                $newTab[] = [$line[0], $line[$selectCol]];
            //condition test number is above for didn't display board
            } elseif ($selectCol >= count($tabCSV[0])) {
                $newTab = [];
            }
        }
        //returne value to end the function
        return $newTab;
    }

    function saveToCSVFile(array $studentsLocations):void{
        //set variable for date, date forma.
        $d = date_create();
        $var = date_format($d, 'd-m-Y\TH-i-s');
        //open file and creat variable to save
        $file = fopen("../CSV_Backups/".$var.".csv", "w");
        //make foreach loop to save in file
        foreach ($studentsLocations as $placesList => $studentsList ) {
            fputcsv($file, array($placesList, $studentsList),";");
        }
        //close fNile
        fclose($file);
        }
?>