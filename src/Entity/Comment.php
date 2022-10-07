<?php

namespace App\Entity;


class Comment
{
    private DatabaseConnector $Database;

    function __construct()
    {
        $this->Database = new DatabaseConnector();
    }

    /**
     * @param $commentAuthor
     * @param $commentEmail
     * @param $commentContent
     * @param $idPost
     * @return string
     */
    public function createComment($commentAuthor, $commentEmail, $commentContent, $idPost): string
    {
        $sql = "INSERT INTO comment (commentAuthor, commentEmail, commentContent, idPost) VALUES (?,?,?,?)";
        $stmt= $this->Database->prepare($sql);
        $stmt->execute([$commentAuthor, $commentEmail, $commentContent, $idPost]);

        return "Le commentaire a bien été créé !";
    }

    /**
     * @param $id
     * @return bool|array
     */
    public function getCommentsApprouved($id): bool|array
    {
        $comment_statement = $this->Database->prepare('SELECT * FROM comment WHERE isApprouved = 1 AND idPost = ? ORDER BY dateComment DESC');
        $comment_statement->execute([$id]);
        $comments = $comment_statement->fetchAll();

        return $comments;
    }

    /**
     * @return bool|array
     */
    public function getCommentsNonApprouved(): bool|array
    {
        $comment_statement = $this->Database->prepare('SELECT * FROM comment WHERE isApprouved = 0 ORDER BY dateComment DESC');
        $comment_statement->execute();
        $comments = $comment_statement->fetchAll();

        return $comments;
    }

    /**
     * @param $id
     * @return string
     */
    public function deleteComment($id): string
    {
        $comment_statement = $this->Database->prepare('DELETE FROM comment WHERE idcomment = ?');
        $comment_statement->execute([$id]);

        return "Commentaire supprimé";
    }

    /**
     * @param $id
     * @return string
     */
    public function approuveComment($id): string
    {
        $comment_statement = $this->Database->prepare('UPDATE comment SET isApprouved = 1 WHERE idcomment = ?');
        $comment_statement->execute([$id]);

        return "Commentaire approuvé";
    }
}
