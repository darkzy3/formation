<?php
    /*Ecrire un algo qui demande l'âge d'un enfant à l'utilisateur, ensuite il l'informe de sa catégorie
    "Poussin" de 6 a 7
    "Pupille" de 8 a 9
    "Minime" de 10 a 11
    "Cadet" apres 12*/
 
    #On déclare et on saisit les vairables
    echo "Entrez l'âge : ";
    $age = trim(fgets(STDIN));
 
    #On teste la variable age
    if ($age > 11) {
        echo "Cadet";
    }
    else {
        if ($age > 9) {
            echo "Minime";
        }
        else {
            if ($age > 7) {
                echo "Pupille";
            }
            else {
                if ($age > 5) {
                    echo "Poussin";
                }
            }
        }
    }
 
?>

