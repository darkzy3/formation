<?php
// starte session to immplode value
session_start();
//clear session
$_SESSION["studentsLocation"] = null;
//include librery function
include_once("../M/lib_function.php");
//list of place
$placesList =   ["PLACE_1", "PLACE_2", "PLACE_3", "PLACE_4", "PLACE_5", "PLACE_6", 
                "PLACE_7","PLACE_8", "PLACE_9", "PLACE_10", "PLACE_11","PLACE_12", 
                "PLACE_13", "PLACE_14","PLACE_15","PLACE_16"];
// ://call for function action
// $studentsList = file($_FILES ['file']['tmp_name']);
// $studentsLocations = createStudentLocations($placesList, $studentsList);
// $studentsLocations = shuffleLocation($studentsLocations);

// :// for ($i=0; $i < sizeof($studentsList); $i++) { 
//: //     $studentsList = $studentsList[$i][0];
// :// }

// saveToCSVFile($studentsLocations);

//: //give board value at the session
// $_SESSION["studentsLocations"] = $studentsLocations;
// ://set submit page
// header("location: ..\V\displayShuffleCsv.php");

$pathFile = $_FILES ["file"]["tmp_name"];
$fileArray = CsvFileToArray($pathFile);
$shuffled_list = [];
 
for ($i=0; $i < sizeof($fileArray) ; $i++) {
    $shuffled_list [$i] = $fileArray [$i] [1];
}
$_SESSION ["student_list"] = $shuffled_list;
 
$studentLocations = createStudentLocations($placesList, $shuffled_list);
$studentLocations= shuffleLocation($studentLocations);
$_SESSION ["shuffled_list"] = $studentLocations;
saveToCSVFile($studentLocations);
header("Location:../V/displayShuffleCSV.php");
?>

