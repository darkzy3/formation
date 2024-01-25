<?php
/*Exercice 16:
    Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe
    ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement
    du cas où le nombre vaut zéro).

        //demander la valeur
        $nb = readline("entré votre chiffre");

        //réaliser la déduction et afficher le résultat
        si (nb > 0) {
            afficher "le nombre est positif";
        } sinon si (nb == 0) {
            afficher "le nombre est nul";
        } sinon {
            afficher "le nombre est négatif";
        }
    */

    //demander la valleur    
    $nb = readline("entré votre chiffre ");


    // réaliser la déduction est afficher le résultat
    if ($nb > 0) {
        echo "le nombre est positif";
    } elseif ($nb == 0) {
    echo"le nombre est nul";
    } else {
        echo "le nombre est négatif";
    }
?>