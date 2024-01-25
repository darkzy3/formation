<?php
include_once('../M/lib_function.php');
//take the value and attribute to variable
$name = $_POST['name'];
$firstName = $_POST['firstName'];
$gender = $_POST['gender'];
//use the fonction ton insert in Data Base
insertStudents($name, $firstName, $gender);
//returne success page
header('Location: ../V/get1_success.php');
?>