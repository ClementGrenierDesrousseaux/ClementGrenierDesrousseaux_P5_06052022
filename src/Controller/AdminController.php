<?php

namespace App\Controller;

class AdminController extends MasterController
{

    // AFFICHAGE DE LA PAGE D'ACCUEIL ADMIN
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


    // AFFICHAGE DE LA PAGE DES ARTICLES ADMIN
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


    // AFFICHAGE DE L'INTERFACE DE MODIFICATION D'UN ARTICLE SELON SON ID
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