<?php
//include controleur file
include_once "Cercle.class.php";

$c1 = new Cercle(2, 3, 3);

$pt1 = $c1->getCentre();
$r1 = $c1 -> getRayon();
// var_dump($pt1);
// var_dump($r1);

$point = new Point (40,20);

$appart = $c1->appartien($point);
// echo $appartien;
$display = $c1 -> afficher();


?>