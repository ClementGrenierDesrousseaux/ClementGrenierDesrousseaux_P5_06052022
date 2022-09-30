<?php

namespace App\Entity;

use Exception;
use PDO;

class Database
{
    public function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
