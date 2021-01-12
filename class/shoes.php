<?php
include 'article.php';

class Shoes extends Article
{
    private $size;    

   public function __construct($id,$name,$price,$size)
    {
        parent:: __construct($id,$name,$price);
        $this ->size=$size;
       
    }

    public function getSize()
    {
        return $this->size;
    }    
}