<?php
include './class/shoes.php';


function displayArticle(Article $Article)
{   
    echo '<p>' . 'Product ID:' . $Article->getId(). ' - Product name: '. $Article->getName() . ' - Price: ' . $Article->getPrice().'</p>';
    
}

function displayCat(Catalogue $Catalogue)
{
    $myCat = $Catalogue->getCatalogue();
    /*echo '<pre>';
    var_dump($myCat);
    echo '</pre>';*/

    echo 'LIST OF PRODUCTS:';
    foreach($myCat as $article) 
    {
        $newarticle = new Article ($article['id'],$article['name'],$article['price']);
        displayArticle($newarticle);
       
    }

    $myCatShoes = $Catalogue->getCatShoes();
    /*echo '<pre>';
    var_dump($myCatShoes);
    echo '</pre>';*/

    echo 'LIST OF SHOES:';

    foreach($myCatShoes as $shoes) 
    {
        $newshoes = new Shoes ($shoes['id'],$shoes['name'],$shoes['price'], $shoes['size']);
        displayShoes($newshoes);
       
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


function displayPanier(Panier $Panier)
{
    foreach($Panier->getSelectArt() as $id => $quantity)
    {
        echo '<p>' . $id. '- quantity: '. $quantity .'</p>'; 
    }
    
}

