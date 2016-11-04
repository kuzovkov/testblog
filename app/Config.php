<?php

/**
 * Class Config переменные конфигурации
 */    
class Config{
        
        public static $controllers_dir = '../src/controllers';
        public static $default_controller = 'common';
        public static $default_controller_path = '';
        public static $entities_dir = '../src/entities';
        public static $models_dir = '../src/models';
        public static $upload_dir = 'upload';
        public static $backup_dir = '../backup';
        public static $templates_dir = 'templates';
        public static $template = 'navbar';
        public static $router_rules = array(
                                            '/addposts' => '/common/addposts',
                                            '/login' => '/common/login',
                                            '/logout' => '/common/logout',
                                            );

        
    }