<?php
/*Exercice 1 : Affichage d'un tableau en 2D

Description : Écrivez un script PHP qui utilise une double boucle pour afficher un 
tableau en 2D sous forme de tableau .
$tab2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
*/
$tab2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

for ($i = 0; $i < count($tab2D); $i++) {

  for ($j = 0; $j < count($tab2D[$i]); $j++) {
    echo $tab2D[$i][$j]." |";
    
  }
  echo "\n";
}
?>