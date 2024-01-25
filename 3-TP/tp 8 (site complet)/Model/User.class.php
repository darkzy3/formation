<?php
// classe for user
class User
{
    //set all attribut
private string $name;
private string $firstname;
private string $mail;
private string $tel;
private string $password;
private float $debte;
private int $bad_Boy;
private int $lick_Ass;
private int $morality;

// set constructe
public function __construct(string $name, string $firstname, string $mail, string $tel, string $password){
    $this->name = $name;
    $this->firstname = $firstname;
    $this->mail = $mail;
    $this->tel = $tel;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
}
// set magic function toString for display (test)
public function __toString() : string
{
    return $this->name."\n".$this->firstname."\n".$this->mail."\n".$this->tel."\n".$this->password."\n";
}

// set all geter and set
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
 * Get the value of mail
 */ 
public function getMail()
{
return $this->mail;
}

/**
 * Set the value of mail
 *
 * @return  self
 */ 
public function setMail($mail)
{
$this->mail = $mail;

return $this;
}

/**
 * Get the value of tel
 */ 
public function getTel()
{
return $this->tel;
}

/**
 * Set the value of tel
 *
 * @return  self
 */ 
public function setTel($tel)
{
$this->tel = $tel;

return $this;
}


/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}
}