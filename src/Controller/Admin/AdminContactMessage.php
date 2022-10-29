<?php

namespace App\Controller\Admin;

use App\Controller\MasterController;
use App\Entity\ContactMessage;

class AdminContactMessage extends MasterController
{

    public function index()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $contactMessageObject = new ContactMessage();
            $contactMessage = $contactMessageObject->getContactMessage();

            $this->twig->display('admin/contactMessage.html.twig', [
                'contactMessage' => $contactMessage
            ]);
        }
    }
}
