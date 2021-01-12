<?php
include 'function.php';
include './class/article.php';

$bdd = new PDO ('mysql:host=localhost;dbname=boutique','hani','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
$reponse = $bdd->query('SELECT * FROM products');

while ($donnees = $reponse->fetch())
{
    $article = new Article($donnees['id'],$donnees['name'], $donnees['price']);    
    displayArticle($article);
};
$reponse->closeCursor(); 