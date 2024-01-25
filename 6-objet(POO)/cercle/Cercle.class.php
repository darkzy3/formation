<?php
include_once "..\Point\Point.class.php";
class Cercle
{
    //attribut
    private Point $centre; //call other class for simplify this class
    private int $rayon;
    //contante
    public function __construct( $x, $y, $rayon){
        $this->centre = new Point($x,$y);//creat point with other class to implode at this class
        $this->rayon = $rayon;
    }
    //methode
    public function getPerimetre(): float{
        $perimetre = 2*pi()*$this->rayon;
        return $perimetre;
    }
    public function getSurface():int{
        $surface = $this->rayon*$this->rayon*pi();
        return $surface;
    }
    public function appartien($point):bool{
        $appartien = (pow($point->getAbcisse()-$this->centre->getAbcisse(),2)+(pow($point->getOrdonnee()- $this->centre->getOrdonnee(),2)));
        if ($appartien <= pow($this->rayon,2)) {
            return true;
        } else {
            return false;
        }
    }

    public function afficher():void {
        echo "le périmettre est de ". $this->getPerimetre()."\n";
        echo "la surface est de ".$this->getSurface()."\n";
    }

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}
