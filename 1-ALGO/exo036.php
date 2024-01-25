<?php
/* Exercice 36:
    Toujous à partire de deux tableaux précédement saisis écrivez un algorithme qui calcule 
    le schtrounmpf des deux tableaux.. Pour calculer le schtroupf, il faut multiplier chaque 
    élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. Par exemple 
    si l'on a:

    algorithme exposente
    Var $tab1 ,$tab2 ,$tabRes
        ///set variable

        ///make double loop for the calcule
        make a loop for 2 turn 
            make loop for 4 turn
                $tabRes[j] = tab1[j] * tab2 [i]
                result = result + =tabRes[j]

        ///display the result
        display result
        

*/
    ///set variable
    $tab1 =  [2, 5, 8, 4];
    $tab2 =  [6, 7];
    $tabRes = [];
    $result = 0;
                
    ///make the calcule
    for ($i=0; $i <= 1 ; $i++) { 
        for ($j=0; $j <= 3 ; $j++) { 
            $tabRes[$j] = ($tab1[$j] * $tab2[$i]);
            $result = $result + $tabRes[$j] ;
        }
    }
    
    echo $result;


?>