<?php

namespace App\Controller;

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
    public function index()
    {
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $this->oneArticle,
            "comments" => $this->comments
        ]);
    }
}
