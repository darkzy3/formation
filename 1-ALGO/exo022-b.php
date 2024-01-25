<?php
/*Exercice 22:
    Ecrire un algorithme qui demande successivement 
    20 nombres a l'utilisateur, et qui lui dit 
    ensuite quel était le grand parmi ces 20 nombres.

    algoritme comparaison plus grand:

        Var nb, val max.
            start
                //make a loop to 1 with 20 in I
                loop to 1 for 20 in i
                    si i = 0
                        alors valmax prend nb
                        sinon si val max < nb {                            
                            $step = i + 1
                            calmax = $nb
                        }

                //found maximal value in the board with a loop
                for  for ($i=0; $i < 20 ; $i++) { 

                //display max value
                display valmax
            end
*/

    //make globale var and init them;
    $stape = 0 ;

   //make a loop to 1 with 20 in i
    for ($i = 0; $i < 5 ; $i++) { 
        $nb = readline("entré un nombre ");
        if ($i == 0) {
            $valmax = $nb;      
        } elseif ($valmax < $nb) {
            $stape = $i + 1;
            $valmax = $nb;
        }
    }

    // //found maximal value in the board with a loop
    // $valmax = max ($list);

    

    //display max value
    echo ("la valeur max est ".$valmax);
    echo (" l'étape est ".$stape)

?>