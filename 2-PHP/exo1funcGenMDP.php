<?php
/*
Exercice 5 : Créez une fonction nommée "genererMotDePasse" qui génère un mot de 
passe aléatoire de longueur donnée. Le mot de passe doit contenir des lettres majuscules, 
des lettres minuscules et des chiffres.

/ Exemple d'utilisation :
$resultat = genererMotDePasse(8); // Exemple de mot de passe généré : "aB3x7Kp2"
*/

//ask foor lenth of password
$lenth = readline(" entré le nombre de caractére pour le mot de passe ");

// creat function for creat password
function genererMotDePasse(Int $lenth){
    //string chaine with all possible character
    $chaine = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // use function to shuffle
    $chaine = str_shuffle($chaine);
    // cut the string chaine to lenth wanted per user
    $chaine = substr($chaine,0,$lenth);
    //return result
    return ($chaine);
}

//display the shuffled password
echo genererMotDePasse($lenth);
// $resultat = genererMotDePasse(8);
?>