<?php
/* Exerice 35:
    Ecrivez un algorithme constituant un tableau, à partir de deux tableau sera la somme 
    des éléments des deux tableaux de départ.

    tbleaux a additioné:
     4 8 7 9 1 5 4 6
     7 6 5 2 1 3 7 4
    résultat
     11 14 12 11 2 8 11 10

        Var $tab1, $tab2, $tabRes
            ///set variable
            $tab1 = array (4, 8, 7, 9, 1, 5, 4, 6);
            $tab2 = array (7, 6, 5, 2, 1, 3, 7, 4);
            $tabRes = array ();

            ///make the calcule
            for $i=0; $i <= 8 ; $i++ { 
                $tabRes [$i]= $tab1 [$i] + $tab [$i];
            }

            echo $tabRes [0];
            echo "\n";
            echo $tabRes [1];
            echo "\n";
            echo $tabRes [2];
            echo "\n";
            echo $tabRes [3];
            echo "\n";
            echo $tabRes [4];
            echo "\n";
            echo $tabRes [5];
            echo "\n";
            echo $tabRes [6];
            echo "\n";
            echo $tabRes [7];
            echo "\n";
*/

            ///set variable
            $tab1 = array (4, 8, 7, 9, 1, 5, 4, 6);
            $tab2 = array (7, 6, 5, 2, 1, 3, 7, 4);
            $tabRes =  [];
            
            ///make the calcule
            for ($i=0; $i <= 8 ; $i++) { 
                $tabRes[$i]= ($tab1[$i] + $tab2[$i]);
            }
    
            echo $tabRes[0];
            echo "\n";
            echo $tabRes[1];
            echo "\n";
            echo $tabRes[2];
            echo "\n";
            echo $tabRes [3];
            echo "\n";
            echo $tabRes[4];
            echo "\n";
            echo $tabRes[5];
            echo "\n";
            echo $tabRes[6];
            echo "\n";
            echo $tabRes[7];
            echo "\n";


            // $tab1 = array (4, 8, 7, 9, 1, 5, 4, 6);
            // $tab2 = array (7, 6, 5, 2, 1, 3, 7, 4);
            // $tab3 = array ();
             
            // for ($i=0; $i < sizeof($tab1) ; $i++) {
            //     $tab3[] = $tab1[$i] + $tab2[$i]; 
            // }
             
            // for ($i=0; $i < count($tab3); $i++) { 
            //     echo $tab3[$i]." "; 
            // }
            // ?>

?>