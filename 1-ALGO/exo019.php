<?php
/*Exercice 19:
    Ecrire un algoritme qui demande un nombre de départ,
    et qui ensuite affiche les dix nombres suivants. par exemple,
    si l'utilisateur entre le nombre 17, le programme afichera les 
    nombres de 18 à 27.

    //demander la valeur
    $nombreDeDépart = readline("entré votre nombre");

    //faire une boucle
    recommancer j'usqua i ($nb < 17)
    ajouté 1 a $nb
    afficher nb
    
*/

    //demander le nombre de départ
    $nbDépart = readline("entré votre nombre ");

    //faire une boucle
    for ($nbDépart = 5; $nbDépart < 52; $nbDépart++) { 
        echo (" le chiffre est ".$nbDépart); 
    }
   
?>