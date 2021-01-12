<?php
include_once 'function.php';
include_once './class/customer.php';

$bdd = new PDO ('mysql:host=localhost;dbname=boutique','hani','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
$reponse = $bdd->query('SELECT * FROM customers');

while ($donnees = $reponse->fetch())
{
    $customer = new Customer($donnees['id'],$donnees['first_name'], $donnees['address']);
    
    displayCustomer($customer);
};
$reponse->closeCursor();