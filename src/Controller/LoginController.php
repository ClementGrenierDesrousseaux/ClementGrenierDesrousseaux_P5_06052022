<?php

namespace App\Controller;

use App\Entity\User;

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
        $sessionMail = $_SESSION['email'];

        if (isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
            exit();
        } else {
            if (isset($userEmail) && isset($userPassword)) {
                $userEmail = $_POST['userEmail'];
                $userPassword = $_POST['userPassword'];
                $user = new User();
                $userIdentified = $user->checkPassword($userEmail, $userPassword);
                if ($userIdentified) {
                    $_SESSION["email"] = $userEmail;
                    header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
                }
            }
            $this->twig->display('login/index.html.twig');
        }
    }
}
