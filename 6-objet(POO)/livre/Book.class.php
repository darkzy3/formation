<?php
class Book
{
    //attribut
    private string $title;
    private string $autor;
    public float $price;
    //contante
    public function __construct(string $title, string $autor, float $price){
        $this->title = $title;
        $this->autor = $autor;
        $this->price = $price;
    }
    //méthode for display title attribut
    public function title(): String{
        $title = ($this->title);
        return "le titre est ".$title;
    }
    //méthode for display autor attribut
    public function autor(): String{
        $autor = ($this->autor);
        return "l'auteur est ".$autor;
    }
    //méthode for display price attribut
    public function price(): String{
        $price = ($this->price);
        return "le prix est de ".$price;
    }
    //méthode for display all attributs
    public function all(): void{
        echo "le titre du livre est ". $this->title."\n";
        echo "le nom de l'auteur est ".$this->autor."\n";
        echo "le prix est de ".$this->price."\n";
    }
  
}
