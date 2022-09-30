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
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            if (isset($postTitle) && isset($postChapo) && isset($postContent) && isset($postAuthor)) {
                $postTitle = $_POST["articleTitle"];
                $postChapo = $_POST["articleChapo"];
                $postContent = $_POST["articleContent"];
                $postAuthor = $_POST["articleAuthor"];

                $article = new Article();
                $result = $article->createArticle($postTitle, $postChapo, $postContent, $postAuthor);

                $this->twig->display('admin/articleCreate.html.twig', [
                    'result' => $result
                ]);
            } else {
                $this->twig->display('admin/articleCreate.html.twig');
            }
        }
    }
}
