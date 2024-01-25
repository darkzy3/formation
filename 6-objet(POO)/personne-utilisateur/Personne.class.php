<?php
class Personne
{
  //set attribut
  public static $cpt;
  protected int $id;
  protected string $prenom;
  protected string $mail;
  protected string $telephone;
  protected float $salaire;

    //set constante
    public function __construct(string $prenom, string $mail, string $telephone, float $salaire){
        self::$cpt++;
        $this->id = self::$cpt;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }
    //set method
    public function __toString() {
        return $this->prenom." ".$this->mail." ".$this->telephone." ".$this->salaire."\n";
    }
    public function calculerSalaire() {
        return $this->salaire;
    }
}
