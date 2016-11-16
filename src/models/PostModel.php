<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.11.16
 * Time: 18:42
 */

/**
 * Class PostModel класс описывающий сущности Post (статья)
 */
class PostModel extends Model{

    /**
     * @var array массив определяющий показ списка статей в админке
     */
    public $schema_list = array(
        'id' => array('type'=>'integer','visible'=>true,'name'=>'id'),
        'title' => array('type'=>'string','visible'=>true,'name'=>'Заголовок'),
        'body' => array('type'=>'text','visible'=>true,'name'=>'Текст'),
        'img' => array('type'=>'img','visible'=>true,'name'=>'Изображение'),
        'tags' => array('type'=>'object_array','visible'=>true,'name'=>'Тэги'),
        'updated_at' => array('type'=>'date','visible'=>true,'name'=>'Создано/Обновлено'),

    );

    /**
     * @var array массив определяющий создание формы при редактировании и создании статьи
     */
    public $schema_edit = array(
        'id' => array('type'=>'integer','visible'=>true,'name'=>'id','enabled'=>false),
        'title' => array('type'=>'string','visible'=>true,'name'=>'Заголовок'),
        'body' => array('type'=>'text','visible'=>true,'name'=>'Текст', 'class'=>'html'),
        'img' => array('type'=>'img','visible'=>true,'name'=>'Изображение'),
        'tags' => array('type'=>'object_array','visible'=>true,'name'=>'Теги'),
        'updated_at' => array('type'=>'datetime','visible'=>true,'name'=>'Создано/Обновлено', 'class'=>'datetime'),
    );



    public $name = 'Статьи';

    private $post_per_page = 5; /*постов на странице*/

    function __construct(){
        parent::__construct('Post');
        $now = date('Y/m/d', time());
        $this->schema_edit['updated_at']['default'] = $now;

    }

    /**
     * получение массива объектов тегов
     */
    public function getObjects(){
        $tagModel = new TagModel();
        return $tagModel->getlist();
    }

    /**
     * Добавление тега
     * @param $post_id Id статьи
     * @param  $tag_id Id тега
     */
    public function addTag($post_id, $tag_id){
        $tag = $this->em->find('Tag', $tag_id);
        $post = $this->em->find('Post', $post_id);
        $post->addTag($tag);
        $this->em->flush();
    }

    /**
     * Удаление тега
     * @param $post_id Id статьи
     * @param  $tag_id Id тега
     */
    public function removeTag($post_id, $tag_id){
        $post = $this->em->find('Post', $post_id);
        $post->removeTagById($tag_id);
        $this->em->flush();
    }

    /**
     * переопределяем метод create
     */
    public function create(){
        if ($this->set != null){
            $entity = new $this->entity();
            foreach($this->set as $key => $val){
                if ($key == 'tags') continue;
                if (method_exists($entity, 'set' . ucfirst($key))){
                    $entity->{'set' . ucfirst($key)}($val);
                }
            }
            $this->em->persist($entity);
            $this->em->flush();
            $post_id = $entity->getId();
            $tag_ids = explode(',', $this->set->tags);
            foreach($tag_ids as $tag_id){
                $this->addTag($post_id, $tag_id);
            }
        }
    }

    /**
     * получение заданного количества постов
     * @param $start начальный offset
     */
    public function getPosts($start = 0){
        $repo = $this->em->getRepository('Post');
        $posts = $repo->findBy(array(), array('updated_at' => 'DESC', 'title' => 'ASC'), $this->post_per_page, $start);
        return $posts;
    }




}