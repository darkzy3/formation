<?php
/*
Exercice 1 : Écrivez un script PHP qui utilise une boucle "while" pour afficher 
les nombres pairs de 2 à 20.
*/
$a = 0;
    while ($a <= 20) {
        if ($a += 2 ) {
            echo $a;
            echo "\n";
        } 
    }

?>