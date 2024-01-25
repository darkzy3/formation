<?php
include_once "Personne.class.php";
final class Devloppeur extends Personne
{
    private string $specialite;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $specialite) 
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
    }
    public function calculerSalaire() : float
    {
        return 1.2*$this->salaire;
    }
    public function __toString()
    {
        $devloper = "le salaire du devloppeur ".$this->nom." ".$this->prenom." est de : ".
        $this->calculerSalaire(). "\nsa spécialité est le ".$this->specialite."\n";
        return $devloper;
    }
}
