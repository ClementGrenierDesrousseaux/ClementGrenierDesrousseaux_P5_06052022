<?php

namespace App\Controller;

use App\Entity\ContactMessage;

class contactForm extends MasterController
{

    public function index()
    {
        if (isset($_POST['contactUserEmail']) && isset($_POST['contactUserName']) && isset($_POST['contactUserContent'])) {
            $contactUserEmail = $_POST['contactUserEmail'];
            $contactUserName = $_POST['contactUserName'];
            $contactUserContent = $_POST['contactUserContent'];

            $contactMessage = new ContactMessage();
            $contactMessage->postContactMessage($contactUserEmail, $contactUserName, $contactUserContent);
        }

        $this->twig->display('contact/index.html.twig');
    }

}
