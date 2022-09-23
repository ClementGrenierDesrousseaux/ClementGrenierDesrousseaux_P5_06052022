<?php

namespace App\Controller;

use App\Entity\Article;

/**
 *
 */
class ListArticlesController extends MasterController
{

    /**
     * Fonction affichant la liste des articles
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $article = new Article();
        $articles = $article->getAllArticles();
        $this->twig->display('listArticles/index.html.twig', [
            "articles" => $articles
        ]);
    }
}
