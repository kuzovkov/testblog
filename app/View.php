<?php

/**
 * Class View для рендеринга шаблонов (обертка для Twig)
 */
class View{
    private static $twig = null;
    
    public function __construct($templates_dir){
        if (self::$twig == null){
            $tf = new TwigFactory();
            self::$twig = $tf->getTwig($templates_dir);
        }
    }

    public function render($template, $data){
        return self::$twig->render($template, $data);
    }
    
}