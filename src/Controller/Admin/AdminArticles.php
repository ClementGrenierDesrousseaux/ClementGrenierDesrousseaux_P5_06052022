<?php

namespace App\Controller\Admin;

use App\Entity\Article;

class AdminArticles extends \App\Controller\MasterController
{
    /**
     * Fonction gérant la page des articles sur le BO
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        }

        $article = new Article();
        $articles = $article->getAllArticles();


        $this->twig->display('admin/articles.html.twig', [
            'articles' => $articles
        ]);
    }
}
