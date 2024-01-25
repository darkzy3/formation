<?php
/*
Exercice 8 : Créez un tableau de dates de naissance.
Utilisez une boucle foreach pour afficher l'âge de chaque personne en années.
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");
*/
// set birthdays date
$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");
//take the prensent date
$today = new DateTime();
// make foreach loop tu calculet yers of person
foreach ($birthdays as $birthday) {
  $age = $today->diff(new DateTime($birthday))->y;
  // display result
  echo "L'âge de la personne née le $birthday est de $age ans.\n";
}

?>