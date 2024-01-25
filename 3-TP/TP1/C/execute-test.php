<?php
//include function library
include_once "../M/lib_functions.php";
//path of csv document
$pathFile = '..\CSV_Backups\02-11-2023T09-47-32.csv';
//tell the function to assigne in variable
$fileContent = CSVFileToArray ($pathFile);
//path of csv document
$pathFile = '..\CSV_Backups\02-11-2023T09-47-32.csv';
//tell the function to assigne in variable
$pathFile = getColumnsFromCsv( $pathFile, 2);
//print the board
print_r($pathFile); 

?>