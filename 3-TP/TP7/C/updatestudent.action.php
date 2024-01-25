<?php
include_once "../M/lib_function.php";

session_start();

$id = $_POST['id'];
$firstname = $_POST['firstname'];
editStudent($id, $firstname);

header("Location: ../V/index.php");
?>