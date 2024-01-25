<?php
include_once "Utilisateur.class.php";
class Profil
{
  //set attribut
  public static $cpt;
  protected int $id;
  protected string $code;
  protected string $libelle;
  
    //set constante
    public function __construct(string $code, string $libelle) {
        self::$cpt++;
        $this->id = self::$cpt;
        $this->code = $code;
        $this->libelle = $libelle;
    }
    //set method
    public function __toString() {
        return $this->code." ".$this->libelle." ";
    }


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
}
