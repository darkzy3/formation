<?php

/*Inputs :
    $placesList -> tab to list all the places in the class; max size : 16
    $studentsList -> tab to list all students
    return an array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
*/

// function createStudentsLocations(array $placesList, array $studentsList) : array{    
//     if (sizeof($placesList) == sizeof($studentsList)) {  
//         $studentsLocations = array_combine($placesList, $studentsList);
//         return $studentsLocations; 

//     } if ($placesList < $studentsList) {
//         while (sizeof($placesList) < sizeof($studentsList)) {
//             array_pop( $studentsList);
//         }
//         $studentsLocations = array_combine($placesList, $studentsList);
//         return $studentsLocations;
//     } if ($placesList > $studentsList) {
//         while (sizeof($placesList) > sizeof($studentsList)) {
//         array_push($studentsList);
//         }
//         $studentsLocations = array_combine($placesList, $studentsList);
//         return $studentsLocations;  
        
//     }
// }


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
/*
    $studentsLocations array [K,V] ex: [[PLACE_1] => "JEREMY", [PLACE_2] => "LORENA"]  
    return the same array shuffled; only values will be randomized 
*/ 
    function shuffleLocation(array $studentsLocations) : array{
    $tabkeys = array_keys($studentsLocations);
    $tabvalues = array_values($studentsLocations);
    shuffle($tabvalues);
    $studentsLocations = array_combine($tabkeys, $tabvalues);
    return $studentsLocations;
    }

/*
    save  $studentsLocations to CSV format.
    fileName to backup is : csv_backup_DDMMYYYY_HH:MM:SS.csv 
    loop for each key value
*/
    function saveToCSVFile(array $studentsLocations):void{
 
    $d = date_create();
    $var = date_format($d, 'd-m-Y\TH-i-s');
         
    $file = fopen("../CSV_Backups/".$var.".csv", "w");
         
    foreach ($studentsLocations as $placesList => $studentsList ) {
        fputcsv($file, array($placesList, $studentsList),";");
    }
         
    fclose($file);
    }

/*  creation function for take a csv document ad take the value for display a board
    function csvFileToArray(String pathFile): array[k,v]
*/
    function CSVFileToArray ($pathFile): Array{
        $file = fopen ($pathFile, 'r');
        while (!feof ($file)) {
            $line[] = (fgetcsv($file, 100, ";"));
        };
        fclose ($file);
        return $line;
    }

/* 
    make function for  make selection colomun to display this with place in therminal.
    getcolumnfromCSV (String $pathCSVFile, int "selector"): array    
*/

// function getColomunFromCSV($csv, int $col): array{
//     $tabFile = fopen ($csv, 'r');
//     while (!feof ($tabFile)) {
//         $tabFiles[] = (fgetcsv($tabFile, 100, ";"));
//     };
//     fclose ($tabFile);
//     foreach ($tabFiles as $line) {
//         $newTab[] = [$line[0], $line[$col]];
//     }
//     return $newTab;
// }

// function getColumnsFromCsv(String $pathFile, int $selectCol) : array{
//     $file = fopen ($pathFile, "r");
//     $nbLinesFile = count(file("$pathFile"));
//     for ($i = 0; $i < $nbLinesFile-1; $i++) {
//        $tabCSV[] = fgetcsv($file, 500, ",");
//     }
//     fclose($file);
   
//     foreach ($tabCSV as $line) {
//             $newTab[] = [$line[0], $line[$selectCol]];
//     }
//     return $newTab;
// }

/*
    make same function but we ant add if condition for -1 display all tab if 0 display juste place else display 
    place and colomun need
*/

function getColumnsFromCsv(String $pathFile, int $selectCol) : array{
    //open file for reeding ('r')
    $file = fopen ($pathFile, "r");
    //count number of value in one line
    $nbLinesFile = count(file("$pathFile"));
    //make for loop to view all document.csv
    for ($i = 0; $i < $nbLinesFile; $i++) {
       $tabCSV[] = fgetcsv($file, 500, ",");
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
?>