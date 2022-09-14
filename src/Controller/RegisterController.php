<?php

namespace App\Controller;

use App\Entity\User;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class RegisterController extends MasterController
{
    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function index()
    {
        if(isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
            exit();
        } else {

            $this->twig->display('register/index.html.twig');

        }
    }
}
