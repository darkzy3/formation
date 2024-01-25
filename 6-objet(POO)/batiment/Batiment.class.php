<?php
include_once "Adresse.class.php";
class Batiment
{
    //attribut
    protected Adresse $adresse; //call other class for simplify this class
    protected float $superfice;
    //contante
    public function __construct( Adresse $adresse, float $superfice){
        $this->adresse = $adresse;
        $this->superfice = $superfice;
    }
    //methode
    public function __toString() {
        $batiment = "\nl'adresse du batiment est : ".$this->adresse."\nla superficie est de : ".$this->superfice;
        return $batiment;
    }


}