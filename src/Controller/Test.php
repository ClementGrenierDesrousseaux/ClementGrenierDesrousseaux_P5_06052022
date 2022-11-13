<?php

namespace App\Controller;

use App\Entity\Article;

class Test extends MasterController
{
    public function index()
    {
        $article = new Article();
        $articles = $article->getAllArticles();

        $test = [
            [
                "title" => "Titre 1",
                "content" => "Content 1"
            ],
            [
                "title" => "Titre 2",
                "content" => "Content 2"
            ],
            [
                "title" => "Titre 3",
                "content" => "Content 3"
            ],
            [
                "title" => "Titre 4",
                "content" => "Content 4"
            ],
            [
                "title" => "Titre 5",
                "content" => "Content 5"
            ],
            [
                "title" => "Titre 6",
                "content" => "Content 6"
            ],
            [
                "title" => "Titre 7",
                "content" => "Content 7"
            ]
        ];


        echo '<pre>';
        print_r($articles);
        echo '</pre>';

    }
}


