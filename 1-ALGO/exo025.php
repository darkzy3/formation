<?php
/*Exercice 25:
    Ecrire un algorithme saisissant 2 variables entières qui calcule et 
    affiche leur moyenne.

    algorihtme average
        Var $nb1, $nb2, $somme, $squar.
            strat
                //set variable
                //calculated the square
                $somme = $nb1 + $nb2;
                $square = sqrt($somme);
                //display result
                display "la moyenne est ".$square
*/

    //set variable;
    $nb1 = readline("entre votre premier nombre ") ;
    $nb2 = readline("entre votre deusiéme nombre ") ;
    
    //calculated the number
    $somme = $nb1 + $nb2 ;
    $square = sqrt($somme) ;

    //display result
    echo " et leurs moyenne est ".$square;
?>