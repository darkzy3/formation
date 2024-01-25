<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

///answer
$even = 0;

for ($i=0; $i <= 100 ; $i++) { 
    $even = $i++;
    echo("$even \n");
}
