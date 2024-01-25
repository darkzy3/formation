<?php 
include_once "Filiere.class.php";
class Etudiant
{
    //attribut
    private static $nb = 1;
    private int $id;
    private string $nom;
    private string $prenom;  
    private string $filiere;  
    private DateTime $dateNaissence;
    //contante
    public function __construct(string $nom, string $prenom, DateTime $dalteNaissance, string $filiere){
        $this->filiere = $filiere;
        $id = self::$nb++;
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissence = $dalteNaissance;
    }
    //methode
    public function __toString() {
        return "Je suis l'étudiant ".$this->nom." ". $this->prenom." ma date de naissance est : ".$this->dateNaissence->format("d-m-Y")."\n";
    }


    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}