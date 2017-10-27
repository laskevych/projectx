<?php

class CoreAdmin
{
    public $view = '';
    public function __construct()
    {

        $path_twig = '../lib/Twig/Autoloader.php';
        $path_twig_loader = '../admin/theme/html';
        require_once $path_twig;
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem($path_twig_loader);
        $twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true
        ));
        $this->view = $twig;
    }
}

/*class CoreAdmin
{
    public $view = '';
    public function __construct()
    {
        require_once '../lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('theme/html');
        $twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true
        ));
        $this->view = $twig;
    }
}*/
