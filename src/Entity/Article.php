<?php

namespace App\Entity;

class Article
{

    private DatabaseConnector $Database;

    function __construct()
    {
        $this->Database = new DatabaseConnector();
    }

    /**
     * @return bool|array
     */
    public function getAllArticles(): bool|array
    {
        $articles_statement = $this->Database->prepare('SELECT * FROM post ORDER BY datePost DESC');
        $articles_statement->execute();
        $articles = $articles_statement->fetchAll();

        return $articles;
    }

    /**
     * @return bool|array
     */
    public function getNumberArticles(): bool|array
    {
        $articles_statement = $this->Database->prepare('SELECT COUNT(*) FROM post');
        $articles_statement->execute();
        $nbArticles = $articles_statement->fetchAll();

        return $nbArticles;
    }

    /**
     * @return bool|array
     */
    public function getFourLastArticles(): bool|array
    {

        $articles_statement = $this->Database->prepare('SELECT * FROM post ORDER BY datePost DESC LIMIT 3');
        $articles_statement->execute();
        $articles = $articles_statement->fetchAll();

        return $articles;
    }

    /**
     * @param $id
     * @return bool|array
     */
    public function getOneArticle($id): bool|array
    {
        $articles_statement = $this->Database->prepare('SELECT * FROM post WHERE idPost = ?');
        $articles_statement->execute([$id]);
        $articles = $articles_statement->fetchAll();

        return $articles;
    }


    /**
     * @param $title
     * @param $chapo
     * @param $content
     * @param $author
     * @return string
     */
    public function createArticle($title, $chapo, $content, $author): string
    {
        $sql = "INSERT INTO post (titlePost, chapoPost, contentPost, authorPost) VALUES (?,?,?,?)";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$title, $chapo, $content, $author]);

        return "L'article a bien été créé !";

    }

    /**
     * @param $id
     * @param $title
     * @param $chapo
     * @param $content
     * @return string
     */
    public function updateArticle($id, $title, $chapo, $content): string
    {
        $sql = "UPDATE post SET titlePost=?, chapoPost=?, contentPost=? WHERE idPost=?";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$title, $chapo, $content, $id]);

        return "L'article a bien été modifié !";
    }

    /**
     * @param $id
     * @return void
     */
    public function deleteArticle($id): void
    {
        $sql = "DELETE FROM post WHERE idPost=?";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$id]);

    }
}
