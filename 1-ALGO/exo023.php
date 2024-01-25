<?php
/*Exercice 23:
Réécrire l'algorithme précédent, mais cette fois-ci on
ne connaît pas d'avance combien l'utilisateur shouaite
saisir de nombres. La saise des nombres s'arrête lorsque
l'utilisateur entre zéro.

    algoritme comparaison plus grand sans fin:

     Var nb, val max.
            start
                //make a loop to 1 with 20 in I
                while (nb != 0) {
                  if (val max < nb) {                            
                    $step++;
                    valmax = $nb;
                    }
                }
                //display max value
                display valmax
            end
*/

    //make globale var and init them;
    $step = 0 ;
    $valmax = 0;
    $nb = -INF;

   //make a loop
    while ($nb != 0) {
        $nb = readline("entré un nombre ");
        if ($valmax < $nb) {
            $valmax = $nb;
        } 
        $step++;
    }
    
    
    //display max valuexs
    echo ("la valeur max est ".$valmax);
    echo (" étape numero ".$step);

?>