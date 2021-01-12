<?php
include_once 'article.php';
class Catalogue 
{
    private $catalogue;

    public function __construct(Article $Article)
    {
        $this ->catalogue = $Article;
    }

    public function getCatalogue()
    {
        return $this ->catalogue;
    }
}