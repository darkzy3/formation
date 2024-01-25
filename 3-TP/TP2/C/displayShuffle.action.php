<?php
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';
*/
include_once("../M/lib_function.php");

$placesList =   ["place 1 ", 
                "place 2 ", 
                "place 3 ", 
                "place 4 ", 
                "place 5 ", 
                "place 6 ", 
                "place 6 " ,
                "place 8 ", 
                "place 9 ", 
                "place 10 ", 
                "place 11 ",
                "place 12 ", 
                "place 13 ", 
                "place 14 ",
                "place 15 "];

///start session for give board value
session_start();
$studentsList = [" Simon", "Nacim", "Mathilde", "Amelie", "Ricky", "Lyesse", "Dylan", "Lorena", 
 "Tina", "Jeremy", "Florent", "Messaoud", "Farid", "Selim", "Abdel-Karim" ];

$studentsLocations = createStudentLocations($placesList, $studentsList);
$studentsLocations = shuffleLocation($studentsLocations);
$_SESSION["students"] = $studentsLocations;


header('Location: ../V/displayShuffle.php');
?>