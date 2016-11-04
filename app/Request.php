<?php

/**
 * Class Request класс для обертки глобальных массивов PHP
 */	
class Request
	{
		
		public $post = null;
		public $get = null;
		public $server = null;
		public $session = null;
		public $cookie = null;
        public $files = null;
        
		function __construct(){
            $this->server = $_SERVER;
			$this->get = $_GET;
			$this->post = $_POST;
			
			if (isset($_SESSION))
                $this->session = $_SESSION;
                    
            if (isset($_COOKIE))
                $this->cookie = $_COOKIE;
            
            if (isset($_FILES))
                    $this->files = $_FILES;
				
		}
        
        public function getUri(){
            $uri = $_SERVER['REQUEST_URI'];
			if (strpos($uri,'?') !== false){
				$uri = substr($uri,0,strpos($uri,'?'));
			}
            return $uri;
        }
	}