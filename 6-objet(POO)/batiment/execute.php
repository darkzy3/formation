<?php
include_once "Adresse.class.php";
include_once "Batiment.class.php";
include_once "Maison.class.php";


$adresse1 = new Adresse (31, "rue du luxembourg", "roubaix", "nord");
$batiment1 = new Batiment ($adresse1, 50000);
$maison1 = new Maison ($adresse1, 40000, 50);
echo $maison1;