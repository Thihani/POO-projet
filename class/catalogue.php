<?php

class Catalogue 
{
    private $catalogue;
    private $catshoes;

   public function __construct()
    {   
        $bdd = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
        $reponse = $bdd->query('SELECT id, name, price FROM products');
        $this ->catalogue = $reponse->fetchAll(PDO::FETCH_ASSOC);

        $reponseShoes = $bdd->query('SELECT * FROM products JOIN shoes ON products.id=shoes.product_id');
        $this ->catShoes = $reponseShoes->fetchAll(PDO::FETCH_ASSOC); 
    }

        
    public function getCatalogue()
    {
        return $this ->catalogue; 
    }  
    
    public function getCatShoes()
    {
        return $this ->catShoes; 
    }
}