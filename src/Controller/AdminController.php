<?php

namespace App\Controller;

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
            $this->twig->display('admin/articles.html.twig', [
                'articles' => $this->articles
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
    public function adminArticleModify()
    {
        if (!isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/articleModify.html.twig', [
                'articles' => $this->oneArticle
            ]);
        }
    }
}
