<?php
include_once "Vehicule.class.php";
class Camion extends Vehicule
{
    private string $model;
    public function __construct( string $année, float $prix, string $model)
    {
        parent::__construct ($année, $prix);
        $this->model =$model;
    }
    public function démaré() 
    {
        return "le camion démare \n";
    }
    public function accélérait() 
    {
        return "le camion accélaire\n";
    }
    public function __toString()
    {
        $camion =  "le matricule du camion est : ".$this->getMatricule().
        "\nconstruit en : ".$this->année.
        "\nc'est un camion de la marque : ".$this->model.
        "\nil coûte : ".$this->prix.
        "\n"."\n";
        return $camion;
    }
}
