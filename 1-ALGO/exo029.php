<?php
/*Exercice 29:
    Ecrire un algorithme qui demande un nombre, calcule et affiche la somme
    cubique.


*/
    // //demander le nombre de départ
    // $nbDepart = readline("entré votre chiffre ");

    // //variable qui vas monter
    // $som = 0;

    // //!faire la boucle
    // for ($i = 1; $i <= $nbDepart ; $i++) { 
    //     $som = $som + $i*$i*$i; 
    // }
    // echo " ".$som;

        //demander le nombre de départ
        $nbDepart = readline("entré votre chiffre ");

        //variable qui vas monter
        $som = 0;
    
        //faire la boucle
        for ($i = 1; $i <= $nbDepart ; $i++) { 
            $som = $som + $i; 
        }
        $som = $som * $som;
        echo " ".$som;
?>