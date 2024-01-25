<?php
/* Exercice 41:
    ° Ecrire l'algorithme effectuant le décalage des élément d'un tableau.
    ° Tableau initiale ["D | E | C | A | L | A | G | E"]
    ° Tableau modifié (décalage à gauche) [" E | C | A | L | A | G | D | E"]

    algorithme swith case
        Var tabInit, temp.
            start
                ///set value
                tabInit < ["D", "E", "C", "A", "L", "A", "G", "E"];
                temp < $tabInit[0];
                ///make a for loop
                for i < count(tabInit)-1 with step of 1 {
                    tabInit[i] < tabInit[i + 1];
                }
                tabInit[7] = temp;
                ///display result
                for i < count(tabInit) with step of 1 { 
                    display tabInit[$i]." | ";
                }
            end
*/
    //init variable
    $tabInit =["D", "E", "C", "A", "L", "A", "G", "E"];
    $temp = $tabInit[0];
    //make loop for mouvement
    for ($i=0; $i < count($tabInit) - 1 ; $i++) { 
        $tabInit[$i] = $tabInit[$i + 1];
    }
    //replace the last value
    $tabInit[7] = $temp;
    //mak loop for display
    for ($i=0; $i < count($tabInit) ; $i++) { 
        echo $tabInit[$i]." | ";
    }
?>