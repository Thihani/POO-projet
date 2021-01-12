<?php
include 'function.php';
include './class/shoes.php';

$bdd = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
$reponse = $bdd->query('SELECT * FROM products JOIN shoes ON products.id=shoes.product_id');

while ($donnees = $reponse->fetch())
{
    $shoes = new Shoes($donnees['id'],$donnees['name'], $donnees['price'], $donnees['size']);    
    displayShoes($shoes);
};
$reponse->closeCursor(); 