<?php

namespace App\Controller;

use mysqli;
use PDO;


/**
 *
 */
class BddController extends MasterController
{



    /**
     *
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {

        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_P5;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $mysqli = new mysqli("localhost", "root", "root");
        $version = $mysqli->server_info;

        $affichage_test_statement = $db->prepare('SELECT * FROM affichage_test');
        $affichage_test_statement->execute();
        $affichage_test = $affichage_test_statement->fetchAll();


        $this->twig->display('bdd/index.html.twig', [
            "version" => $version,
            "donnees" => $affichage_test
        ]);
    }
}
