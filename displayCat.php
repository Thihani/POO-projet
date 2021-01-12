<?php
include './class/catalogue.php';
include 'function';

    $displayCatalogue = new Catalogue($reponse);
    displayCat($displayCatalogue);

$reponse->closeCursor();