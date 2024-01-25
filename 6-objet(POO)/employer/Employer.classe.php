<?php 
class Employer
{
    //attribut
    public int $matricule;
    public string $nom;
    public string $prenom;
    public string $dateNaissance;
    public string $dateEmbauche;
    public float $salaire;
    // public static $cpt;
    //contante
    public function __construct(float $matricule, string $nom, string $prenom, string $dateNaissance, string $dateEmbauche, float $salaire){
        // self::$cpt++;
        // $this->matricule = self::$cpt++;
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }
    //methode
    public function age () : int {
        $today = date("d/m/Y");
        $age = date_diff(date_create($this->dateNaissance), date_create($today));
        return $age->format('%y');
    }
    
    public function anciennete() : string {
        $today = date("d/m/Y");
        $anciennete = date_diff(date_create($this->dateEmbauche), date_create($today));
        return $anciennete->format('%y');
    } 
    
    public function augmentationDuSalaire(): void {
        if ($this->anciennete() < 5) {
            $this -> salaire = $this->salaire * 1.02 ;
        } elseif ($this->anciennete() < 10) {
            $this -> salaire = $this->salaire * 1.05 ;
        } else {
            $this -> salaire = $this->salaire * 1.1 ;
        }
    }
    public function AfficherEmploye() {
        echo "Matricule : " . $this->matricule . "\n";
        echo "Nom complet : " . $this->prenom . " " . $this->nom . "\n";
        echo "Age : " . $this->age() . " ans \n";
        echo "Ancienneté : " . $this->Anciennete() . " ans \n";
        echo "Salaire : " . $this->salaire . " €\n";
    }
}