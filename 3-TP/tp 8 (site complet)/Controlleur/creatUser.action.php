<?php
// include all file need
include_once "..\Model\User.class.php";
include_once "..\Model\BDDManager.class.php";

// set all attribut
$name = readline("votre nom : ");
$firstname = readline("votre prénom : ");
$mail = readline("votre email :");
$tel = readline("votre numero de telephone : ");
$telrecive = "$tel";
$password = readline("votre Mot De Passe : ");
$pass = "$password"; // (hash)

//creat user
$user = new User ($name, $firstname, $mail, $telrecive, $pass);
// add in BDD
BDDManager::createUser($user);