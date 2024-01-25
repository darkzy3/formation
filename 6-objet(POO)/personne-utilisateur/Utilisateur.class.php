<?php
include_once "Profil.class.php";
class User extends Personne
{
  //set attribut
  public string $login;
  protected string $password;
  protected string $service;
  public Profil $profil;

    //set constante
    public function __construct( string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, Profil $profil){
        parent:: __construct($prenom, $mail, $telephone,$salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil=$profil;
    }
    //set method
    public function __toString() {
        return $this->login." ".$this->password." ".$this->service."\n".parent::__toString()." ".$this->profil;
    }
    public function calculerSalaire()
    {
        if ($this->profil->getLibelle() == "Manager") {
            $this->salaire = 1.1*$this->salaire;
        } elseif ($this-> profil->getLibelle() == "Directeur général" ) {
            $this->salaire = 1.4*$this->salaire;
        }
        return $this->salaire;
    }

}
