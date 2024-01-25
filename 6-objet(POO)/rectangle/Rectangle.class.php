<?php
class Rectangle
{
    //attribut
    private float $leght;
    private float $width;
    //contante
    public function __construct(float $len, float $wid){
        $this->leght = $len;
        $this->width = $wid;
    }
    //méthode for display perimeter attribut
    public function perimeter(): String{
        $perimeter = ($this->leght*2)+($this->width*2);
        return $perimeter;
    }
    //méthode for display area attribut
    public function area(): String{
        $area = ($this->leght*$this->width);
        return $area;        
    }
    //méthode for display isSquare attribut
    public function isSquare(): String{
        if ($this->leght == $this->width) {
            return "(".$this->leght.","."$this->width".") est un carré";
        } else {
            return "(".$this->leght.","."$this->width".") n'est pas un carré";
        }  
    }
    public function all(): void{
        echo "le périmétre est de ". $this->perimeter()."\n";
        echo "l'aire est de ".$this->area()."\n";
        echo "il ".$this->isSquare()."\n";
    }

    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
        return $this->leght;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($leght)
    {
        $this->leght = $leght;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */ 
    public function getOrdonnee()
    {
        return $this->width;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function setOrdonnee($width)
    {
        $this->width = $width;

        return $this;
    }



}
