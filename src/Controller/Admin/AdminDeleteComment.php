<?php

namespace App\Controller\Admin;

use App\Controller\MasterController;
use App\Entity\Comment;

class AdminDeleteComment extends MasterController
{

    public function deleteComment($commentIdentifier)
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            if (isset($_POST["commentDeleted"])) {
                $comment = new Comment();
                $comment->deleteComment($commentIdentifier);
                header("Location: /ClementGrenierDesrousseaux_P5_06052022/admin/commentaires");
            }
        }
    }
}
