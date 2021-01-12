<?php
include './class/customerList.php';
include 'function.php';
include 'displayCustomer.php';

$pdo = new PDO ('mysql:host=localhost;dbname=boutique','hani','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
$request = $pdo->query('SELECT * FROM products');

while ($donnees = $reponse->fetch())
{
    
    $displayCustomerList = new CustomerList ($Customer);
    displayCutomerList($displayCustomerList);
};
$reponse->closeCursor();