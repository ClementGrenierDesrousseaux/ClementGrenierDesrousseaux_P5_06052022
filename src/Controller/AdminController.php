<?php

namespace App\Controller;

class AdminController extends MasterController
{

    public $articles = [
        "article 1" => [
            "Title" => "Premier article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "21/07/2022",
            "id" => "1"
        ],

        "article 2" => [
            "Title" => "Deuxième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "20/07/2022",
            "id" => "2"
        ],

        "article 3" => [
            "Title" => "Troisième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "19/07/2022",
            "id" => "3"
        ],

        "article 4" => [
            "Title" => "Quatrième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "18/07/2022",
            "id" => "4"
        ],

        "article 5" => [
            "Title" => "Cinquième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "17/07/2022",
            "id" => "5"
        ],
        "article 6" => [
            "Title" => "Premier article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "16/07/2022",
            "id" => "6"
        ],

        "article 7" => [
            "Title" => "Deuxième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "15/07/2022",
            "id" => "7"
        ],

        "article 8" => [
            "Title" => "Troisième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "14/07/2022",
            "id" => "8"
        ],

        "article 9" => [
            "Title" => "Quatrième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "13/07/2022",
            "id" => "9"
        ],

        "article 10" => [
            "Title" => "Cinquième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "12/07/2022",
            "id" => "10"
        ],


    ];

    public $article = [
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

    public function adminIndex()
    {
        if (!isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/index.html.twig');
        }
    }

    public function adminArticles()
    {
        if (!isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/articles.html.twig', [
                'articles' => $this->articles
            ]);
        }
    }

    public function adminArticleModify()
    {
        if (!isset($_SESSION['name'])) {
            header("Location: http://localhost/ClementGrenierDesrousseaux_P5_06052022/login");
            exit();
        } else {
            $this->twig->display('admin/articleModify.html.twig', [
                'articles' => $this->article
            ]);
        }
    }
}