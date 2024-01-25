<?php
/*Exercice 5
    Quelles seront les valeurs des variables A et B après
    exécution des instructions suivantes ?
    Var A, B : Entier
  
        début
            a < 5
            b < 2
            a < b
            b < a
          fin
     
    a = 5 b = ?
    a = 5 b = 2
    a = 2 b = 2
    a = 2 b = 2
*/

        //opération variable
        $a = 5;
        $b = 2;
        $a = $b;
        $b = $a;

    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
?>