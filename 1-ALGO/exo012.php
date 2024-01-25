<?php
/*Exercice 12:
    Ecrire un programme qui lit le prix HT d'un article, le nombre
    d'articles et le taux de TVA, et qui fournit le prix total TTC
    correspondant. Faire en sorte que les libellés aparclairement.
    (TTC = NA * HT *(1 + TVA))
*/

    //liste des valeur variable
    $HT = readline("entré le prix hort taxe ");
    $TVA = readline("entré la tva ")/100;
    $nbArticle = readline("entré le nombre d'article ");

    //formule pour afficher le prix TTC
    $TTC = $nbArticle * $HT * (1 + $TVA);

    //affichage des valeur demander
    echo "le prix HT est de ".$HT;
    echo " la TVA est de ".$TVA;
    echo " le nombre d'article esst de ".$nbArticle;
    echo " le prix TTC est de ".$TTC;

?>