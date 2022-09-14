<?php

namespace App\Entity;

class Comment
{
    public function createComment($commentAuthor, $commentContent, $idPost)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "INSERT INTO comment (commentAuthor, commentContent, idPost) VALUES (?,?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$commentAuthor, $commentContent, $idPost]);

        return "Le commentaire a bien été créé !";
    }
}
