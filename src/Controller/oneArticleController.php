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
    public function index($articleIdentifier)
    {
        $article = new Article();
        $oneArticle = $article->getOneArticle($articleIdentifier);

        $comment = new Comment();
        $comments = $comment->getCommentsApprouved($articleIdentifier);
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $oneArticle,
            "comments" => $comments
        ]);
    }

    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function createComment($articleIdentifier)
    {
        $commentAuthor = $_POST["commentAuthor"];
        $commentEmail = $_POST["commentEmail"];
        $commentContent = $_POST["commentContent"];

        $article = new Article();
        $oneArticle = $article->getOneArticle($articleIdentifier);
        $comment = new Comment();
        $comment->createComment($commentAuthor, $commentEmail, $commentContent, $articleIdentifier);
        $comments = $comment->getCommentsApprouved($articleIdentifier);

        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $oneArticle,
            "comments" => $comments
        ]);
    }
}
