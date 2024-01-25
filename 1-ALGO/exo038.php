<?php
/* Exercice 38:
    Ecrivez un algorithme permettant, toujours sur le même principe, 
    à l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, 
    une fois la saisie terminée, renvoie la plus grande valeur en précisant 
    quelle position elle occupe dans le tableau. On prendra soin d'effectuer 
    la saisie dans un premier temps, et larecherche de la plus grande valeur 
    du tableau dans un second temps.

    algorithme max board
    Var $tab, $max, $position.
        start
            ///display value
            $tab =[""];
            $max = 0;
            ///make for loop with i < 5 in step of 1
                $tab [""] < readline("")
                if ($tab > $max) {
                    $max < $tab[$i]
                    $position < i++
                }
                 display $max and $position

*/
    
    $nbVal = readline("entré le nombre de valeur -1 ");
    $tab = [""];
    $max = -INF;
    $position = 0;

    for ($i=0; $i <= $nbVal ; $i++) { 
        $tab[$i]= readline("entré une des valeur ");
        if ($tab [$i]> $max) {
            $max = $tab[$i];
            $position = $i++;
        } 
    }

    // for ($j=0; $j < 5 ; $j++) { 
    //     echo $tab[$j]." | ";
    //     echo"\n";
    // }

    echo "the higest number as ".$max." in positon ".$position;

?>