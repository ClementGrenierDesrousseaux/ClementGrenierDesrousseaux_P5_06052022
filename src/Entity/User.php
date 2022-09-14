<?php

namespace App\Entity;

use Exception;
use PDO;

class User
{
    public string $password;

    public function createUser($userEmail, $userPassword)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "INSERT INTO user (userEmail, userPassword) VALUES (?,?)";
        $stmt= $db->prepare($sql);
        $stmt->execute([$userEmail, $userPassword]);

        return "L'article a bien été créé !";
    }

    public function checkPassword($userEmail, $userPassword)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "SELECT * FROM user WHERE userEmail = ?";
        $stmt= $db->prepare($sql);
        $stmt->execute([$userEmail]);
        $passwordHash = $stmt->fetch();

        $stmt->closeCursor();

        if (password_verify($userPassword, $passwordHash['userPassword'])) {
            return true;
        } else {
            return false;

        }
    }

    public function getPassword($userEmail)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $sql = "SELECT userPassword FROM user WHERE userEmail = ?";
        $stmt= $db->prepare($sql);
        $stmt->execute([$userEmail]);
        $password = $stmt->fetch();

        return $password;
    }
}
