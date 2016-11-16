<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 16.11.16
 * Time: 21:33
 */

class Mod{}

class Controller{
    
    protected $view = null;
    protected $model = null;
    
    public function __construct(){
        $this->view = new View('../src/views/'.Config::$templates_dir.'/'.Config::$template);
        $this->model = new Mod();
    }

    public function loadModel($name){
        $modelClassName = $name . 'Model';
        $this->model->{$name} = null;
        $this->model->{$name} = new $modelClassName();
    }

}