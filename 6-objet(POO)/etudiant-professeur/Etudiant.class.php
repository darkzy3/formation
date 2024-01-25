<?php 
include_once "Personne.class.php";
class Etudiant extends Personne
{
    //attribut
    private float $cne;
    //contante
    public function __construct(string $nom, string $prenom, float $cne){
        parent:: __construct ($nom, $prenom);
        $this->cne = $cne;
    }
    //methode
    public function __toString() {
        return "Je suis l'étudiant ".parent::__toString()." mon cne est : ".$this->cne;
    }
}