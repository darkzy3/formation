<?php
/*Exercice 11
    Ecrire un programme qui demande un nombre à l'utilisateur,
    puis qui calcule et affiche le carré de ce nombre.

        //demander l'écriture
        readline("entré un nombre")

        //variable
        $chiffre = readline("contenue")

        //opération
        $chiffre2 = $chiffre^2

        //affichage
        echo "le carré du chiffre ".$chiffre "est ".$chiffre2

        //algorithme
            début
                chiffre < chiffre écrit par l'utilisatuer
                chiffre < chiffre * chiffre
                afficher le résulta
            fin
            
*/

    $chiffre = readline("entré votre chiffre");
    $chiffre = $chiffre * $chiffre;

    echo "le carré est ".$chiffre;
?>