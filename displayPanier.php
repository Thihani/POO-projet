<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        echo '<pre>';
        var_dump($_POST);   
        echo '</pre>';
        include 'function.php';
        include './class/panier.php';
        $myPanier = new Panier; 
        $myPanier->add('1'); 
        displayPanier($myPanier);   
        if (isset($_POST['valider']))
        {
            $bdd = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                      
            $sql =  $bdd->query('INSERT INTO orders (id,date,total,customer_id,number) VALUES (NULL,now(),NULL,1,9)'); 
            $sql =  $bdd->prepare('INSERT INTO order_product (order_id,product_id, quantity) VALUES (?, ?, ?)'); 
            foreach ($myPanier->getSelectArt() as $id => $quantity)
            {
                $sql->execute(array(32,$id, $quantity));
            }
            
        }

            
    ?>
    <form action="displayPanier.php" method = "POST">
            
        <button name="valider" type ="submit" > Valider mon panier</button>
</form>


</body>
</html>


