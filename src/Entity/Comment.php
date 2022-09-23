<?php

namespace App\Entity;

use Exception;
use PDO;

class Comment
{
    public function createComment($commentAuthor, $commentEmail, $commentContent, $idPost)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "INSERT INTO comment (commentAuthor, commentEmail, commentContent, idPost) VALUES (?,?,?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$commentAuthor, $commentEmail, $commentContent, $idPost]);

        return "Le commentaire a bien été créé !";
    }

    public function getCommentsApprouved()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $comment_statement = $db->prepare('SELECT * FROM comment WHERE isApprouved = 1 ORDER BY dateComment DESC');
        $comment_statement->execute();
        $comments = $comment_statement->fetchAll();

        return $comments;
    }

    public function getCommentsNonApprouved()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $comment_statement = $db->prepare('SELECT * FROM comment WHERE isApprouved = 0 ORDER BY dateComment DESC');
        $comment_statement->execute();
        $comments = $comment_statement->fetchAll();

        return $comments;
    }

    public function deleteComment($id)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $comment_statement = $db->prepare('DELETE FROM comment WHERE idcomment = ?');
        $comment_statement->execute([$id]);

        return "Commentaire supprimé";
    }

    public function approuveComment($id)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $comment_statement = $db->prepare('UPDATE comment SET isApprouved = 1 WHERE idcomment = ?');
        $comment_statement->execute([$id]);

        return "Commentaire approuvé";
    }
}
