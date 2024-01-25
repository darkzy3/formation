<?php
/*
Exercice 7 : Conversion de date en format lisible

Description : Écrivez un script PHP qui prend une date au format "Y-m-d" en entrée et 
utilise la fonction native date() pour convertir la date en un format lisible, puis 
l'affiche.
*/

//take today date in string object
$date = new DateTime();
//display date in string with format
echo $date->format("l d F Y");
?>