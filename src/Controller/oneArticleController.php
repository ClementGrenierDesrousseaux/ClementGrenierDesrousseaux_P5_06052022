<?php

namespace App\Controller;

class oneArticleController extends MasterController
{


    // AFFICHAGE D'UN ARTICLE SPECIFIQUE SELON SON ID, AINSI QUE LES COMMENTAIRES LIES A CET ARTICLE
    public function index()
    {
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $this->oneArticle,
            "comments" => $this->comments
        ]);
    }
}