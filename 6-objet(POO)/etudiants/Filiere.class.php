<?php 
class Filiere
{
    //attribut
    private int $id;
    private string $code;
    private string $libelle;    
    // public static $cpt;
    //constante
    public function __construct(int $idFil, string $code, string $libelle){
        $this->id = $idFil;
        $this->code = $code;
        $this->libelle = $libelle;
    }
    //methode
    public function __toString() {
        return " ".$this->libelle."\n";
    }
    // public function displayFil(): void{
    //     echo $this->id."\n";
    //     echo $this->code."\n";
    //     echo $this->libelle."\n";
    // }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}