<?php

// starte session to immplode value
session_start();

//clear session
$_SESSION["studentsLocation"] = Null;

//include librery function
include_once("../M/lib_function.php");

//list of place
$placesList =   ["PLACE_1", "PLACE_2", "PLACE_3", "PLACE_4", "PLACE_5", "PLACE_6", 
                "PLACE_7","PLACE_8", "PLACE_9", "PLACE_10", "PLACE_11","PLACE_12", 
                "PLACE_13", "PLACE_14","PLACE_15","PLACE_16"];

//set variable value
$pathFile = $_FILES ["file"]["tmp_name"];
$fileArray = CsvFileToArray($pathFile);
$shuffled_list = [];

//make for loop to grind board
for ($i=0; $i < sizeof($fileArray) ; $i++) {
    $shuffled_list [$i] = $fileArray [$i] [1];
}
//give the name shuffled board to session
$_SESSION ["student_list"] = $shuffled_list;
 
//set other variable for function
$studentLocations = createStudentLocations($placesList, $shuffled_list);
$studentLocations= shuffleLocation($studentLocations);

//give board of students position
$_SESSION ["shuffled_list"] = $studentLocations;

//save in CSV file
saveToCSVFile($studentLocations);

//set destination of controler
header("Location:../V/displayShuffleCSV.php");
?>

