<?php

/*

écrire une fonction nommée `adresse` qui :

- prend un paramètre nommé `$numero`
- prend un paramètre nommé `$rue`
- prend un paramètre nommé `$code_postal`
- prend un paramètre nommé `$ville`
- concatène (met bout à bout, chaîne) tous les paramètres en les séparant d'une virgule suivie d'un espace `', '`
- renvoit le paramètre

appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat

*/

function adress(Int $numero, String $rue, Int $code_postal, String $ville) {
    return (("$numero".", "."$rue".", "."$code_postal".", "."$ville"));
}

echo adress(75, "rue des oiseau", 31500, "lille"); 