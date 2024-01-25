<?php
//include controleur file
include_once "Rectangle.class.php";
//set all attributs for the book objet in readline for user
$len=readline("entré la longueur du rectangle : ");
$wid=readline("entré la largeur du rectangle : ");
// creat new book object
$rec1 = new Rectangle($len, $wid);
//call all function for display object information
// $perimeter = $rec1->perimeter();
// $area = $rec1->area();
// $isSquare = $rec1 -> isSquare();
// $all = $rec1 -> all();
//display all methode he combine all attribute methode
$all = $rec1 -> all();