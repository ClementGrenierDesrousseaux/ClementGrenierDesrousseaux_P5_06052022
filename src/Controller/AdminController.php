<?php

namespace App\Controller;

class AdminController extends MasterController
{

    public function testAffichage()
    {







        if(!isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/index.html.twig');
        }
    }
}