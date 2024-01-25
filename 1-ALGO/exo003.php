<?php
/*Exercice 3:
    Quelles seront les valeurs des variable A et B après exècution
    des instruction suivantes ?
    Var A, B : Entier
    
        début
            A < 5
            B < A + 4
            A < A + 1
            B < A - 4
        fin

    a = 5 b= ?
    a = 5 b = 9
    a = 6 b = 9
    a = 6 b = 2
*/
        //opération variable
        $a = 5;
        $b = $a + 4;
        $a = $a + 1;
        $b = $a - 4;

    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
?>