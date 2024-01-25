<?PHP
/*Exercice è:
    On dispose de trois variables A, B et C. Ecrivez un algorithme
    transférant à B la valeur de A, à C la valeur de B et à la valeur de C.

        début
            //saisi de variable
            a < 5;
            b < 10;
            c < 15;

            //permutation
            d < b;
            b < a;
            a < c;
            c < d;
            
            //affichage
            afficher(a);
            afficher(b);
            afficher(c);
        fin

    a = 5  b = ?  C = ?  d = ?
    a = 5  b = 10 C = ?  d = ?
    a = 5  b = 10 C = 15 d = ?
    a = 5  b = 10 C = 15 d = 10
    a = 5  b = 5  C = 15 d = 10
    a = 15 b = 5  C = 15 d = 10
    a = 15 b = 5  c = 10 d = 10
 */
    //opération des variabale  
    $a = 5;
    $b = 10;
    $c = 15;

    //azertyuio
    $d = $b;
    $b = $a;
    $a = $c;
    $c = $d;

    //affichage
    echo "A = ".$a;
    echo "\n";
    echo "B = ".$b;
    echo "\n";
    echo "C = ".$c;
?>