<?php

namespace App\Controller;

use App\Entity\dataTest;
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
        $affichage_test = new dataTest();
        $data = $affichage_test->getDataTest();
        $this->twig->display('bdd/index.html.twig', [
            "donnees" => $data
        ]);
    }
}
