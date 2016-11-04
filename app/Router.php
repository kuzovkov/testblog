<?php

/**
 * Class Router класс роутера
 */
	class Router{

		/**
		 * разбираем входной url на составные части
		 * @return array массив составных частей url
		 */
		public static function route(){
			$uri = $_SERVER['REQUEST_URI'];
			if (strpos($uri,'?') !== false){
				$uri = substr($uri,0,strpos($uri,'?'));
			}
			foreach (Config::$router_rules as $source_uri => $target_uri){
				if ($uri == $source_uri)
					$uri = $target_uri;
			}
			$items = explode('/', $uri);
            $params = array_filter($items, function($item){return (strlen($item) > 0);});
            return array_values($params);
		}
		
	}