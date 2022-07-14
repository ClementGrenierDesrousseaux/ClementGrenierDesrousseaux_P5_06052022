<?php

namespace App\Controller;

class IndexController extends MasterController
{

    public $articles = [
        "article 1" => [
            "Title"=>"Premier article",
            "Description"=>"La description du 1 article"
        ],

        "article 2" => [
            "Title"=>"Deuxième article",
            "Description"=>"La description du 2 article"
        ],

        "article 3" => [
            "Title"=>"Troisième article",
            "Description"=>"La description du 3 article"
        ],

        "article 4" => [
            "Title"=>"Quatrième article",
            "Description"=>"La description du 4 article"
        ],

        "article 5" => [
            "Title"=>"Cinquième article",
            "Description"=>"La description du 5 article"
        ],


    ];

    public function index()
    {
        $this->twig->display('index/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}