<?php
/*Exercice 17:
    Ecrire un algorithme qui demande deux nombres à l'utilisatuer et l'informe
    ensuite si le produit est négatif ou positif (on inclut cette fois le
    traitement du cas où le produit peut étre nul).
    
    //demander les valeur a l'utilisateur
    a < readline(text);
    b < readline(text);

    //calculer le produit
    produit = a * b;

    //déduire si le résultat est positif ou négatif
    if (produit > 0) echo " le produit est positif"; 
        else if (produit < 0) echo " le produit est négatif";
            else echo "le produit est nul";
*/



    // prendre les valeur
    $nb1 = readline("entré le premier chiffre de l'opération ");
    $nb2 = readline("entré le deuxiéme chiffre de l'oppération ");

    //faire le calcule
    $produit = $nb1 * $nb2;



        if ($produit > 0) {
            echo "le résulta est positif ";
        } else if ($produit = 0) {
            echo "le résulta est nul ";
            } else {
                echo "le résulta est négatif";
            }
?>