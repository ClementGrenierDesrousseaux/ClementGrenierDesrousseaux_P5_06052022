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
    public function index($articleIdentifier): void
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $articles = new Article();
            $article = $articles->getOneArticle($articleIdentifier);

            if (isset($postTitle) && isset($postChapo) && isset($postContent)) {
                $postTitle = $_POST["articleTitle"];
                $postChapo = $_POST["articleChapo"];
                $postContent = $_POST["articleContent"];
                $articles->updateArticle($articleIdentifier, $postTitle, $postChapo, $postContent);
                $article = $articles->getOneArticle($articleIdentifier);
            }

            $this->twig->display('admin/articleModify.html.twig', [
                'articles' => $article
            ]);
        }
    }
}
