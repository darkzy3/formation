<?php
include_once "Filiere.class.php";
include_once "Etudiant.class.php";


$filiere1 = new Filiere (1, "0220", "Informatique");
$filiere2 = new Filiere (2, "0230", "Techno de l'info et de communication");
$filiere3 = new Filiere (3, "0240", "Génie civil");
$tabFiliere = [ $filiere1, $filiere2, $filiere3];


$etud1 = new Etudiant ("Mohamed", "Rashid", new DateTime("02-01-1995"), $filiere1);
$etud2 = new Etudiant ("Chakib", "Yves", new DateTime("02-04-1992"), $filiere1);
$etud3 = new Etudiant ("Manal", "Martin", new DateTime("02-03-2011"), $filiere2);
$etud4 = new Etudiant ("Meriem", "Jacques", new DateTime("02-11-2000"), $filiere3);
$etud5 = new Etudiant ("Mouad", "Rami", new DateTime("02-01-2013"), $filiere3);
$etudiant = [$etud1, $etud2, $etud3, $etud4, $etud5];

foreach ($tabFiliere as $filiere) {
    echo $filiere;
    foreach ($etudiant as $etud) {
        if ($etud->getFiliere() == $filiere) {
        echo $etud;
        }
    }
}