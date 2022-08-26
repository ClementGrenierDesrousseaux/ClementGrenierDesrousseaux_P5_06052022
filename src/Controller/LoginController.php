<?php

namespace App\Controller;

/**
 *
 */
class LoginController extends MasterController
{
    /**
     * Fonction gérant le login
     * @return void
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        if(isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
            exit();
        } else {
            $this->twig->display('login/index.html.twig');
        }
    }
}
