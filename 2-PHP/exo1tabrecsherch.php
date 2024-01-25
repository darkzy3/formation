<?php
/*Exercice 5 : Recherche d'un élément dans un tableau

    Description : Écrivez un script PHP qui prend un tableau de nombres et un nombre à 
    rechercher en entrée, puis utilise la fonction native in_array() pour déterminer si 
    le nombre se trouve dans le tableau. Affichez un message approprié.
*/

$board= [5, 15, 12, 45, 7, 1, 9, 6];
$serch = readline("entré le chiffre rechercher ");

if (in_array($serch, $board)) {
    echo "$serch est bien dans le tableaux";
} else {
    echo "$serch n'est pas dans le tableaux";
}
?>