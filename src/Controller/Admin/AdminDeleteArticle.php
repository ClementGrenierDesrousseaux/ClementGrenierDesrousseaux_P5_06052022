<?php

namespace App\Controller\Admin;

use App\Entity\Article;

class AdminDeleteArticle extends \App\Controller\MasterController
{
    /**
     * @param $id
     * @return void
     */
    public function index($articleIdentifier)
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        }

        $article = new Article();
        $article->deleteArticle($articleIdentifier);
    }
}
