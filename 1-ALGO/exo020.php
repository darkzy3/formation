<?php
/*Exercice 20:
    Ecrire un algorithme qui demande un nombre de départ,
    et qui calcule la somme des entiers j'usqu'à ce nombre.
    Par exemple, si l'on entre 5, le programe doit calculer :
    1 + 2 + 3 + 4 + 5 = 15

    algoritme somme;
        Var nbDépart, i, résultat
            début
                demander nbDépart
                résultat <- résultat + i
                faire une boucle i en 1 par nbDépart
                afficher le résultat
            fin

*/

    //demander le nombre de départ
    $nbDepart = readline("entré votre chiffre ");

    //variable qui vas monter
    $som = 0;

    //faire la boucle
    for ($i = 1; $i <= $nbDepart ; $i++) { 
        $som += $i; 
    }
    echo " ".$som;
?>

