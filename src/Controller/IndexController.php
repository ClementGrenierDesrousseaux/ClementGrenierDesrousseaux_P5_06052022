<?php

namespace App\Controller;


class IndexController extends MasterController
{

    // ENVOIE LA LISTE DES ARTICLES RECENTS (LES 5 DERNIERS) A LA VUE TWIG
    public function index()
    {
        $this->twig->display('index/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}