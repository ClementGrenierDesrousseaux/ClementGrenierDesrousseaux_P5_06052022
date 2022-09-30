<?php

namespace App\Controller\Admin;

use App\Entity\Article;

class AdminCreateArticle extends \App\Controller\MasterController
{
    /**
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
        } else {

            if (isset($_POST["articleTitle"]) && isset($_POST["articleChapo"]) && isset($_POST["articleContent"]) && isset($_POST["articleAuthor"])) {
                $article = new Article();
                $result = $article->createArticle($_POST["articleTitle"], $_POST["articleChapo"], $_POST["articleContent"], $_POST["articleAuthor"]);

                $this->twig->display('admin/articleCreate.html.twig', [
                    'result' => $result
                ]);
            } else {
                $this->twig->display('admin/articleCreate.html.twig');
            }




        }
    }
}
