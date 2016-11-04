<?php

/**
 * Class App класс приложения
 */
    class App
	{

        /**
         * @param $params массив составляющих url, на основе которых выбирается класс контроллера,
         * метод и параметры, передаваемые в метод
         */
        public static function start($params){
            $is_controller_exists = false;
            $controller_path = array();
            $index = 0;
            
            do {
                if (isset($params[$index])){
                    $controller_path[] = $params[$index];
                }
                //echo $conf->controllers_dir.implode('/',$controller_path) . '.php'.'<br/>';
                if( file_exists(Config::$controllers_dir.'/'.implode('/',$controller_path) . '.php')){
                    $is_controller_exists = true;
                    break;
                } 
                $index++;
            }while($index <= count($params));
            if($is_controller_exists){
                include Config::$controllers_dir.'/'.implode('/',$controller_path) . '.php';
                $controller_class = ucfirst($params[$index]); 
                $method = (isset($params[$index+1]))? $params[$index+1] : 'index';
                $method_params = array_slice($params, $index+2);
            }else{
                $controller_class = ucfirst(Config::$default_controller);
                include Config::$controllers_dir.'/'.Config::$default_controller_path . Config::$default_controller . '.php';
                $method = 'index';
                $method_params = array();
            }
        
            $controller = new $controller_class();
            $controller->{$method}($method_params);
        }

        /**
         * @return array массив объектов моделей для сущностей
         */
        public static function getModels(){
            $models = array();
            $files = scandir(Config::$entities_dir);
            foreach($files as $file){
                if ($file == '.' || $file == '..') continue;
                $class = substr($file, 0, strpos($file, '.php')) . 'Model';
                $models[] = new $class();
            }
            return $models;
        }
        
  
	}	