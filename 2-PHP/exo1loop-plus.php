<?php
/*
Exercice 1 : Créez un script qui affiche les entiers de 100 à 1 en ordre décroissant à l'aide d'une boucle "for".
*/

$loop = 100;

for ($i=1; $i <= 100 ; $i++) { 
    $loop -= 1;
    echo " $loop |";
    // echo "\n";
}

?>