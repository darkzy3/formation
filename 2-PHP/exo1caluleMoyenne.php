<?php
/*
Exercice 2 : Écrivez une fonction nommée "calculerMoyenne" qui prend un tableau de nombres en entrée et renvoie la moyenne de ces nombres.
Utiliser les fonctions array_sum() et count() 
 
/ Exemple d'utilisation :
$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres); // Renvoie 30
*/
// creat function for calculate average name:calculerMoyenne; inType: array; outType:bool
function calculerMoyenne(array $listeNombres): float {
    // init value
    $somme = 0;
    $nbBoard  = count($listeNombres);
    // forech loop tu addition
    foreach ($listeNombres as $value) {
        $somme += $value;
    }
    //return the division
    return $somme/$nbBoard;
}

// array for function
$listeNombres = array(10, 20, 30, 40, 50);
// display result
echo calculerMoyenne($listeNombres);
?>