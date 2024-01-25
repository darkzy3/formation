<?php
/*
Exercice 3 : Créez un tableau de chaînes de caractères contenant des phrases. 
Utilisez une boucle foreach pour trouver la phrase la plus longue dans le tableau.
 
$phrases = array(
    "La vie est belle.",
    "L'apprentissage est essentiel pour grandir.",
    "Le monde est vaste et mystérieux."
);
*/
$phrases = array(
    "La vie est belle.",
    "L'apprentissage est essentiel pour grandir.",
    "Le monde est vaste et mystérieux."
);
$maxString = 0;
foreach ($phrases as $phrase) {
    $string = strlen($phrase);
    if ($maxString < $string) {
        $maxString = $string;
    } 
}
echo $maxString
?>