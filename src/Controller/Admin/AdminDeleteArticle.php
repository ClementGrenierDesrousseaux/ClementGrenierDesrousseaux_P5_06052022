<?php

namespace App\Controller\Admin;

use App\Entity\Article;

class AdminDeleteArticle extends \App\Controller\MasterController
{
    /**
     * @param $id
     * @return void
     */
    public function index($id)
    {
        $article = new Article();
        $article->deleteArticle($id);
    }
}
