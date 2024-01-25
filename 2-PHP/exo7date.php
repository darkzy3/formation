<?php
/*
Exercice 7 : Créez un tableau de dates (au format "YYYY-MM-DD").
Utilisez une boucle foreach pour déterminer la date la plus ancienne dans le tableau.
$dates = array("2023-05-10", "2022-12-15", "2024-02-20", "2021-08-05");
*/

// set date in array
$dates = array("2023-05-10", "2022-12-15", "2024-02-20", "2021-08-05");
// recherche the most back date
$date_la_plus_ancienne = $dates[0];
// make foreach loop to deduction
foreach ($dates as $date) {
  if (strtotime($date) < strtotime($date_la_plus_ancienne)) {
    $date_la_plus_ancienne = $date;
  }
}
// display result
echo "La date la plus ancienne est : $date_la_plus_ancienne";

?>