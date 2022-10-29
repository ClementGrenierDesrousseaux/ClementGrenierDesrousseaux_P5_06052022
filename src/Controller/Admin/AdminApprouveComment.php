<?php

namespace App\Controller\Admin;

use App\Entity\Comment;

class AdminApprouveComment extends \App\Controller\MasterController
{

    public function approuveComment($commentIdentifier)
    {
        {
            $sessionMail = $_SESSION['email'];
            if (!isset($sessionMail)) {
                header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
                exit();
            } else {
                if (isset($_POST["commentDeleted"])) {
                    $comment = new Comment();
                    $comment->approuveComment($commentIdentifier);
                    $this->twig->display('admin/commentApprouve.html.twig');
                }
            }
        }
    }
}
