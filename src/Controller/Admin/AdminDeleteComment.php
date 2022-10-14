<?php

namespace App\Controller\Admin;

use App\Controller\MasterController;
use App\Entity\Comment;

class AdminDeleteComment extends MasterController
{

    public function deleteComment($commentIdentifier)
    {
        $sessionMail = $_SESSION['email'];
        if (!isset($sessionMail)) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            if (isset($_POST["commentDeleted"])) {
                $comment = new Comment();
                $comment->deleteComment($commentIdentifier);
                $this->twig->display('admin/commentDeleted.html.twig');
            }
        }
    }
}