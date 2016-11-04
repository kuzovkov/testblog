<?php

/**
 * настройка автозагрузки классов
 */

    function core_autoloader($class) {
        $file = '../app/' . $class . '.php';
        if (file_exists($file))include $file;
    }
    
    function controller_autoloader($class) {
        $file = '../src/controllers/' . $class . '.php';
        if (file_exists($file))include $file;
    }
    
    function entities_autoloader($class){
        $file = '../src/entities/' . $class . '.php';
        if (file_exists($file))include $file;
    }
    
    function models_autoloader($class){
        $file = '../src/models/' . $class . '.php';
        if (file_exists($file))include $file;
    }

    function libs_autoloader($class){
        $file = '../lib/' . $class . '.php';
        if (file_exists($file))include $file;
    }
    
    
    
    spl_autoload_register('core_autoloader');
    spl_autoload_register('controller_autoloader');
    spl_autoload_register('entities_autoloader');
    spl_autoload_register('models_autoloader');
    spl_autoload_register('libs_autoloader');
