<?php
/*
Exercice 3 : Créez une fonction nommée "estPalindrome" qui prend une chaîne de caractères en entrée et renvoie vrai si la chaîne est un palindrome 
se lit de la même manière de gauche à droite et de droite à gauche), sinon renvoie faux.
 
/ Exemple d'utilisation :
$resultat = estPalindrome("radar"); // Renvoie vrai
 
*/
//ask word to test
$word = readline("enter your word ");
// function for verifie revers reeding
// name:palindrome ; inType: string ; outType: bool
function palindrome(String $chaine): Bool {
    // take number of letters
    $lenth = strlen($chaine);
    //for loop to proceed verification false
    for ($i=0; $i < $lenth/2; $i++) { 
        if ($chaine[$i] != $chaine [$lenth - 1 - $i]) {
            return false;
        }
    }
    return true;
}
// display result
echo palindrome($word);
?>