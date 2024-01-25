<?php
/* Exercice 42:
    Ecrire un algorithme triant un tableau par séléction
    ° On cherche l'élément de plus petite valeur dans le tableau
    ° Le placer en tête du  tableau
    ° Recommencer avec le tableau moins la première case

*/
    //set value
   
    $tab = ["3", "8", "1", "5", "4", "6", "2", "7"];

    for ($i=0; $i <= sizeof($tab)-1; $i++) {  
         $min = INF;
        for ($j= $i; $j < sizeof($tab); $j++) { 
            //make a condition
            if ($min > $tab[$j]) {
                $min = $tab[$j];
                $tab[$j] = $tab[$i];
                $tab[$i] = $min;
            }
        }
        echo $tab[$i]." | ";
    }
        
?>