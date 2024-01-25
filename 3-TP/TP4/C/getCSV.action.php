<?php
session_start();
$_SESSION["studentsLocation"] = null;
include_once("../M/lib_function.php");

$placesList =   ["PLACE_1", "PLACE_2", "PLACE_3", "PLACE_4", "PLACE_5", "PLACE_6", 
                "PLACE_7","PLACE_8", "PLACE_9", "PLACE_10", "PLACE_11","PLACE_12", 
                "PLACE_13", "PLACE_14","PLACE_15","PLACE_16"];

//function action
$studentsList = file($_FILES ['file']['tmp_name']);
$studentsLocations = createStudentLocations($placesList, $studentsList);
$studentsLocations = shuffleLocation($studentsLocations);
///start session for give board value
$_SESSION["studentsLocations"] = $studentsLocations;
header("location: ..\V\displayShuffleCsv.php");
?>

