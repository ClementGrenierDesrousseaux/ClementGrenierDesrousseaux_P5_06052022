<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 *
 */
abstract class MasterController
{
    /**
     * @var \string[][]
     */
    public $articles = [
        "article 1" => [
            "Title" => "Design System : Composez plus vite que la lumiere",
            "Description" => "Depuis déjà quelques années, la transformation digitale a bousculé nos modes de vie comme a pu le faire la révolution industrielle à l’époque. En effet, le digital étant omniprésent dans notre quotidien, il est normal que les entreprises prennent conscience qu’elles doivent être plus rapides et plus performantes dans leurs itérations produit afin d’augmenter leur retour sur investissement.",
            "Date" => "23/07/2022",
            "id" => "1"
        ],

        "article 2" => [
            "Title" => "Keyboards : et toi comment tu tapes ?",
            "Description" => "Aujourd’hui on va parler d’un outil que vous utilisez tous les jours, qui est devenu incontournable dans nos sociétés numériques mais très sous-estimé : le clavier.
Qu’est-ce qu’un clavier ?",
            "Date" => "22/07/2022",
            "id" => "2"
        ],

        "article 3" => [
            "Title" => "Testez votre code SQL avec dbt",
            "Description" => "dbt (Data Build Tool) est un outil qui permet de transformer les données directement dans un data warehouse de manière efficace. Il ne permet pas d'extraire ou de charger des données, mais il est utile pour transformer les données déjà chargées dans votre entrepôt de données, il est donc le T dans l’approche ELT (Extract - Load - Transform).",
            "Date" => "21/07/2022",
            "id" => "3"
        ],

        "article 4" => [
            "Title" => "Rancher Desktop, une alternative à Docker Desktop ?",
            "Description" => "Des alternatives existent-elles à Docker Desktop ? La réponse ? Oui il y en a quelques unes ! On peut citer notamment Podman, Colima, Minikube ou encore Rancher Desktop. Aujourd’hui, je vous propose de découvrir Rancher Desktop !",
            "Date" => "20/07/2022",
            "id" => "4"
        ],

        "article 5" => [
            "Title" => "Valider des données avec Vavr",
            "Description" => "La validation de données est importante dans une application. Ses avantages : maîtriser au plus tôt les données, mieux gérer les erreurs, ou encore éviter d’engorger le serveur avec des requêtes qui ne pourront pas aboutir…",
            "Date" => "19/07/2022",
            "id" => "5"
        ],


    ];

    /**
     * @var \string[][]
     */
    public $oneArticle = [
        "article" => [
            "Title" => "Keyboards : et toi comment tu tapes ?",
            "Chapo" => "Aujourd’hui on va parler d’un outil que vous utilisez tous les jours, qui est devenu incontournable dans nos sociétés numériques mais très sous-estimé : le clavier.
Qu’est-ce qu’un clavier ?",
            "Description" => "Commençons par un rappel historique et technique.

Le clavier est une interface humain-machine qui permet la saisie de caractères avec une ou plusieurs touches correspondant à des lettres, symboles ou actions.

    Les premiers claviers sont apparus comme moyen de faciliter l’écriture, ce sont les premières machines à écrire au 18eme et 19eme siècles. (premier brevet 1714 Henry Mill — Angleterre)
    Lorsque les premiers ordinateurs arrivent, la saisie de texte devient très vite un des usages principaux pour interagir avec les systèmes d’exploitation alors en ligne de commande (vers 1960). On réemploie alors le principe existant du clavier des machines à écrire.
    Fin des années 70 les fabricants commencent à décliner les claviers en fonction des langues des zones géographiques.
    Dans les années 80 le Personal Computer commence à envahir les bureaux et les habitations.

Mais alors comment ça marche un clavier ?

En principe c’est très simple, on presse une ou plusieurs touches et le clavier envoie un signal à l’ordinateur pour lui dire ce qu’il doit faire.

Simple n’est-ce pas ? A un détail près, un clavier classique c’est 104 touches pour la norme ANSI-INCITS 154–1988, utilisée principalement aux Etats-Unis, ou 105 touches pour la norme ISO/IEC 9995–2 (initié par l’AFNOR en 1984) et surtout un interrupteur par touche.",
            "Date" => "21/07/2022",
            "Author" => "Clément Grenier--Desrousseaux"
        ],
    ];

    /**
     * @var \string[][]
     */
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


    /**
     * @var FilesystemLoader
     */
    private $loader;
    /**
     * @var Environment
     */
    protected $twig;

    /**
     * Configure TWIG
     */
    public function __construct()
    {
        $this->loader = new FilesystemLoader('../templates');

        $this->twig = new Environment($this->loader);
    }
}
