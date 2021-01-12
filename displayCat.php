<?php
include_once 'function.php';
include_once 'displayArticle.php';
include_once './class/catalogue.php';
$pdo = new PDO ('mysql:host=localhost;dbname=boutique','hani','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
$request = $pdo->query('SELECT * FROM products');
while ($donnees = $reponse->fetch())
{
    
    $displayCatalogue = new Catalogue($article);
    displayCat($displayCatalogue);
};
$reponse->closeCursor();