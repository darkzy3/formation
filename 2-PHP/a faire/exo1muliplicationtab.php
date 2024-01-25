<?php
/*Exercice 3 : Multiplication de deux tableaux

    Description : Écrivez un script PHP qui utilise une double boucle pour multiplier 
    chaque élément d'un tableau par chaque élément d'un autre tableau, puis affichez les 
    résultats.

    $tableau1 = [1, 2, 3];
    $tableau2 = [4, 5, 6];
*/
$tab1 = [1, 2, 3];
$tab2 = [4, 5, 6];
$tab = [];

for ($i=0; $i <count($tab1) ; $i++) { 
    $tab[$i] =  $tab1[$i] * $tab2[$i];
    echo $tab[$i] ." |";
}

for ($i=0; $i <count($tab1) ; $i++) { 
    for ($j=0; $j < count($tab2) ; $j++) { 
        $tab[$i] =  $tab1[$i] * $tab2[$j];
    echo $tab[$i] ." |";
    }
}

?>