<?php
include_once "Employer.classe.php";

$employer1 = new Employer (10941, "Martin", "omar", "04/08/1990", "5/11/2015", 10000);
$employer1 -> AfficherEmploye();
$employer1 -> augmentationDuSalaire();
$employer1 -> AfficherEmploye();