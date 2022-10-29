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
        return $articles_statement->fetchAll();
    }

    /**
     * @return bool|array
     */
    public function getNumberArticles(): bool|array
    {
        $articles_statement = $this->Database->prepare('SELECT COUNT(*) FROM post');
        $articles_statement->execute();
        return $articles_statement->fetchAll();
    }

    /**
     * @return bool|array
     */
    public function getFourLastArticles(): bool|array
    {

        $articles_statement = $this->Database->prepare('SELECT * FROM post ORDER BY datePost DESC LIMIT 3');
        $articles_statement->execute();
        return $articles_statement->fetchAll();
    }


    /**
     * @param $articleIdentifier
     * @return bool|array
     */
    public function getOneArticle($articleIdentifier): bool|array
    {
        $articles_statement = $this->Database->prepare('SELECT * FROM post WHERE idPost = ?');
        $articles_statement->execute([$articleIdentifier]);
        return $articles_statement->fetchAll();
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
     * @param $articleIdentifier
     * @param $title
     * @param $chapo
     * @param $content
     * @return string
     */
    public function updateArticle($articleIdentifier, $title, $chapo, $content): string

    {
        $sql = "UPDATE post SET titlePost=?, chapoPost=?, contentPost=? WHERE idPost=?";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$title, $chapo, $content, $articleIdentifier]);

        return "L'article a bien été modifié !";
    }

    /**
     * @param $articleIdentifier
     * @return void
     */
    public function deleteArticle($articleIdentifier): void

    {
        $sql = "DELETE FROM post WHERE idPost=?";
        $stmt = $this->Database->prepare($sql);
        $stmt->execute([$articleIdentifier]);
    }
}
