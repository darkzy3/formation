<?php
include_once "Personne.class.php";
include_once "Devloppeur.class.php";
include_once "Manager.class.php";

$dev1= new Devloppeur ("ziouche", "lyesse", "les.@gmail.com", "06", 2000, "back end");
$dev2 = new Devloppeur ("radis", "louise", "les.@gmail.com", "06", 2000, "front end");
$manager1= new Manager ("arnold", "yves", "les.@gmail.com", "06", 2000, "informatique");
$manager2 = new Manager ("strauss", "pénélop", "les.@gmail.com", "06", 2000, "comunication");

echo $manager1;
echo $dev1;
echo $manager2;
echo $dev2;