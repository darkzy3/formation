<?php
/*Exercice 21:
    Ecrire un algorithme qui demande un nombre de départ, 
    et qui calcule sa factorielle.

        algoritme factorielle;
        Var nbDépart, i, factorielle
            début
                demander nbDépart
                factorielle < factorielle * i
                faire une boucle i en 1 par nbDépart
                afficher le factorielle
            fin
*/

    //demander le nombre de départ
    $nbDepart = readline("entré votre chiffre ");

    //variable qui vas monter
    $fac = 1;

    //faire la boucle
    for ($i = 1; $i <= $nbDepart ; $i++) { 
        $fac = $fac * $i;
    }
    echo " ".$fac;
?>