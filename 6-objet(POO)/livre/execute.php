<?php
//include controleur file
include_once "Book.class.php";
//set all attributs for the book objet
$title = "Programmer en C";
$autor = "Claude Delannoy";
$price = 350;
// creat new book object
$book1 = new Book($title, $autor,$price);
//call all function for display object information
// $title = $book1->title();
// $autor = $book1->autor();
// $price = $book1->price();
// $all = $book1->all();
//display all methode he combine all attribute methode
$book1 = $book1 -> all();
echo "\n";

//set all attributs for the book objet
$title = "Programmer en java";
$autor = "Claude Delannoy";
$price = 450;
// creat new book object
$book2 = new Book($title, $autor,$price);
//call all function for display object information
// $title = $book2->title();
// $autor = $book2->autor();
// $price = $book2->price();
// $all = $book2->all();
//display all methode he combine all attribute methode
$book2 = $book2 -> all();
