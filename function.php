<?php
function displayArticle(Article $Article)
{   
    echo '<p>' . 'Product ID:' . $Article->getId(). ' - Product name: '. $Article->getName() . ' - Price: ' . $Article->getPrice().'</p>';
    
}

function displayCat(Catalogue $Catalogue)
{
    echo '<p>' . $Catalogue->getCatalogue(). '</p>'; 
}

function displayCustomer (Customer $Customer)
{
    echo '<p>'. 'ID: ' . $Customer ->getId(). ' - First name: '. $Customer ->getFirst_name(). ' - Address: ' .$Customer->getAddress().'</p>';
}

function displayCustomerList (CustomerList $CustomerList)
{
    echo '<p>' . $CustomerList->getCustomerList(). '</p>'; 
}