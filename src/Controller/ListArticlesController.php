<?php

namespace App\Controller;

class ListArticlesController extends MasterController
{

    // ENVOIE LA LISTE DE TOUS LES ARTICLES A LA VUE TWIG
    public function index()
    {
        $this->twig->display('listArticles/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}