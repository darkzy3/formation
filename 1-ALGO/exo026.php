<?php
/*Exercice 26:
    Saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation
    ax^2 + bx + c = 0.

    algorihtme équations
        Var a, b, c.
            //set variable
            $a = readline("entré votre premier nombre");
            $b = readline("entré votre desiéme nombre");
            $c = readline("entré votre troisiéme nombre");

            //definition delta
            $delta = ( $b * $b ) - 4 * ( a * c )

            //set if and else
            if ( $delta < 0 ) {
                display "il n'y a pas de résultat";
            } elseif ( $delta > 0) {
                display "il y a 2 solution possible"
            } else {
                display "il n'y a qu'une solution"
            }

*/

    //déclaration of variable
    $nbA = readline("entré le chiffre A ");
    $nbB = readline("entré le chiffre B ");
    $nbC = readline("entré le chiffre C ");

    //set up delta
    $delta = ($nbB * $nbB) - 4 * ($nbA * $nbC);
    
    //set up x0, x1 and x2.
    $x0 = -( $nbB / (2 * $nbA ));
    $x1 = (-$nbB - sqrt($delta)) / (2*$nbA);
    $x2 = ($nbB - sqrt($delta)) / (2*$nbA);

     if ($delta > 0) {
        echo "il y a 2 solution possible ".$x1 and " et ".$x2;
    } elseif ($delta < 0 ) {
        echo "il n'y a pas de résultat";
    } elseif ($delta == 0) {
        echo "il n'y a que 1 seul résultat possible ".$x0;
    }
?>