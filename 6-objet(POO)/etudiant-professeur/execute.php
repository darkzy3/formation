<?php
//-------------------------------------------inclusion of all fille need---------------------------------------------
include_once "personne.class.php";
include_once "Etudiant.class.php";
include_once "Employer.class.php";
include_once "Professeur.class.php";
//-------------------------------------------set up all classe---------------------------------------------
$employer1 = new Employer ("DOUK", "Rachid", 10000.0);
$employer2 = new Employer ("NGOYE", "Roland", 10000.0);
$eleve1 = new Etudiant ("OBAKA", "Med", 65678754);
$eleve2 = new Etudiant ("ALSENY", "Thomas", 87543543);
$prof1 = new Professeur ("JAVA/JEE", "OBA","Kevin", 5700.0);
$prof2 = new Professeur ("PHP", "MAGASSOUBA","Cheick", 5700.0);

echo "\n";
echo "******* liste des employer : *******\n";
echo $employer1."\n";
echo $employer2."\n";
echo "\n";
echo "******* liste des étudiant : *******\n";
echo $eleve1."\n";
echo $eleve2."\n";
echo "\n";
echo "******* liste des professeur : *******\n";
echo $prof1."\n";
echo $prof2."\n";
echo "\n";