<?php

namespace App\Controller;

class ListArticlesController extends MasterController
{

    public $articles = [
        "article 1" => [
            "Title" => "Premier article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "21/07/2022"
        ],

        "article 2" => [
            "Title" => "Deuxième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "20/07/2022"
        ],

        "article 3" => [
            "Title" => "Troisième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "19/07/2022"
        ],

        "article 4" => [
            "Title" => "Quatrième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "18/07/2022"
        ],

        "article 5" => [
            "Title" => "Cinquième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "17/07/2022"
        ],
        "article 6" => [
            "Title" => "Premier article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "16/07/2022"
        ],

        "article 7" => [
            "Title" => "Deuxième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "15/07/2022"
        ],

        "article 8" => [
            "Title" => "Troisième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "14/07/2022"
        ],

        "article 9" => [
            "Title" => "Quatrième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "13/07/2022"
        ],

        "article 10" => [
            "Title" => "Cinquième article",
            "Description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non auctor enim, vitae sagittis nulla. Cras at dui congue, facilisis sem viverra, fermentum dolor. Nulla facilisi. Integer posuere pretium lorem, ac hendrerit est blandit nec. Morbi vitae nunc ligula. Cras blandit a est eget tempor. Maecenas volutpat eu ex et aliquet. Donec eget tempus tortor. Nulla finibus elementum mauris vel sodales.",
            "Date" => "12/07/2022"
        ],


    ];

    public function index()
    {
        $this->twig->display('listArticles/index.html.twig', [
            "articles" => $this->articles
        ]);
    }
}