<?php
//include controleur file
include_once "Article.class.php";

$reference = "article";
$designation = "item";
$prixHT = 18;
$tauxTVA = 20;

$item = new Items($reference, $designation, $prixHT, $tauxTVA);
$prixTTC = $item -> afficherArticle();
?>