<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
$variable est un nombre entier
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un objet
$variable a la valeur null

*/

// $variable = 42;

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

///answer
// $variable = 42;
// switch ($variable) {
//     case 'is_int($variable)':
//         echo '$variable est un nombre entier';
//         echo PHP_EOL;
//     break;
//     case 'is_string($variable)':
//         echo '$variable est une chaîne de caractères';
//         echo PHP_EOL;
//     break;
//     case 'is_float($variable)':
//         echo '$variable est un nombre à virgule flottante';
//         echo PHP_EOL;
//     break;
//     case 'is_object($variable)':
//         echo '$variable est un objet';
//         echo PHP_EOL;
//     break;
//     default:
//         echo '$variable est un nombre entier';
//         echo PHP_EOL;
//     break;
// }
    // end

// $variable = 'cours de php';

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

///answer
// $variable = 'cours de php';
// switch ($variable) {
//     case is_int($variable):
//         echo '$variable est un nombre entier';
//         echo PHP_EOL;
//     break;
//     case is_string($variable):
//         echo '$variable est une chaîne de caractères';
//         echo PHP_EOL;
//     break;
//     case is_float($variable):
//         echo '$variable est un nombre à virgule flottante';
//         echo PHP_EOL;
//     break;
//     case is_object($variable):
//         echo '$variable est un objet';
//         echo PHP_EOL;
//     break;  
//     default:
//         echo '$variable a la valeur NULL';
//         echo PHP_EOL;
//     break;
// }
     // end

// $variable = decbin($variable);
// $variable = 4.2;

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

///answer

// $variable = 4.2;
// $variable = decbin($variable);
// $variable = 4.2;

// switch ($variable) {
//     case is_int($variable):
//         echo '$variable est un nombre entier';
//         echo PHP_EOL;
//     break;
//     case is_string($variable):
//         echo '$variable est une chaîne de caractères';
//         echo PHP_EOL;
//     break;
//     case is_float($variable):
//         echo '$variable est un nombre à virgule flottante';
//         echo PHP_EOL;
//     break;
//     case is_object($variable):
//         echo '$variable est un objet';
//         echo PHP_EOL;
//     break;
//     default:
//         echo '$variable a la valeur NULL';
//         echo PHP_EOL;
//     break;
// }
    // end


// $variable = new stdClass();

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur NULL';
//     echo PHP_EOL;
// }

///answer
// $variable = new stdClass();

// switch ($variable) {
//     case is_int($variable):
//         echo '$variable est un nombre entier';
//         echo PHP_EOL;
//     break;
//     case is_string($variable):
//         echo '$variable est une chaîne de caractères';
//         echo PHP_EOL;
//     break;
//     case is_float($variable):
//         echo '$variable est un nombre à virgule flottante';
//         echo PHP_EOL;
//     break;
//     case is_object($variable):
//         echo '$variable est un objet';
//         echo PHP_EOL;
//     break;
//     default:
//         echo '$variable a la valeur NULL';
//         echo PHP_EOL;
//     break;
// }
    // end

// $variable = null;

// if (is_int($variable)) {
//     echo '$variable est un nombre entier';
//     echo PHP_EOL;
// } else if (is_string($variable)) {
//     echo '$variable est une chaîne de caractères';
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo '$variable est un nombre à virgule flottante';
//     echo PHP_EOL;
// } else if (is_object($variable)) {
//     echo '$variable est un objet';
//     echo PHP_EOL;
// } else if (is_null($variable)) {
//     echo '$variable a la valeur null';
//     echo PHP_EOL;
// }


///answer
$variable = null;

switch ($variable!== 0 ) {
    case is_int($variable):
        echo '$variable est un nombre entier';
        echo PHP_EOL;
    break;
    case is_string($variable):
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
    break;
    case is_object($variable):
        echo '$variable est un objet';
    break;
    case is_float($variable):
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
    break;

    default:
        echo '$variable a la valeur null';
        echo PHP_EOL;
    break;
}