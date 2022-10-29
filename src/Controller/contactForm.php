<?php

namespace App\Controller;

use App\Entity\ContactMessage;

class contactForm extends MasterController
{

    public function index()
    {
        if (isset($_POST['contactUserEmail']) && isset($_POST['contactUserName']) && isset($_POST['contactUserContent'])) {
            $contactUserEmail = htmlspecialchars($_POST['contactUserEmail']);
            $contactUserName = htmlspecialchars($_POST['contactUserName']);
            $contactUserContent = htmlspecialchars($_POST['contactUserContent']);

            $contactMessage = new ContactMessage();
            $contactMessage->postContactMessage($contactUserEmail, $contactUserName, $contactUserContent);
        }

        $this->twig->display('contact/index.html.twig');
    }

}
