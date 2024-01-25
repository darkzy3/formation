<?php
include_once "../modele/BbManager.php";
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';

var_dump($_POST);
var_dump($_GET);
if ($_POST['prenom'] == 'moussa'){
	var_dump($_POST);
	header('Location: ../views/get1_success.php');
}else{
	header('Location: ../views/get1_error.php');
}*/


$name = $_POST['nom'];
$surname = $_POST['prenom'];
$sex = $_POST['sex'];

insertEmploye($name, $surname, $sex);
header('Location: ../views/get1_success.php');

?>