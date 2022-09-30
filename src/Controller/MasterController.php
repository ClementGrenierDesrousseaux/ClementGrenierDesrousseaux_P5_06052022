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
