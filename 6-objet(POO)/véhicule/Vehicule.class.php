<?php
abstract class Vehicule
{
  //set attribut
  public static $cpt;
  protected int $matricule;
  protected string $année;
  protected float $prix;

    //set constante
    public function __construct(string $année, float $prix)
    {
        self::$cpt++;
        $this->matricule = self::$cpt;
        $this->année = $année;
        $this->prix = $prix;
    }
    //set method
    abstract public function démaré();
    abstract public function accélérait();
    public function __toString() 
    {
        return $this->matricule." ".$this->année." ".$this->prix."\n";
    }

  /**
   * Get the value of matricule
   */ 
  public function getMatricule()
  {
    return $this->matricule;
  }

  /**
   * Set the value of matricule
   *
   * @return  self
   */ 
  public function setMatricule($matricule)
  {
    $this->matricule = $matricule;

    return $this;
  }

  /**
   * Get the value of année
   */ 
  public function getAnnée()
  {
    return $this->année;
  }

  /**
   * Set the value of année
   *
   * @return  self
   */ 
  public function setAnnée($année)
  {
    $this->année = $année;

    return $this;
  }

  /**
   * Get the value of prix
   */ 
  public function getPrix()
  {
    return $this->prix;
  }

  /**
   * Set the value of prix
   *
   * @return  self
   */ 
  public function setPrix($prix)
  {
    $this->prix = $prix;

    return $this;
  }
}
