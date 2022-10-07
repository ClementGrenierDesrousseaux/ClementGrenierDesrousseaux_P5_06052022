<?php

namespace App\Entity;

class User
{
    public string $password;
    private DatabaseConnector $Database;

    function __construct()
    {
        $this->Database = new DatabaseConnector();
    }

    /**
     * @param $userEmail
     * @param $userPassword
     * @return string
     */
    public function createUser($userEmail, $userPassword): string
    {
        $sql = "INSERT INTO user (userEmail, userPassword) VALUES (?,?)";
        $stmt= $this->Database->prepare($sql);
        $stmt->execute([$userEmail, $userPassword]);

        return "L'article a bien été créé !";
    }

    /**
     * @param $userEmail
     * @param $userPassword
     * @return bool
     */
    public function checkPassword($userEmail, $userPassword): bool
    {
        $sql = "SELECT * FROM user WHERE userEmail = ?";
        $stmt= $this->Database->prepare($sql);
        $stmt->execute([$userEmail]);
        $passwordHash = $stmt->fetch();

        $stmt->closeCursor();

        if (!empty($passwordHash['userPassword']) && !empty($userPassword) && password_verify($userPassword, $passwordHash['userPassword'])) {
            return true;
        } else {
            return false;
        }
    }
}
