<?php 
class Professeur extends Employer
{
    //attribut
    private string $specialite;    
    // public static $cpt;
    //attribut
    public function __construct(string $specialite, string $nom, string $prenom, float $salaire){
        parent:: __construct ($nom, $prenom,$salaire);
        $this->specialite = $specialite;
    }
    //methode
    public function __toString() {
        return parent::__toString()." ma spécialiter est: ".$this->specialite;
    }
}