<?php
/*Exercice 24:
    Les habitants de paris paient l'impôt selon les
    régle suivantes :
        -Les homme de plus de 20 ans paient l'impôt
        -les femmes paient l'impôt si elle ont entre 18 et 35 ans
        -les autres ne paient pas d'impôt
    Le programme demandera donc l'âge et le sexe du parisien,
    et se prononcera donc ensuite sur le fait que l'habitant
    est imposable.
    
    Var h, f, age.
        début
            age = readline ("entré votre age");
            sexe = readline ("entré votre sexe m ou w");

            if (men and age <= 20) {
                display "vous dever payer des impot";
            } elseif (woman and age in 18 and 35) {
                display "vous dever payer des impôt"
            } else {
                display "vous n'aver pas d'impôt a payer
            }

*/

    //déclar variable
    $age = readline(" entré votre age ");
    $gender = readline(" entré m ou w ");

    //mettre en place les condition
    if (($age >= 18) and ($age <= 35) and ($gender == "w")) {
        echo" vous devez payer des impôt ";
    } elseif (($age >= 20) and ($gender == "m")) {
        echo " vous dever payer des impôt ";
    } else {
        echo" vous n'aver pas d'impôt a payer";
    }

    ////! autre version de code possible
    // if ($gender == "m" and $age >= 20 || $gender == "w" and ($age >= 18 || $age <= 35 )) {
    //     echo " vous dever payer des impot";
    // } else {
    //     echo " vous ne payer pas d'impôt";
    // }


    // //! entrer le sexe
    // $sex = readline ("entrer votre sexe : ");
    // $age = readline ("entrer votre âge : ");
    
    // $cond1 = $sex == "F" and ($age >= 18 and $age <= 35);
    // $cond2 = $sex == "M" and $age >= 20;
    // //!Femme imposable
    // if ($cond1 || $cond2 ) {
    //     echo "get tax F/M";
    // }else {
    //     echo "no tax";
    // }

?>