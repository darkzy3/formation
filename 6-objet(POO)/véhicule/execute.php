<?php
include_once "Vehicule.class.php";
include_once "Voiture.class.php";
include_once "Camion.class.php";

$camion = new Camion ("2003", 50000, "ford");
$voiture = new Voiture ("2023", 100000, "porch");
echo $voiture;
echo $camion;