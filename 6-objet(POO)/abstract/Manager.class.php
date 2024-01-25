<?php
include_once "Personne.class.php";
class Manager extends Personne 
{
    private string $service;
    public function __construct( string $nom, string $prenom, string $mail, string $telephone, float $salire, string $service)
    {
        parent::__construct ($nom, $prenom, $mail, $telephone, $salire);
        $this->service =$service;
    }
    public function calculerSalaire() : float
    {
        return 1.35*$this->salaire;
    }
    public function __toString()
    {
        $manager =  "le salire de Manager ".$this->nom." ".$this->prenom." est : ".
        $this->calculerSalaire(). "\nsont service : ".$this->service."\n";
        return $manager;
    }
}
