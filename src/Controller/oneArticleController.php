<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;

/**
 *
 */
class oneArticleController extends MasterController
{


    /**
     * Fonction permettant d'afficher un seul article selon un paramètre donné
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index($id)
    {
        $article = new Article();
        $oneArticle = $article->getOneArticle($id);

        $comment = new Comment();
        $comments = $comment->getCommentsApprouved($id);
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $oneArticle,
            "comments" => $comments
        ]);
    }

    public function createComment($id)
    {
        $article = new Article();
        $oneArticle = $article->getOneArticle($id);
        $comment = new Comment();
        $comment->createComment($_POST["commentAuthor"], $_POST["commentEmail"], $_POST["commentContent"], $id);
        $comments = $comment->getCommentsApprouved($id);

        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $oneArticle,
            "comments" => $comments
        ]);
    }
}
