<?php

   

//Methode qui renvoie la liste des employés
function selectListeEmploye() : array
{
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `test`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listEmploi = $stmt->fetchAll();
    return $listEmploi;
}


        //methode qui ajoute une personne
        function insertEmploye($name, $surname, $sex) : void {       
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', '');
            $sql = "INSERT INTO test (name, surname, sex) VALUES (?,?,?)";
            $stmt= $bdd->prepare($sql);
            $stmt->execute([$name, $surname, $sex]);
        
        }


?>