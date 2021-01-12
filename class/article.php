<?php

class Article
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    private $weight;
    private $quantity;
    private $available;

   
    public function getId() // récuperer un attribut
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    
    public function __construct($id,$name,$price) // construction un objet
    {
       $this ->id=$id;
       $this ->name=$name;
       $this ->price=$price;
    }
}

