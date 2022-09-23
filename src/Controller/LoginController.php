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
            $test = "A";

            if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

                $user = new User();
                $userIdentified = $user->checkPassword($_POST['userEmail'], $_POST['userPassword']);

                if ($userIdentified) {
                    $test = "TRUE";
                    $_SESSION["email"]=$_POST['userEmail'];
                    header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/admin");
                } else {
                    $test = "FALSE";
                }

                //$user = new User();
                //$test = $user->getPassword($_POST['userEmail']);






            }
            $this->twig->display('login/index.html.twig', [
                'test' => $test
            ]);

        }
    }
}
