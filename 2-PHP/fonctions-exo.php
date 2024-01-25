<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;
echo "nombre_places_parking = " .($nombre_places_parking - $nombres_voitures);
echo PHP_EOL;

function calcule_placeParking($nombre_places_parking, $nombres_voitures): Int {   
    $place_libres = $nombre_places_parking - $nombres_voitures;
    return $place_libres;
};

calcule_placeParking($nombre_voitures, $nombre_places_parking);
echo $place_libres;