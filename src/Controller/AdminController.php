<?php

namespace App\Controller;

use App\Entity\Article;

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
        if (!isset($_SESSION['name'])) {
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
        if (!isset($_SESSION['name'])) {
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
        if (!isset($_SESSION['name'])) {
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
        if (!isset($_SESSION['name'])) {
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
        if (!isset($_SESSION['name'])) {
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
        if (!isset($_SESSION['name'])) {
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
}
