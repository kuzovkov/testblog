<?php

/**
 * Class Set класс для хранения имен полей их значений у сущности
 */
    class Set{}

/**
 * Class Model общий класс модели
 */
class Model{
        
        /**
         * schema array('field_name' => 'type')
         * */
        public $schema = null;
        public $set = null;
        public $entity = '';
        protected $em;
        
        public function __construct($entity){
            $this->entity = $entity;
            $df = new DoctrineFactory();
            $this->em = $df->getEntityManager();
            $object = new $this->entity();
            $this->set = new Set();
            foreach($object as $key => $val){
                $this->set->{$key} = null;
            }
        }
        
         /**
          * получение массива объектов представляющих сущность
         * @param order array('field_name'=>'ASC/DESC')
         * */
        public function getlist($order = null){
            $repo = $this->em->getRepository($this->entity);
            $entities = ($order == null)? $repo->findAll() : $repo->findBy(array(),$order);
            return $entities;
        }
        
        
        /**
         * получение массива объектов представляющих сущность с условиями
         * @param select array('field_name'=>'value')
         * @param order array('field_name'=>'ASC/DESC')
         * */
        public function get($select, $order = null){
            $repo = $this->em->getRepository($this->entity);
            $entities = $repo->findBy($select, $order);
            return $entities;
        }
        
        /**
         * получение одного объекта сущности
         * @param select array('field_name'=>'value') условие
         * @param order array('field_name'=>'ASC/DESC') порядок сортировки
         * */
        public function getOne($select, $order = null){
            $repo = $this->em->getRepository($this->entity);
            $entity = $repo->findOneBy($select, $order);
            return $entity;
        }
        
        /**
         * создание нового объекта сущности
         * */
        public function create(){
            if ($this->set != null){
                $entity = new $this->entity();
                foreach($this->set as $key => $val){
                    if (method_exists($entity, 'set' . ucfirst($key))){
                        $entity->{'set' . ucfirst($key)}($val);
                    }
                }
                $this->em->persist($entity);
     			$this->em->flush();
                $id = $entity->getId();
                return $id;
            } 
        }
        
        /**
         * обновление объекта сущности
         * @param select array('field_name'=>'value') условие
         * */
        public function update($select){
            $repo = $this->em->getRepository($this->entity);
            $entity = $repo->findOneBy($select);
            if ($entity){
                foreach($this->set as $key => $val){
                    if (method_exists($entity, 'set' . ucfirst($key))){
                        $entity->{'set' . ucfirst($key)}($val); 
                    }
                }
                $this->em->flush();
            }
        }
        
        /**
         * удаление объекта сущности
         * @param select array('field_name'=>'value') условие
         * */
        public function delete($select){
            $repo = $this->em->getRepository($this->entity);
            $entity = $repo->findOneBy($select);
            if ($entity){
                $this->em->remove($entity);
                $this->em->flush();
            }
        }

        /**
         * @param $sql выполнение произвольного запроса
         * @return \Doctrine\DBAL\Driver\Statement
         * @throws \Doctrine\DBAL\DBALException
         */
        public function query($sql){
            $conn = $this->em->getConnection();
            return $conn->executeQuery($sql);
        }

        /**
         * получение результата запроса в виде массива
         * @param $sql
         * @return array
         * @throws \Doctrine\DBAL\DBALException
         */
        public static function fetchQueryArray($sql){
            $df = new DoctrineFactory();
            $em = $df->getEntityManager();
            $conn = $em->getConnection();
            $res = $conn->executeQuery($sql);
            $arr = array();
            if (get_class($res) == 'Doctrine\DBAL\Driver\PDOStatement'){
                while ($row = $res->fetch()) {
                    $arr[] = $row;
                }
            }
            return $arr;
        }


        public function fetchArray($res){
            $arr = array();
            if (get_class($res) == 'Doctrine\DBAL\Driver\PDOStatement'){
                while ($row = $res->fetch()) {
                    $arr[] = $row;
                }
            }
            return $arr;
        }

        /**
         * получение списка таблиц в БД
         * @return array список таблиц в БД
         */
        public function getTableList(){
            $res = $this->fetchArray($this->query('SHOW tables'));
    		$tables = array();
            foreach($res as $row){
                $arr = array_values($row);
                $tables[] = $arr[0];
    		}
            return $tables;
        }
        
    }