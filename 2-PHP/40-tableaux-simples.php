<?php

// Créez une variable du nom de votre choix et affectez-lui un tableau contenant :
// - un nombre entier
// - un nombre à virgule flottante
// - une chaîne de caractères

$tab = [8, 4.5, "bonjours"];

for ($i=0; $i < count($tab); $i++) { 
    echo $tab[$i];
    echo"\n";
}