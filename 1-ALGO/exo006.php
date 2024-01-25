<?php
/*Exercice 6:
    Ecrire un algorithme permettant déchanger les
    valeurs de deux variable A et B.

    a = 5 b = ? c = ?
    a = 5 b = 2 c = ?
    a = 5 b = 2 c = 5
    a = 2 b = 2 c = 5
    a = 2 b = 5 c = 5
 */
        //opération variable
        $a = 5;
        $b = 2;
        $c = $a;
        $a = $b;
        $b = $c;
    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
?>

