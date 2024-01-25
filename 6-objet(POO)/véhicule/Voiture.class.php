<?php
include_once "Vehicule.class.php";
class Voiture extends Vehicule 
{
    private string $model;
    public function __construct( string $année, float $prix, string $model)
    {
        parent::__construct ($année, $prix);
        $this->model =$model;
    }
    public function démaré() 
    {
        return "la voiture démare \n";
    }
    public function accélérait() 
    {
        return "la voiture accélaire\n";
    }
    public function __toString()
    {
        $voiture =  "le matricule de la voiture est : ".$this->getMatricule().
        "\nconstruit en : ".$this->année.
        "\nc'est une voiture de la marque : ".$this->model.
        "\nelle coûte : ".$this->prix.
        "\n"."\n";
        
        return $voiture;
    }
}
