<?php

// Copiez-collez le tableau que vous avez écrit dans l'exercice 2) des tableaux simples (`tableaux-simples.php`)
// Écrivez le code d'une boucle `for` qui affiche dans la console toutes les valeurs du tableau
// Vous devez utiliser la fonction `count()` pour déterminer le nombre maximal de boucles

$tabNumber = [5, 6, 12];
$tabSting = ["name", "adresse","born city"];

for ($i = 0; $i < count($tabNumber); $i++) {
    echo $tabNumber [$i];
    echo "\n";
    echo $tabSting [$i];
    echo "\n";
    }