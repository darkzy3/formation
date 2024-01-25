<?php
class Customer
{
    //attribut
    private string $name;
    private string $firstname;
    private string $cin;
    private string $phone;
    //contante
    public function __construct( String $name, string $firstname, string $cin, string $phone) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->cin = $cin;
        $this->phone = $phone;
    }
    //methode
    public function displayCustomer(): void{
        echo "compte au nom de ".$this->name."\n";
        echo "prénom du titulaire ".$this->firstname."\n";
        echo "identifiant cni ".$this->cin."\n";
        echo "numero de telephone renseigner ".$this->phone."\n";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}