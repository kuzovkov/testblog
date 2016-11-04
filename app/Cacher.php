<?php

/**
 * Class Cacher Кешер.
 */
class Cacher{
        
        private $cache_time = 60; /*время кееширования*/
        private $cache_dir = '../cached';
        private $cachefile;
        
        public function __construct($time = 60){
            $this->cache_time = $time;
        }
        
        /**
        * проверяем если есть контент в кеше и не просрочен кеш,
        * то отдаем данный из кеша и заканчиваем работу скрипта,
        * иначе включаем буферизацию
        **/
        public function begin(){
            $request = new Request();
            $url = $request->server['HTTP_HOST'] . $request->server['REQUEST_URI'];
            $uri = $request->getUri();
            $uriDir = $this->cache_dir . '/' . md5($uri);
            if (!file_exists($uriDir) || !is_dir($uriDir)){
                if(!mkdir($uriDir)) throw new Exception("class Cacher: Can't make cache directory");
            }
            $cachefile = $uriDir . '/' . md5($uri);
            $this->cachefile = $cachefile;
            if (file_exists($cachefile)) {
                $cachefile_time = filemtime($cachefile);

                if ((time() - $this->cache_time) < $cachefile_time) {
                    readfile($cachefile);
                    exit();
                }
            }
            ob_start();        
        }
        
        /**
        * записываем буфер в файл, отдаем содержимое буфера и очищаем его
        **/
        public function end(){
            $fp = fopen($this->cachefile, 'w');
            fwrite($fp, ob_get_contents());
            fclose($fp);
            ob_end_flush();
        }
        
        /**
        * очистка кеша относящегося к конкретному URI
        **/
        public function clear($uri){
            if (!is_string($uri)) return; 
            $uriDir = $this->cache_dir . '/' . md5($uri);
            if (!file_exists($uriDir) || !is_dir($uriDir)) return false;
            $files = scandir($uriDir);
            if (is_array($files)){
                foreach($files as $file){
                    if ($file == '.' || $file == '..') continue;
                    $fullname = $uriDir . '/' . $file;
                    if(file_exists($fullname)) unlink($fullname);
                }
            }
            return true;
        }
        
        /**
        * очистка всего кеша
        **/
        public function clear_all(){
            if (!file_exists($this->cache_dir) || !is_dir($this->cache_dir)) return false;
            $uriDirs = scandir($this->cache_dir);
            if (is_array($uriDirs)){
                foreach($uriDirs as $dir){
                    if ($dir == '.' || $dir == '..') continue;
                    if (is_dir($this->cache_dir.'/'.$dir)){
                        $files = scandir($this->cache_dir.'/'.$dir);
                        if (is_array($files)){
                            foreach($files as $file){
                                if ($file == '.' || $file == '..') continue;
                                $fullname = $this->cache_dir .'/' . $dir . '/' . $file;
                                if(file_exists($fullname)) unlink($fullname);
                            }
                        }
                    }
                }
            }
        }
    
    }