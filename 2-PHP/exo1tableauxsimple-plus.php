<?php
/*
Exercice 2 (Tableau Simple) : Créez un tableau de chaînes de caractères.
Triez le tableau en ordre alphabétique et affichez le résultat.
Utiliser une fonction de trie de tableau
Utiliser la fonction implode implode(", ", $fruits) : String pour l'affichage.
$fruits = array("pomme", "banane", "fraise", "kiwi", "orange");
*/
$fruits = array("pomme", "banane", "fraise", "kiwi", "orange");
sort($fruits);
for ($i=0; $i < count($fruits); $i++) { 
    echo "$fruits[$i] is: ". implode(" |", $fruits)."\n";
    
}


?>