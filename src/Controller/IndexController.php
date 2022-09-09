<?php

namespace App\Controller;

use App\Entity\Article;
use mysqli;
use PDO;


/**
 *
 */
class IndexController extends MasterController
{



    /**
     * Focntion gérant la page d'accueil
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $article = new Article();
        $articles = $article->getAllArticles();
        $this->twig->display('index/index.html.twig', [
            "articles" => $articles,
        ]);
    }
}
