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
            if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

                $user = new User();
                $options = [
                    'cost' => 12,
                ];
                $password = password_hash($_POST['userPassword'], PASSWORD_BCRYPT, $options);
                $user->createUser($_POST['userEmail'],$password);

            }
            $this->twig->display('register/index.html.twig');

        }
    }
}
