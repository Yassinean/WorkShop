<?php

class Book
{
    //  ISBN VARCHAR(13) PRIMARY KEY,
    // Title VARCHAR(255) NOT NULL,
    // Genra VARCHAR(50),
    // Price DECIMAL(10, 2),
    // NbrofPages INT,
    // Author VARCHAR(100)
    private $ISBN;
    private $title;
    private $price;
    private $Pages;
    private $author;
    private $genre;

    // public function __construct()
    // {
    // }
    public function __construct($ISBN, $title, $price, $Pages, $author, $genre)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->price = $price;
        $this->Pages = $Pages;
        $this->genre = $genre;
        $this->author = $author;
    }

    public function getISBN(){
        return $this->ISBN;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getPages(){
        return $this->Pages;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getAuthor(){
        return $this->author;
    }

    public function setISBN($newISBN){
        $this->ISBN = $newISBN;
    }
    public function setTitle($newTitle){
        $this->title = $newTitle;
    }
    public function setPrice($newPrice){
        $this->price = $newPrice;
    }
    public function setPages($newPages){
        $this->Pages = $newPages;
    }
    public function setGenre($newGenre){
        $this->genre = $newGenre;
    }
    public function setAuthor($newAuthor){
        $this->author = $newAuthor;
    }
}
