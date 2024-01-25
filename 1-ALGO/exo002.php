<?php
/*Exercice 2
    Quelle seront les valeurs des variables A, B et C après execution 
    des instruction suivante ?
    
    Var A, B, C : Entier;
        début
            a < 5
            b < 3
            c < a + b
            a < 2
            c < b - a
        fin

    a = 5  b = ? c = ?
    a = 5  b = 3 c = ?
    a = 5  b = 3 c = 8
    a = 2  b = 3 c = 8
    a = 2  b = 3 c = 1
*/
        //opération variable
        $a = 5;
        $b = 3;
        $c = $a + $b;
        $a = 2;
        $c = $b - $a;

    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
    echo "\n";
    echo "C = ".$c;
?>