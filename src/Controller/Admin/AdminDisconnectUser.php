<?php

namespace App\Controller\Admin;

class AdminDisconnectUser extends \App\Controller\MasterController
{
    public function index()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            unset($_SESSION['email']);
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
        }
    }
}
