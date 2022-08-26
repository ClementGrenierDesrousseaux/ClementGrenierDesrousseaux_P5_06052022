<?php

namespace App\Controller;


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
        $this->twig->display('index/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}
