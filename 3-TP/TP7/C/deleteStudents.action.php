<?php
include_once "../M/lib_function.php";

session_start();

$id = $_POST['delete'];
deleteStudent($id);

header("Location: ../V/index.php");
?>