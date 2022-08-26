<?php

namespace App\Controller;

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
        $this->twig->display('listArticles/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}
