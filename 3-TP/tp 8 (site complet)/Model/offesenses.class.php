<?php
include "BDDManager.class.php";

class offesenses
{
    // set all attributs
    private int $id_Offenses;
    private string $type_Offenses;
    private float $price_Unit;

    // set up construct
    public function __construct($type_Offenses, $price_Unit) 
    {
        $this->type_Offenses=$type_Offenses;
        $this->price_Unit=$price_Unit;
    }

    public function __toString() : string
    {
        return $this->type_Offenses."\n".$this->price_Unit."\n";
    }

    /**
     * Get the value of type_Offenses
     */ 
    public function getType_Offenses()
    {
        return $this->type_Offenses;
    }

    /**
     * Set the value of type_Offenses
     *
     * @return  self
     */ 
    public function setType_Offenses($type_Offenses)
    {
        $this->type_Offenses = $type_Offenses;

        return $this;
    }

    /**
     * Get the value of price_Unit
     */ 
    public function getPrice_Unit()
    {
        return $this->price_Unit;
    }

    /**
     * Set the value of price_Unit
     *
     * @return  self
     */ 
    public function setPrice_Unit($price_Unit)
    {
        $this->price_Unit = $price_Unit;

        return $this;
    }
}