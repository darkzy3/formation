<?php
//include controleur file
include_once "Compte.class.php";

// costumer information
//first customer and bank accont
$name = "Salim";
$firstname = "Omar";
$cin = "EE111222";
$phone = "06.11.11.11";

$account1 = new Account ( 0, $name, $firstname, $cin, $phone);

//second customer and bank accont
$name = "Karimi";
$firstname = "samir";
$cin = "EE333444";
$phone = "06.22.22.22";

$account2 = new Account ( 4000, $name, $firstname, $cin, $phone);

$account1 -> resumCpt();
$account1-> nbCpt();

?>