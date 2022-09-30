<?php

namespace App\Controller\Admin;

use App\Controller\MasterController;
use App\Entity\Article;

class AdminArticleModify extends MasterController
{
    /**
     * Fonction gérant l'affichage d'un article dans le BO selon un paramètre donné
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index($id)
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            $articles = new Article();
            $article = $articles->getOneArticle($id);


            if (isset($_POST["articleTitle"]) && isset($_POST["articleChapo"]) && isset($_POST["articleContent"])) {
                $articles->updateArticle($id, $_POST["articleTitle"], $_POST["articleChapo"], $_POST["articleContent"]);
                $article = $articles->getOneArticle($id);
            }

            $this->twig->display('admin/articleModify.html.twig', [
                'articles' => $article
            ]);
        }
    }
}
