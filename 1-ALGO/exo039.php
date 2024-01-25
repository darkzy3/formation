<?php
/* Exercice 39:
    Toujours et encore sur le même principe écrivez un algorithme permettant, 
    à l'utilisateur de saisir les notes d'une classe. Le programme, une fois saisie terminée,
    renvoie le nombre de ces notes supérieurs à la moyenne de la classe.

    Algorithme note average
        Var nbVal, tabNote, max, position, addition.
            start
                ///set variable
                $nbVal < readline("enter number of notes you want put in ");
                $tabNote < [];
                $max < -INF;
                $position < 0;
                $addition < 0;
                ///make loop for totale addition
                loop in i < nbVal xith step of 1{
                    tabNote < readline ("enter note 1 by 1 ")
                    addittion = tabNote[i] + addittion;
                } endloop
                ///make the average
                addition < addition / nbVal;
                ///make loop for have nuber note sup at the average
                loop in i < nbVal xith step of 1{
                    if (tabNote > $nbVal) {
                        position < position + 1;
                    }
                }
                ///display result
                display positon;
            end

*/

    //set variable
    $nbVal = readline("enter number of notes you want put in ");
    $tabNote = [];
    $max = -INF;
    $position = 0;
    $addition = 0;
    //make loop for totale addition
    for ($i=0; $i < $nbVal ; $i++) { 
        $tabNote = readline("enter note 1 by 1 ");
        $addition = $tabNote[$i] +  $addition;
    }
    //make the average
    $addition /= $nbVal;
    //make loop for have nuber note sup at the average
    for ($i=0; $i < $nbVal ; $i++) { 
        if ($tabNote > $nbVal) {
            $position=+ 1;
        }
    }
    //display result
    echo" le nombre de chiffre au dessu de la moyenne est de ".$position;
?>