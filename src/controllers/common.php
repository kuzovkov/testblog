<?php

/**
 * Class Common контроллер для обработки запросов неавторизованных пользователей
 */
	class Common extends Controller{
	   
        private $data = array();
        
        public function __construct(){
            parent::__construct();
            header("Content-Type: text/html; charset=utf8");
            //$this->data['login'] = Auth::getLogin();
            $this->data['templates'] = Config::$templates_dir.'/'.Config::$template;
            //echo $this->login; exit();
        }
        
        public function index($params){
            $this->loadModel('Post');
            $posts = $this->model->Post->getPosts();
            $this->data['posts'] = $posts;
            $this->data['upload_dir'] = Config::$upload_dir;
            echo $this->view->render('index.html', array('data' => $this->data));
    	}

        /**
         * метод добавления статей
         * @param $params массив параметров предаваемых в url
         */
        public function addposts($params){
            $req = new Request();
            if ($req->server['REQUEST_METHOD'] == 'POST'){
                $start = (isset($params[0]) && is_numeric($params[0]))? intval($params[0]) : 0;
                $this->loadModel('Post');
                $posts = $this->model->Post->getPosts($start);
                $this->data['posts'] = $posts;
                $this->data['upload_dir'] = Config::$upload_dir;
                echo $this->view->render('posts.html', array('data' => $this->data));
            }
        }

        /**
         * вход в админку
         * @param $params массив параметров предаваемых в url
         */
        public function login($params){
            $req = new Request();
            if($req->server['REQUEST_METHOD'] == 'POST'){
                $login = $req->post['login'];
                $pass = $req->post['pass'];
                Auth::login($login, $pass);
                if (Auth::isAuth('admin')){
                    header("Location: /admin");
                }else if (Auth::isAuth('user')){
                    header("Location: /");
                }else{
                    $this->data['errmsg'] = 'bad credintials';
                    echo $this->view->render('auth/login.html', array('data'=>$this->data));
                }
                exit();
            }else{
                $cacher = new Cacher();
                $cacher->clear('/');
                if (Auth::isAuth('admin')){
                    header("Location: /admin");
                    exit();
                }
                //header("Content-Type: text/html; charset=utf8");
                echo $this->view->render('auth/login.html', array('data'=>$this->data));
            }
        }


        /**
         * выход из админки
         * @param $params массив параметров предаваемых в url
         */
        public function logout($params){
            Auth::logout();
            $cacher = new Cacher();
            $cacher->clear('/');
            //header("Content-Type: text/html; charset=utf8");
            header("Location: /");
            exit();
        }
        
 }