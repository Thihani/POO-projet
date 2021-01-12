<?php

class Catalogue 
{
    private $catalogue;

   public function __construct($reponse)
    {   
        $bdd = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
        $reponse = $bdd->query('SELECT * FROM products');
        $this ->catalogue = $reponse->fetchAll;
    }

        
    public function getCatalogue()
    {
        return $this ->catalogue; 
    }   
}