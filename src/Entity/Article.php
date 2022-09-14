<?php

namespace App\Entity;


use Exception;
use PDO;

class Article
{

    public function getAllArticles()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $articles_statement = $db->prepare('SELECT * FROM post ORDER BY datePost DESC');
        $articles_statement->execute();
        $articles = $articles_statement->fetchAll();

        return $articles;
    }

    public function getOneArticle($id)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $articles_statement = $db->prepare('SELECT * FROM post WHERE idPost = ?');
        $articles_statement->execute([$id]);
        $articles = $articles_statement->fetchAll();

        return $articles;
    }


    public function createArticle($title, $chapo, $content, $author)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "INSERT INTO post (title, chapo, content, author) VALUES (?,?,?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$title, $chapo, $content, $author]);

        return "L'article a bien été créé !";

}

    public function updateArticle($id, $title, $chapo, $content)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "UPDATE post SET title=?, chapo=?, content=? WHERE idPost=?";
        $stmt= $db->prepare($sql);
        $stmt->execute([$title, $chapo, $content, $id]);

        return "L'article a bien été modifié !";
}

    public function deleteArticle($id)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "DELETE FROM post WHERE idPost=?";
        $stmt= $db->prepare($sql);
        $stmt->execute([$id]);

}
}