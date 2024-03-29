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
        $sessionMail = $_SESSION['email'];

        if(isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
            exit();
        } else {

            if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

                $userEmail = htmlspecialchars($_POST['userEmail']);
                $userPassword = htmlspecialchars($_POST['userPassword']);

                $user = new User();
                $options = [
                    'cost' => 12,
                ];
                $password = password_hash($userPassword, PASSWORD_BCRYPT, $options);
                $user->createUser($userEmail,$password);
            }
            $this->twig->display('register/index.html.twig');

        }
    }
}
