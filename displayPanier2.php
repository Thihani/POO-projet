<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include 'function.php';
        include './class/panier.php';

        $myPanier = new Panier; 

        if (isset($_SESSION['panier']))
        {
            $myPanier ->setSelectArt($_SESSION['panier']);
        }
        if(isset($_POST['selection']))
        {
            foreach ($_POST['selection'] as $key=>$id)
            {
                $myPanier ->add($id);
            }
        }

        $_SESSION['panier']=$myPanier->getSelectArt();

        $panierValide = $myPanier -> getSelectArt();

        if (isset($_POST['valider']))
        {
            if (isset($panierValide))
            {     
                $pdo = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                $sql = 'INSERT INTO orders (id,date,total,customer_id,number) VALUES (NULL,now(),NULL,:customer_id,:number)'; 
                $req = $pdo ->prepare($sql);
                $customer_id=1;
                $order_number=30;

                $req ->bindParam(':number', $order_number);
                $req ->bindParam(':customer_id',$customer_id);
                $req ->execute();
                $order_id = $pdo ->lastInsertId();
                foreach ($panierValide as $key =>$value)
                {
                    $sql2 = 'INSERT INTO order_product (order_id,product_id,quantity) VALUES (:order_id,:product_id,:quantity)';
                    $req2 = $pdo ->prepare ($sql2);     
                    $req2 ->bindParam(':order_id', $order_id);
                    $req2 ->bindParam(':product_id', $key);
                    $req2 ->bindParam(':quantity', $value);
                    $req2 ->execute();
                }            
            }
        }     
    ?> 

    <form action="displayPanier2.php" method = "POST">
        <?php displayPanier($myPanier); ?>
        <button name="valider" type ="submit" > Valider mon panier</button>
    </form>

    <?php
   
   /* $_SESSION = array();
    session_destroy();*/
    ?>

</body>
</html>


