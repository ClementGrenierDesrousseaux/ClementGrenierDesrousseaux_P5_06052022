<?php

namespace App\Controller;

use App\Entity\Article;

/**
 *
 */
class oneArticleController extends MasterController
{


    /**
     * Fonction permettant d'afficher un seul article selon un paramètre donné
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index($id)
    {
        $article = new Article();
        $oneArticle = $article->getOneArticle($id);
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $oneArticle,
            "comments" => $this->comments
        ]);
    }
}
