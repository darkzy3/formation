<?php
/*
Exercice 4 : Écrivez une fonction nommée "compterMots" qui prend une chaîne de caractères 
en entrée et renvoie le nombre de mots dans cette chaîne.
 
/ Exemple d'utilisation :
$texte = "Ceci est un exemple de texte.";
$resultat = compterMots($texte); // Renvoie 6
*/

// creatte function to count words
//name: compterMots ; inType : String ; outType: int
function compterMots(String $chaine): Int {
    $words = explode(" ", $chaine);

    return count($words);
}
//set value
$texte = readline("Ceci est un exemple de texte.");
//display result
echo compterMots($texte);
?>