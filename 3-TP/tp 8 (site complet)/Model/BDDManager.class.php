<?php
include "..\Model\offesenses.class.php";
//creat class to link BDD
class BDDManager
{
    public static string $url = 'mysql:host=localhost;dbname=criminal_record;charset=utf8mb4';
    public static string $root = 'root';
    public static string $pw = '';

    public static  function connection() {
        $bdd = new PDO (self::$url, self::$root, self::$pw);
        return $bdd;
    }
    private $connexion;
    // set methode for creat user in BDD
    static public function createUser(User $user): Void{
        $bdd = new PDO('mysql:host=localhost;dbname=criminal record;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO _user (name, firstname, mail, tel, password) VALUES (?,?,?,?,?)";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$user->getName(), $user->getFirstname(), $user->getMail(), $user->getTel(), $user->getPassword()]);
    }

    // Methode for update a value in the data base
    static public function createList_Offenses(BDDManager $offenses) : Void{
        $bdd = new PDO('mysql:host=localhost;dbname=criminal_record;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO _list_offenses SET $offenses = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$offenses->getType_Offenses(), $offenses->getPrice_Unit()]); 
    }
}