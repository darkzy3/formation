<?php
/*Exercice 28:
    Ecrire l'algorithme permettant d'imprimer le triangle suivant, le nombre
    de ligne etant donné par l'utilisateur :
    1
    12
    123
    1234
    12345
    123456
    1234567

        Var nbLine, nb
            //set variable
            nbLine = readline ("entré le nombre de boucle shouaiter pour former le triangle");

            //creat loop for 
            for i = 1; i <= nbLine; i++;
                for j = 1 ; i <= i; j++
                    display "|".j ;


*/

    $nbLine = readline("entré le nombre de boucle ");

    for ($i=1; $i <= $nbLine ; $i++) { 
        for ($j=1; $j <= $i ; $j++) { 
            echo "|".$j ;
        }
        echo "\n";
    }

?>