<?php
/*Exercice 13:
    Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe
    ensuite si le nombre est positif ou negatif (on laisse de côté le cas 
    où le nombre vaux zéro). 

    //detecter le nombre donner par l'utilisateur
    $nb = readline("entré le chiffre");
    
    //savoire si il est positif ou négatif
    if $nb < 0 alors il est negatif;
        else il est positif;

    //envoyer le resulta
    echo "le résulta est ...";
*/

    $nb = readline("entré votre chiffre ");

    if ($nb < 0) echo "le nombre est négatif";
        else echo "le nombre est positif"

?>