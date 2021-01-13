$reponseShoes = $bdd->query('SELECT * FROM products JOIN shoes ON products.id=shoes.product_id');
$this ->catShoes = $reponseShoes->fetchAll(PDO::FETCH_ASSOC); 

/$myCatShoes = $Catalogue->getCatShoes();
    
    echo '<pre>';
    var_dump($myCatShoes);
    echo '</pre>';

    foreach($myCatShoes as $shoes) 
    {
        $newshoes = new Shoes ($shoes['id'],$shoes['name'],$shoes['price']);
        displayShoes($newshoes);
       
    }