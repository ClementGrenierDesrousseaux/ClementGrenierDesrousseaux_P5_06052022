<?php

namespace App\Controller;

class BlogController {

    public function index()
    {
        echo "Je suis la home page";
    }

    public function show(int $id)
    {
        echo "Je suis le post " . $id;
    }

    public function listeArticles()
    {
        echo "Page listant tous les articles";
    }
}