<?php
/* Exercice 32:
    Ecrire un algorithme qui déclare un tableau de 9 note dont on fait ensuite saisir les valeur par l'utilisateur.

    algortithme notation
        Var tab, note, i.
            ///put the notes
            tab = array;
            note = readline("entré la note");

            ///make a loop for to insert note in the tab
            for i = 0 in i <= 9 i++
                array_puch (
                    note = readline;
                )

            ///display tab
            display [0];
            display "\n";
            display $tab [1];                
            display "\n";
            display $tab [2];
            display "\n";
            display $tab [3];
            display "\n";
            display $tab [4];
            display "\n";
            display $tab [5];
            display "\n";
            display $tab [6];
            display "\n";
            display $tab [7];
            display "\n";
            display $tab [8];
*/

    //set variable
    $tab = array();
    $note = 0;

    //make a for loop to enter note
    for ($i=0; $i < 9 ; $i++) { 
        array_push($tab,
        $note = readline("entré votre note ")
        );
    }
    echo $tab [0];
    echo "\n";
    echo $tab [1];                
    echo "\n";
    echo $tab [2];
    echo "\n";
    echo $tab [3];
    echo "\n";
    echo $tab [4];
    echo "\n";
    echo $tab [5];
    echo "\n";
    echo $tab [6];
    echo "\n";
    echo $tab [7];
    echo "\n";
    echo $tab [8];

?>