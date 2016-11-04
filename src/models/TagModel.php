<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.11.16
 * Time: 18:43
 */

/**
 * Class TagModel класс описывающий сущность Tag (тег)
 */
class TagModel extends Model{


     /**
     * @var array массив определяющий показ списка тегов в админке
     */
    public $schema_list = array(
        'id' => array('type'=>'integer','visible'=>true,'name'=>'id'),
        'name' => array('type'=>'string','visible'=>true,'name'=>'Имя Тега'),
    );


    /**
     * @var array массив определяющий создание формы при редактировании и создании тега
     */
    public $schema_edit = array(
        'id' => array('type'=>'integer','visible'=>true,'name'=>'id', 'enabled'=>false),
        'name' => array('type'=>'string','visible'=>true,'name'=>'Имя Тега'),
    );

    public $name = 'Теги';

    function __construct(){
        parent::__construct('Tag');

    }

    /**
     * переопределение метода create 
     */
    public function create(){
        try{
            parent::create();
        }catch(Exception $e){}
    }

    /**
     * переопределение метода update
     */
    public function update($select){
        try{
            parent::update($select);
        }catch(Exception $e){}
    }


}