<?php
/* Exercice 40:
    Soit un tableaux T à deux dimension (12, 8) préalablement rempli de valeurs numériques. 
    Ecrire un algorithme qui recherche la plus grande valeurs au sein de ce tableau.

    algorithme max
        Var tab, nbUp.
            start
                ///set vraiable
                tab < [ [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8],
                        [1, 2, 3, 4, 5, 6, 7, 8]
                ] ;
                $nbUp < -INF;
                ///make a double loop for
                for i=0 i < sizeof(tab) with step of 1 {  
                    for j=0; j < sizeof(tab[$i]); with step of 1 { 
                        ///make a condition
                        if (nbUp < tab[i][j]) {
                            $nbUp < tab[i][j];
                        }
                    }
                }
                ///display result
                display nbUp
*/

        //set vraiable
        $tab =[
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 8],
            [1, 2, 3, 4, 5, 6, 7, 12]
        ];
        $nbUp = -INF;
        //make a double loop for
        for ($i=0; $i < sizeof($tab)  ; $i++) {  
            for ($j=0; $j < sizeof($tab[$i]); $j++) { 
                //make a condition
                if ($nbUp < $tab[$i][$j]) {
                    $nbUp = $tab[$i][$j];
                }
            }
        }
        //display result
        echo $nbUp;
        
?>