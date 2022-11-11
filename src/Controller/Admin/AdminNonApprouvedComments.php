<?php

namespace App\Controller\Admin;

use App\Entity\Comment;

class AdminNonApprouvedComments extends \App\Controller\MasterController
{
    public function index()
    {
        if (!isset($_SESSION['email'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $comment = new Comment();
            $comments = $comment->getCommentsNonApprouved();
            $this->twig->display('admin/comments.html.twig', [
                'comments' => $comments
            ]);
        }
    }
}
