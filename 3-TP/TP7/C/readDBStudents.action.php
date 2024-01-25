<?php
include_once "../M/lib_function.php";
session_start();
//call fonction to read the data base
$_SESSION['students'] = selectListeStudents();

header('location: ../V/displayShuffleCsv.php')
?>