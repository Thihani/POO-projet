<?php
include './class/article.php';

function displayArticle(Article $Article)
{   
    echo '<p>' . 'Product ID:' . $Article->getId(). ' - Product name: '. $Article->getName() . ' - Price: ' . $Article->getPrice().'</p>';
    
}

function displayCat(Catalogue $Catalogue)
{
    $myCat = $Catalogue->getCatalogue();
    echo '<pre>';
    var_dump($myCat);
    echo '</pre>';

    foreach($myCat as $article) 
    {
        $newarticle = new Article ($article['id'],$article['name'],$article['price']);
        displayArticle($newarticle);
       
    }
    
}

function displayCustomer (Customer $Customer)
{
    echo '<p>'. 'ID: ' . $Customer ->getId(). ' - First name: '. $Customer ->getFirst_name(). ' - Address: ' .$Customer->getAddress().'</p>';
}

function displayCustomerList (CustomerList $CustomerList)
{
    echo '<p>' . $CustomerList->getCustomerList(). '</p>'; 
}

function displayShoes (Shoes $Shoes)
{
    echo '<p>' .' Shoes ID: '. $Shoes->getId() .' - Product name: '. $Shoes->getName() . ' - Price: ' . $Shoes->getPrice(). ' - Size: '.$Shoes->getSize() . '</p>';
}

