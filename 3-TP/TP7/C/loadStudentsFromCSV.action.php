<?php
//includ librery fonction
include_once("../M/lib_function.php");
// starte session to immplode value
session_start();
$_SESSION = Null;
//set variable and call function to select colomun
$pathFile = $_FILES ["file"]["tmp_name"];
$studentLocations = getColumnsFromCSV ($pathFile,$_POST ["col"]);
//assigne result in the session
$_SESSION ["shuffled_list"] = $studentLocations;
//set destination of controler
header("Location:../V/displayloadStudentsFromCSV.php");
