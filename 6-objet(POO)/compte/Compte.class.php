<?php
include_once "Client.class.php";
class Account
{
    //attribut
    private int $balance;
    private int $numCompte;
    private Customer $owner;
    public static $cpt;
    //contante
    public function __construct(int $balance, string $name, string $firstname, string $cin, string $phone){
        $this->balance = $balance;
        self::$cpt++;
        $this->numCompte = self::$cpt;
        $this-> owner = new Customer ($name, $firstname, $cin, $phone);
    }
    //methode
    public function displayAccount(): void{
        echo "Détails du comtpte: \n";
        echo "************************ \n";
        echo "le solde de votre compte est de ". $this->balance ."\n";
        echo "le nom propriaitére est ". $this->owner->getName()."\n";
        echo "le prénom propriaitére est ". $this->owner->getFirstname()."\n";
        echo "le CIN propriaitére est ". $this->owner->getCin()."\n";
        echo "le numero de telephone propriaitére est ". $this->owner->getPhone()."\n";
        echo "le numeros de compte est le ".$this->numCompte."\n";
        echo "************************ \n";
        echo "\n";
    }

    public function depot() : void {
        // $montant = readline("entré le montant que vous voulez déposer ");
        $montant = 5000;
        $this->balance = $this->balance + $montant;
        echo "Opération bien effectuée \n";
        echo "************************ \n";
        echo "\n";
    }
    public function retrai() : void {
        // $montant = readline("entré le montant que vous voulez retiré ");
        $montant = 1000;
        $this->balance = $this->balance - $montant;
        echo "Opération bien effectuée \n";
        echo "************************ \n";
        echo "\n";
    }
    public function crediterCpt($comptedeb, $montant, $comptecred) :float {
        $comptedeb->balance = $comptedeb->balance - $montant;
        $comptecred ->balance = $comptecred->balance + $montant;
        echo "Opération bien effectuée \n";
        echo "************************ \n";
        echo "\n";
        return $comptecred->balance;
    }
    public function debiter($montant) : float {
        $this->balance = $this->balance - $montant;
        echo "Opération bien effectuée \n";
        echo "************************ \n";
        echo "\n";
        return $this->balance;
    }
    public function debiterCpt($compte, $montant) : float {
        $compte->balance = $compte->balance - $montant;
        echo "Opération bien effectuée \n";
        echo "************************ \n";
        echo "\n";
        return $compte->balance;
    }
    public function resumCpt(): void{
        echo "Détails du comtpte: \n";
        echo "le solde de votre compte est de ". $this->balance ."\n";
        echo "le nom propriaitére est ". $this->owner->getName()."\n";
        echo "le prénom propriaitére est ". $this->owner->getFirstname()."\n";
        echo "le CIN propriaitére est ". $this->owner->getCin()."\n";
        echo "le numero de telephone propriaitére est ". $this->owner->getPhone()."\n";
        echo "************************ \n";
    }
    public function nbCpt() : float {
        $nbCompte = Account::$cpt;
        echo "il y a actuellement ".$nbCompte." compte créé actuellement \n";
        return $nbCompte;
    }
}