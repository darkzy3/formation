<?php
/* Exercice 37:
    Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. 
    Toutes les valeurs doivent être ensuite augmentées de 1, et le nouveaux tableau 
    sera affiché à l'écrant.
 
    algortithme bord adition
        Var $tab1, $nbVal.
            start
                ///set value
                $tab1 = [];
                $nbVal = readline();

                /// set loop for feed first board
                for $i=0; $i < $nbVal with step of 1 { 
                    $tab1[] = readline();
                    $tab1[$i] = $tab1[$i]++
                }
                ///display the board
                for $i=0 $i < count($tab1) with step of 1 {
                    display $tab1[$i]
                }
            end

*/
        ///set value
        $tab1 = [];
        $nbVal = readline("enter numbers of value you want ");
    
        /// set loop for feed first board
        for ($i=0; $i < $nbVal ; $i++) { 
            $tab1[$i] = readline("enter one value ");    
            $tab1[$i] += 1;
        }
        ///display the board
        for ($i=0; $i < count($tab1); $i++) {
            echo $tab1[$i]." | ";
        }
?>