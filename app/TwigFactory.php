<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';

/**
 * Class TwigFactory создание оюъекта Twig для рендеринга шаблонов
 */
class TwigFactory{
    
    public function getTwig($views_dir = '../src/views'){
        Twig_Autoloader::register(true);
        $loader = new Twig_Loader_Filesystem($views_dir);
        $twig = new Twig_Environment($loader, array('cache' => '../cache', 'charset'=>'utf-8', 'debug'=>true));
        return $twig;

    }
}


