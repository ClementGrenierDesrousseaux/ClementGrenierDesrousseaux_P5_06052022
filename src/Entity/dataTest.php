<?php

namespace App\Entity;

use Exception;
use PDO;

class dataTest
{
    public function getDataTest()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        $affichage_test_statement = $db->prepare('SELECT * FROM affichage_test');
        $affichage_test_statement->execute();
        $affichage_test = $affichage_test_statement->fetchAll();

        return $affichage_test;


    }
}
