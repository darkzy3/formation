<?php
/* Exercice 33:
    Ecrire un algorithme permettant à l'utilisateur de saisir un quelconque de valeurs, qui devront étre 
    stockées dans un tableau. L'utilisateur doit donc commencer par entré le nombre de valeur qu'il compte saisir.
    il effectura ensuite cette saisie. Enfin, une fois la saisie terminée, le programme affichera le nombre de 
    valeurs négatives et le nombre de valeurs positives.

        Var tab, nbVal .
            $tab = array();
            nbVal = readline("entré le nombre ");

            ///make a loop for to insert note in the tab
            for i = 0 in i <= nbVal i++ {}
                array_puch (
                    nombre = readline (entré votre nombre );
                )
            }
            
            ///display result with a loop
            for i = 0 in i <= nbVal i++ {
            display [i];
            display "\n";

            }

*/
    $tab = array();
    $nbVal = readline("entré le nombre de valeur ");

    ///make a loop for to insert note in the tab
    for ($i=0; $i < $nbVal; $i++) { 
        array_push ($tab,
            $nombre = readline ("entré votre nombre ")
        );
    }

///display result with a loop
for ($i=0; $i < $nbVal ; $i++) { 
    echo $tab [$i];
    echo "\n";
}


?>