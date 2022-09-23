<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;

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
            $this->twig->display('admin/index.html.twig', [
                'articles' => $this->articles
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
        if (!isset($_SESSION['email'])) {
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


    public function adminArticleCreate()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/articleCreate.html.twig');
        }
    }

    /**
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function adminArticleCreateResponse()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {


            $article = new Article();
            $result = $article->createArticle($_GET["articleTitle"], $_GET["articleChapo"], $_GET["articleContent"], $_GET["articleAuthor"]);

            $this->twig->display('admin/articleCreate.html.twig', [
                'result' => $result
            ]);
        }
    }


    /**
     * Fonction gérant l'affichage d'un article dans le BO selon un paramètre donné
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function adminArticleModify($id)
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            $articles = new Article();
            $article = $articles->getOneArticle($id);
            $this->twig->display('admin/articleModify.html.twig', [
                'articles' => $article
            ]);
        }
    }

    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function adminArticleModifyResponse()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            $articles = new Article();
            $response = $articles->updateArticle($_GET["articleId"], $_GET["articleTitle"], $_GET["articleChapo"], $_GET["articleContent"]);
            $this->twig->display('admin/articleModify.html.twig', [
                'response' => $response
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


        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            unset($_SESSION["email"]);
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
        }
    }

    public function getCommentsNonApprouved()
    {
        if (!isset($_SESSION['email'])) {
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


    /*public function approuveComment()
    {


        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            $comment = new Comment();

            if ($_POST['approuve']) {
                $response = $comment->approuveComment($_POST['idComment']);
                $comments = $comment->getCommentsNonApprouved();
                $this->twig->display('admin/comments.html.twig', [
                    'response' => $response,
                    'comments' => $comments
                ]);
            }
        }

    }

    public function deleteComment()
    {


        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {

            $comment = new Comment();

            if ($_POST['delete']) {
                $response = $comment->deleteComment($_POST['idComment']);
                $comments = $comment->getCommentsNonApprouved();
                $this->twig->display('admin/comments.html.twig', [
                    'response' => $response,
                    'comments' => $comments
                ]);
            }
        }

    }*/

    public function approuveOrDeleteComment()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {




            switch ($_REQUEST['button_submit']) {
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
