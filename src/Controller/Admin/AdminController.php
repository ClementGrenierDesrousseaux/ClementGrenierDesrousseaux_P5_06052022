<?php

namespace App\Controller\Admin;

use App\Controller\MasterController;
use App\Entity\Article;
use App\Entity\Comment;

/**
 *
 */
class AdminController extends MasterController
{

    /**
     * Fonction gérant la home du back office
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function adminIndex()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $article = new Article();
            $articles = $article->getAllArticles();
            $this->twig->display('admin/index.html.twig', [
                'articles' => $articles
            ]);
        }
    }
}
