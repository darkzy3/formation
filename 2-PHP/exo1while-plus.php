<?php
/*
Exercice 2 : Créez un script qui calcule la somme des nombres de 1 à 100 à l'aide d'une 
boucle "while".
*/
$a=1;
$result=0;

while ($a <= 100) {
    $result += $a;
    $a++;
}

echo $result;
?>