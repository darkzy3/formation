<?php
//start session for give board value
session_start();
//include librery function
include_once("../M/lib_function.php");
//set place liste
$placesList =   ["PLACE_1", "PLACE_2", "PLACE_3", "PLACE_4", "PLACE_5", "PLACE_6", 
                "PLACE_7","PLACE_8", "PLACE_9", "PLACE_10", "PLACE_11","PLACE_12", 
                "PLACE_13", "PLACE_14","PLACE_15","PLACE_16"];

$studentsList = [" Simon", "Nacim", "Mathilde", "Amelie", "Ricky", "Lyesse", "Dylan", "Lorena", 
"Tina", "Jeremy", "Florent", "Messaoud", "Farid", "Selim", "Abdel-Karim", " " ];

// //take value session in variable
// $studentsList = $_SESSION["student_list"];
//call function for use and assign to variable
$studentsLocations = createStudentLocations($placesList, $studentsList);
$studentsLocations = shuffleLocation($studentsLocations);
saveToCSVFile($studentsLocations);
//set value in session
$_SESSION["shuffled_list"] = $studentsLocations;

//destination view
header('Location: ../V/displayShuffle.php');
?>