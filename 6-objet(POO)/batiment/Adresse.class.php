<?php
class Adresse
{
    //attribut
    private float $numero; //call other class for simplify this class
    private string $rue;
    private string $ville;
    private mixed $region;

    //contante
    public function __construct( float $numeroRue, string $rue, string $ville, mixed $region){
        $this->numero = $numeroRue;
        $this->rue = $rue;
        $this->ville = $ville;
        $this->region = $region;
    }
    //methode
    public function __toString() {
        $adresse = " ".$this->numero." ".$this->rue." à ".$this->ville."\ndans la région : ".$this->region;
        return $adresse;
    }
}