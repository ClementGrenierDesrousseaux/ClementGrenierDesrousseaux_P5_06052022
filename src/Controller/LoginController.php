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
        if (isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
            exit();
        } else {
            if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {
                $userEmail = htmlspecialchars($_POST['userEmail']);
                $userPassword = htmlspecialchars($_POST['userPassword']);
                $user = new User();
                $isUserIdentified = $user->checkPassword($userEmail, $userPassword);
                if ($isUserIdentified) {
                    $_SESSION["email"] = $_POST['userEmail'];
                    header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
                } else {
                    header("HTTP/1.1 401 Internal Server Error");
                }
            }
            $this->twig->display('login/index.html.twig');
        }
    }
}
