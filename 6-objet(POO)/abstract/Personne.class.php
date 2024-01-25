<?php
abstract class Personne
{
  //set attribut
  public static $cpt;
  protected int $id;
  protected string $nom;
  protected string $prenom;
  protected string $mail;
  protected string $telephone;
  protected float $salaire;

    //set constante
    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        self::$cpt++;
        $this->id = self::$cpt;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }
    //set method
    abstract public function calculerSalaire();
    public function __toString() 
    {
        return $this->prenom." ".$this->mail." ".$this->telephone." ".$this->salaire."\n";
    }
}
