<?php
/* Exercice 34:
    Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a 
    été préalablement saisi).

    Var $tab, $sum
        ///set variable
        $tab = array (5, 5, 2 ,6 ,4 ,8 )
        $sum
        ///make loop
        for ($i=0; $i <= 6; $i++) { 
            $sum = $sum + $tab [$i]
        }
*/

        ///set variable
        $tab = array (5, 5, 2 ,6 ,4 ,8 );
        $sum = 0 ;
        
        //make loop
        for ($i=0; $i <= 6; $i++) { 
            $sum = $sum + $tab [$i];
        }

        echo $sum;

?>