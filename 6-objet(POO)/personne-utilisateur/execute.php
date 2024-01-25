<?php
include_once "Personne.class.php";
include_once "Utilisateur.class.php";
include_once "Profil.class.php";

$profil1 = new Profil ("0258", "Chef de projet");
$user1 = new User ("lyesse", "lse.pro@gmail.com", "0627037640", 1000, "toto", "tete", "informatique", $profil1);
$profil2 = new Profil ("0257", "Directeur de projet ");
$user2 = new User ("folk", "fl.pro@gmail.com", "06.66.66.66", 1000, "toto", "tete", "informatique", $profil2);
$profil3 = new Profil ("0256", "Manager");
$user3 = new User ("lyesse", "lse.pro@gmail.com", "06.66.66.66", 1000, "toto", "tete", "informatique", $profil3);
$profil4 = new Profil ("0256", "Directeur des ressources humaines");
$user4 = new User ("lyesse", "lse.pro@gmail.com", "06.66.66.66", 1000, "toto", "tete", "informatique", $profil4);
$profil5 = new Profil ("0256", "Directeur général");
$user5 = new User ("lyesse", "lse.pro@gmail.com", "06.66.66.66", 1000, "toto", "tete", "informatique", $profil5);

echo $user1 ->calculerSalaire()."\n";
echo $user2 ->calculerSalaire()."\n";
echo $user3 ->calculerSalaire()."\n";
echo $user4 ->calculerSalaire()."\n";
echo $user5 ->calculerSalaire()."\n";