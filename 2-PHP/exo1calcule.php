<?php
/*
Exercice 1 : Créez une fonction nommée "calculerCarre" qui prend un nombre en entrée et 
renvoie le carré de ce nombre.
    
    Exemple d'utilisation :
$resultat = calculerCarre(5); // Renvoie 25
*/
// make function to calculet the square
// name: calculerCarre ; inType: int ; outType: int
function calculerCarre(int $chiffre) : int{
  return $chiffre * $chiffre;
}
// display result
echo calculerCarre(5);
?>