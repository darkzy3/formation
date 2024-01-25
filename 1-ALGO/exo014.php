<?php
/*Exercice 14:
    Ecrire un algoritme qui demande deux nombres a l'utilisateur et l'informe
    ensuite si leur produit est négatif ou positif (on laisse de côté le cas où
    le produit est nul). Attention toutefois : on ne doit pas calculer le produit
    des deux nombres.

        //demander les valeur a enregistré
            valeur1 < readline("entré le premier nombre");
            valeur2 < readline("entré le desiéme nombre");

        //faire le calcule pour pouvoire donner la réponse
            produit = valeur1 * valeur2;

        //savoire si le résultat est positif ou negatif
            si les 2 chiffre sont psitif ou negatif alors  envoyer "positif";
            si 1 des 2 chiffre est négatif alors envoyer "négatif";
            si non le résultat est négatif;
*/

    //demander les valeur voulut
    $nb1 = readline("entré le premier chiffre de l'opération ");
    $nb2 = readline("entré le deuxiéme chiffre de l'oppération ");

    //faire la deduction et répondre a l'utilisateur
    if ($nb1 > 0 && $nb2 > 0) {
        echo "le résultat est positif ";
    } else if ($nb1 < 0 && $nb2 < 0) {
        echo "le résulta est positif ";
    } else  {
        echo "le résulta est négatif";
    }

//fin
?>