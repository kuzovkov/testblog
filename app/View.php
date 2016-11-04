<?php

/**
 * Class View для рендеринга шаблонов (обертка для Twig)
 */
class View{
    private static $twig = null;
    
    public static function render($template, $data){
        if (self::$twig == null){
            $tf = new TwigFactory();
            self::$twig = $tf->getTwig('../src/views/'.Config::$templates_dir.'/'.Config::$template);
        }
        return self::$twig->render($template, $data);
    }
    
}