<?php

namespace App\Exceptions;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class NotFoundException extends \Exception
{

    /**
     * @var FilesystemLoader
     */
    private $loader;
    /**
     * @var Environment
     */
    protected $twig;

    public function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->loader = new FilesystemLoader('../templates');

        $this->twig = new Environment($this->loader);
    }

    public function error404()
    {
        $this->twig->display('error/404.html.twig');
    }
}
