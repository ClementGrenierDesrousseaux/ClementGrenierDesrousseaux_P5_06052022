<?php

namespace App\Controller;

class oneArticleController extends MasterController
{

    public $articles = [
        "article" => [
            "Title" => "Premier article",
            "Chapo" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Description" => "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec porta neque. Sed tempor auctor lorem, eget porttitor augue sagittis nec. Donec finibus lectus nec nisi lacinia, ac hendrerit purus vehicula. Mauris massa mauris, euismod pulvinar enim ac, finibus dapibus orci. Phasellus nec congue diam. Vivamus iaculis tortor sapien, non luctus ipsum pharetra eu. Cras in felis quis tellus suscipit lobortis. Quisque consectetur erat sit amet velit ullamcorper, ut iaculis purus consectetur. Praesent in urna ut tellus porta fringilla. Etiam rutrum quis sem ac suscipit. Nam malesuada fermentum pharetra. Donec ultrices euismod placerat. <br><br>

Nam consectetur venenatis rutrum. In in risus ac orci facilisis semper. Mauris vehicula ipsum eget elementum semper. Quisque tempus sapien quis massa gravida semper. Maecenas ultricies justo quis elit accumsan, eu tincidunt nulla hendrerit. Ut eu leo nulla. In vitae ipsum fermentum, rutrum elit porttitor, molestie velit. Pellentesque finibus massa at sem ultrices, eu consectetur tellus hendrerit. Phasellus a ullamcorper libero, eu malesuada lectus. Proin porta finibus erat at aliquam. Nulla elementum mauris sed nulla volutpat, vel volutpat nisl pellentesque. <br><br>

Cras hendrerit convallis ornare. Sed viverra eu nibh vitae blandit. Aliquam erat volutpat. Curabitur pretium elementum sollicitudin. Nullam consectetur faucibus orci auctor ultricies. Donec mi tellus, dignissim vel tortor in, fringilla laoreet magna. Morbi finibus sit amet nulla quis malesuada. Pellentesque quis risus sit amet erat porttitor ultricies egestas at tellus. Integer imperdiet diam non sapien vulputate, vitae venenatis arcu tempus. Pellentesque sagittis orci ac dolor accumsan, sed malesuada dui sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.  ",
            "Date" => "21/07/2022",
            "Author" => "Clément Grenier--Desrousseaux"
        ],
    ];

    public $comments = [
        "comment 1" => [
            "Author" => "Clément Grenier--Desrousseaux",
            "Description" => "Super premier article !!",
            "Date" => "21/07/2022"
        ],
        "comment 2" => [
            "Author" => "Arthur",
            "Description" => "J'ai adoré cet article :)",
            "Date" => "21/07/2022"
        ],
        "comment 3" => [
            "Author" => "Soizic",
            "Description" => "Très interessant",
            "Date" => "21/07/2022"
        ],
        "comment 4" => [
            "Author" => "Adrien",
            "Description" => "Super bien expliqué, en tant que débutant j'ai tout compris !",
            "Date" => "21/07/2022"
        ],
        "comment 5" => [
            "Author" => "Corentin",
            "Description" => "Continue comme ça !",
            "Date" => "21/07/2022"
        ],
    ];

    public function index()
    {
        $this->twig->display('oneArticle/index.html.twig', [
            "articles" => $this->articles,
            "comments" => $this->comments
        ]);
    }
}