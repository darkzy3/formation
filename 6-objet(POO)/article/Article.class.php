<?php
class Items
{
    //attribut
    private string $reference;
    private string $designation;
    private float $priceHT;
    public static $tauxTVA = 20;
    //contante
    public function __construct(string $ref, string $designation, float $priceHT, float $tauxTVA){
        $this->reference = $ref;
        $this->designation = $designation;
        $this->priceHT = $priceHT;
        self :: $tauxTVA;
    }
    //methode
    public function calculerPrixTTC(): String{
        $CalculerPrixTTC = ($this->priceHT+($this->priceHT*self :: $tauxTVA/100));
        return $CalculerPrixTTC;
    }
    public function afficherArticle(): void{
        echo "référance de l'article ". $this->reference."\n";
        echo "désignation de l'article ".$this->designation."\n";
        echo "prix hort taxe ".$this->priceHT."\n";
        echo "prix avec TVA ".$this->calculerPrixTTC();
    }

}
