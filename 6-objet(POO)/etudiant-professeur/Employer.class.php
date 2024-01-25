<?php
include_once "Personne.class.php";
class Employer extends Personne
{
    //attribut
    protected float $salaire;
    //attribut
    public function __construct(string $nom, string $prenom, float $salaire){
        parent:: __construct ($nom, $prenom);
        $this->salaire = $salaire;
    }
    public function __toString() {
        return parent::__toString()." mon salaire est de: ".$this->salaire;
    }

}
