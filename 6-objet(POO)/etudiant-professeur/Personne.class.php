<?php
class Personne
{
  //set attribut
  public static $cpt;
  protected int $id;
  protected string $nom;
  protected string $prenom;

    //set constante
    public function __construct(string $nom, string $prenom){
        self::$cpt++;
        $this->id = self::$cpt;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    //set method
    public function __toString() {
        return $this->nom." ".$this->prenom;
    }

}
