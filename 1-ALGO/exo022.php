<?php
/*Exercice 22:
    Ecrire un algorithme qui demande successivement 
    20 nombres a l'utilisateur, et qui lui dit 
    ensuite quel était le grand parmi ces 20 nombres.

    algoritme comparaison plus grand:
        liste de 20 nombres;
        demander 20 valeurs a l'utilisateur;
        trouver la valeurs max grace a la fonction max;
        afficher la valeurs max;

        Var valeur 1 a 20, val max, liste.
            début
                //demander les valeur 1 par 1
                demander la valeur 1
                demander la valeur 2
                demander la valeur 3
                demander la valeur 4
                demander la valeur 5
                demander la valeur 6
                demander la valeur 7
                demander la valeur 8
                demander la valeur 9
                demander la valeur 10
                demander la valeur 11
                demander la valeur 12
                demander la valeur 13
                demander la valeur 14
                demander la valeur 15
                demander la valeur 16
                demander la valeur 17
                demander la valeur 18
                demander la valeur 19
                demander la valeur 20

                

                //créé une liste avec les valeur
                liste valeur 1 a 20

                //trouver la valeur maximal dans le tableau
                valmax < max "arrey"

                //afficher la valeur max
                afficher valmax
            fin
*/

    //demander les différante valeur
    // $val1 = readline("entré la valeur numero 1 ");
    // $val2 = readline("entré la valeur numero 2 ");
    // $val3 = readline("entré la valeur numero 3 ");
    // $val4 = readline("entré la valeur numero 4 ");
    // $val5 = readline("entré la valeur numero 5 ");
    // $val6 = readline("entré la valeur numero 6 ");
    // $val7 = readline("entré la valeur numero 7 ");
    // $val8 = readline("entré la valeur numero 8 ");
    // $val9 = readline("entré la valeur numero 9 ");
    // $val10 = readline("entré la valeur numero 10 ");
    // $val11 = readline("entré la valeur numero 11 ");
    // $val12 = readline("entré la valeur numero 12 ");
    // $val13 = readline("entré la valeur numero 13 ");
    // $val14 = readline("entré la valeur numero 14 ");
    // $val15 = readline("entré la valeur numero 15 ");
    // $val16 = readline("entré la valeur numero 16 ");
    // $val17 = readline("entré la valeur numero 17 ");
    // $val18 = readline("entré la valeur numero 18 ");
    // $val19 = readline("entré la valeur numero 19 ");
    // $val20 = readline("entré la valeur numero 20 ");

    //  //lister toute les valeur
    //  $list = array($val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10, $val11, $val12, $val13, $val14, $val15, $val16, $val17, $val18, $val19, $val20 );


    $nb = readline("entré un nombre ");

    for ($i=0; $i < 5 ; $i++) { 
        $nb = readline("entré un nombre ");
        if ($i == 0) {
            $valmax = $nb;      
        } elseif ($valmax < $nb) {
            $valmax = $nb;
        }
    }   

    //afficher la valeur max
    echo ("la valeur max est ".$valmax);
    

?>