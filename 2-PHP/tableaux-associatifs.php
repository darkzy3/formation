<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

// 3. Parcourir le premier tableau et afficher uniquement la valeur.

// 4. Parcourir le premier tableau et afficher le clé et la valeur.

$tabFirst = [ " quatre virgule quatre "=> 4.4, 
              " cinq virgule deux " =>5.2 , 
              " six virgule trois "=>  6.3 
];

foreach ($tabFirst as $key => $value) {
    echo " $value: $key" ;
    echo "\n";
}
?>