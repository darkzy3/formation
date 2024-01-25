<?php
include_once "Batiment.class.php";
include_once "Adresse.class.php";

class Maison extends Batiment
{
    //attribut
    protected float $nbpieces;
    //contante
    public function __construct( Adresse $adresse, float $superfice, float $nbpieces){
        parent:: __construct ($adresse, $superfice);
        $this->nbpieces = $nbpieces;
    }
    //methode
    public function __toString()
    {
        $maison = "la maison se situe au : ".$this->adresse."\nla superficie est de ".$this->superfice." m² \nil y a ".$this->nbpieces." piece";
        return $maison;
    }
}