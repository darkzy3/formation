<?php
/*Exercice 27:
    Ecrire un algorithme qui permet de donner le résultat d'un étudiant
    à un module sachant que ce module est sanctionné par une note d'oral
    de coefficient 1 et une note d'écrit de coefficient 2. La moyenne
    obtenue doit être supérieur ou égale à 10 pour valider le module.

        Var $noteOral, $noteWriting.
            start
                //set variable
                noteOral = readline "entré la note d'orale ";
                noteWriting = (readline "entré la note d'écrit " * 2) /2;
                //calculated result
                common = noteOral + noteWriting;
                result = common / 2;
                //make if condition for the result
                if (result < 10) {
                    display "vous aver réussit l'examen"
                } else {
                    display "vous pourré retenter la prochaine foit"
                }
            end

*/

        //set variable
        $noteOral = readline ("entré la note d'orale ");
        $noteWriting = readline ("entré la note d'écrit " /* 2 */) /* /2 */;
        $coefWriting = ($noteWriting * 2) /2;

        //calculated result
        $common = $noteOral + $noteWriting;
        $result = $common / 2;

        //make condition for display result
        if ($result > 10) {
            echo"félicitation tu a réussit avec une note de ".$result;
        } else {
            echo "dommage retente une prochaine fois pour faire mieux ".$result;
        }

?>