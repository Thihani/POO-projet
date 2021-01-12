<?php
include './class/customerList.php';
include 'displayCustomer.php';

while ($donnees = $reponse->fetch())
{
    
    $displayCustomerList = new CustomerList ($Customer);
    displayCutomerList($displayCustomerList);
};
$reponse->closeCursor();