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
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
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


    /**
     * Fonction gérant la page des articles sur le BO
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function adminArticles()
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $article = new Article();
            $articles = $article->getAllArticles();
            $this->twig->display('admin/articles.html.twig', [
                'articles' => $articles
            ]);
        }
    }

    public function adminDeleteOneArticle($id)
    {
        $article = new Article();
        $article->deleteArticle($id);
    }

    public function disconnectUser()
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            unset($sessionMail);
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
        }
    }

    public function getCommentsNonApprouved()
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $comment = new Comment();
            $comments = $comment->getCommentsNonApprouved();
            $this->twig->display('admin/comments.html.twig', [
                'comments' => $comments
            ]);
        }
    }

    public function approuveOrDeleteComment()
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else if (isset($_REQUEST['button_submit'])) {
            $valueSubmit = $_REQUEST['button_submit'];
            switch ($valueSubmit) {
                case 'Valider le commentaire':
                    $comment = new Comment();
                    $response = $comment->approuveComment($_POST['idComment']);
                    $comments = $comment->getCommentsNonApprouved();
                    $this->twig->display('admin/comments.html.twig', [
                        'response' => $response,
                        'comments' => $comments
                    ]);
                    break;
                case 'Supprimer le commentaire':
                    $comment = new Comment();
                    $response = $comment->deleteComment($_POST['idComment']);
                    $comments = $comment->getCommentsNonApprouved();
                    $this->twig->display('admin/comments.html.twig', [
                        'response' => $response,
                        'comments' => $comments
                    ]);
                    break;
            }
        }
    }
}
