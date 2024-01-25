<?php
/*Exercice 4:
    Quelles seront les valeurs des variables A, B et C
    après exécution des instruction suivantes ?
    Var A, B, C : Entier;
    
        début:
            A < 3
            B < 10
            C < A + B
            B < A + B
            A < C
        fin

    a = 3  b = ?  c = ?
    a = 3  b = 10 c = ?
    a = 3  b = 10 c = 13
    a = 3  b = 13 c = 13
    a = 13 b = 13 c = 13
*/
        //opération variable
        $a = 3;
        $b = 10;
        $c = $a + $b;
        $b = $a + $b;
        $a = $c;

    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
    echo "\n";
    echo "C = ".$c;
?>