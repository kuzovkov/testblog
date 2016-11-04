<?php
    
    class UserModel extends Model{

        /**
         * @var array массив определяющий показ списка пользователей в админке
         */
        public $schema_list = array(
            'id' => array('type'=>'integer','visible'=>true,'name'=>'id'),
            'login' => array('type'=>'string','visible'=>true,'name'=>'Логин'),
            'email' => array('type'=>'string','visible'=>true,'name'=>'Email'),
            'hash' => array('type'=>'string','visible'=>false,'name'=>'Хеш пароля'),
            'role' => array('type'=>'array','visible'=>true,'name'=>'Роли'),
            'created' => array('type'=>'datetime','visible'=>true,'name'=>'Создан'),
            'lastlogin' => array('type'=>'datetime','visible'=>true,'name'=>'Последний вход'),

        );

        /**
         * @var array массив определяющий создание формы при редактировании и создании пользователя
         */
        public $schema_edit = array(
            'id' => array('type'=>'integer','visible'=>true,'name'=>'id', 'enabled'=>false),
            'login' => array('type'=>'text','visible'=>true,'name'=>'Логин', 'enabled'=>true, 'required'=>true, 'placeholder'=>'Login'),
            'email' => array('type'=>'text','visible'=>true,'name'=>'Email', 'enabled'=>true, 'required'=>true, 'class'=>'email', 'placeholder'=>'Email'),
            'pass' => array('type'=>'text','visible'=>true,'name'=>'Пароль', 'enabled'=>true, 'placeholder'=>'Введите новый для изменения'),
            'role' => array('type'=>'multiselect','visible'=>true,'name'=>'Роли', 'enabled'=>true, 'options'=>array('admin','user','moderator')),
            'created' => array('type'=>'datetime','visible'=>true,'name'=>'Создан', 'enabled'=>false),
            'lastlogin' => array('type'=>'datetime','visible'=>true,'name'=>'Последний вход', 'enabled'=>false),

        );
        
        
        public $name = 'Пользователи';
        
        function __construct(){
            parent::__construct('User');
            
        }

        /**
         * переопределение метода create
         */
        public function create(){
            $this->set->hash = Auth::makeHash($this->set->pass);
            $this->set->created = new DateTime();
            $this->set->lastlogin = new DateTime();
            parent::create();
        }

        /**
         * переопределение метода update
         */
        public function update($select){
            if($this->set->pass != '') $this->set->hash = Auth::makeHash($this->set->pass);
            parent::update($select);
        }

        /**
         * получение объекта User по логину
         * @param $login
         * @return mixed
         */
        public function getByLogin($login){
            $users =  parent::get(array('login'=>$login));
            return $users[0];
        }
    }