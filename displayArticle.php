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
    ?>
    <form action="displayPanier2.php" method = "POST">
        <?php 
            $bdd = new PDO ('mysql:host=localhost;dbname=boutique','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
            $reponse = $bdd->query('SELECT * FROM products');
            while ($donnees = $reponse->fetch())
            {
            $article = new Article($donnees['id'],$donnees['name'], $donnees['price']);    
            displayArticle($article);?> 
            <input type="checkbox" name="selection[]" value = <?= $article->getId() ?> >
            <hr>
        <?php }; ?> 
        <button>Order</button>  
        </form>         



</body>
</html>


