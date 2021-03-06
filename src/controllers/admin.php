<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.11.16
 * Time: 18:01
 */

/**
 * Class Admin контроллер обработки запросов в админку
 */
class Admin extends Controller{

    private $field_name = 'pictures';

    public function __construct(){
        parent::__construct();
        if (!Auth::isAuth('admin')){
            header("Location: /");
            exit();
        }
        header("Content-Type: text/html; charset=utf8");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Expires: " . date("r"));
        $this->data['login'] = Auth::getLogin();
        $this->data['templates'] = Config::$templates_dir.'/'.Config::$template;
        $this->data['upload_dir'] = Config::$upload_dir;
    }


    public function index($params){
        $models = App::getModels();
        $this->data['models'] = $models;
        echo $this->view->render('admin/index.html', array('data'=>$this->data));

    }


    /**
     * показ списка объектов сущности
     * */
    public function showlist($params){
        if (isset($params[0]) && file_exists(Config::$entities_dir.'/'.$params[0].'.php')){
            $entity = $params[0];
            $this->loadModel($entity);
            if (isset($params[1]) && array_key_exists($params[1],$this->model->{$entity}->schema_list)){
                $order = (isset($params[2]) && in_array($params[2], array('ASC','DESC')))? $params[2] : 'ASC';
                $list = $this->model->{$entity}->getlist(array($params[1]=>$order));
                $this->data['order'] = ($order == 'ASC')? 'DESC' : 'ASC';

            }else
            {
                $list = $this->model->{$entity}->getlist();
            }
            $this->data['list'] = $list;
            $this->data['model'] = $this->model->{$entity};
            echo $this->view->render('admin/crud/list.html', array('data' => $this->data));
        }else{

        }
    }

    /**
     * создание объекта сущности
     * */
    public function create($params){
        if (isset($params[0]) && file_exists(Config::$entities_dir.'/'.$params[0].'.php')){
            $entity = $params[0];
            $this->loadModel($entity);
            $req = new Request();
            if ($req->server['REQUEST_METHOD'] == 'GET'){
                $this->data['model'] = $this->model->{$entity};
            }else if ($req->server['REQUEST_METHOD'] == 'POST'){
                //print_r($req->post); exit();
                foreach($req->post as $key => $val){
                    if (array_key_exists($key, $this->model->{$entity}->schema_edit)){
                        $this->model->{$entity}->set->{$key} = $val;
                    }
                }
                //print_r($model->set);exit();
                $this->model->{$entity}->create();
                header("Location: /admin/showlist/".$entity);
            }
            $this->data['action'] = 'create';
            echo $this->view->render('admin/crud/edit.html', array('data' => $this->data));
        }else{
            header("Location: /admin");
        }
    }

    /**
     * редактирование объекта сущности
     * */
    public function edit($params){
        if (isset($params[0]) && file_exists(Config::$entities_dir.'/'.$params[0].'.php') && isset($params[1])){
            $entity = $params[0];
            $this->loadModel($entity);
            $id = intval($params[1]);
            $req = new Request();
            if ($req->server['REQUEST_METHOD'] == 'GET'){
                 $object = $this->model->{$entity}->getOne(array('id'=>$id));
                 $this->data['model'] = $this->model->{$entity};
                 $this->data['object'] = $object;
                 $this->data['action'] = 'edit';
            }else if ($req->server['REQUEST_METHOD'] == 'POST'){
                foreach($req->post as $key => $val){
                    if (array_key_exists($key, $this->model->{$entity}->schema_edit)){
                        $this->model->{$entity}->set->{$key} = $val;
                    }
                }
                $this->model->{$entity}->update(array('id'=>$id));
                header("Location: /admin/showlist/".$params[0]);
            }
            echo $this->view->render('admin/crud/edit.html', array('data' => $this->data));
        }else{
            header("Location: /admin");
        }
    }


    /**
     * удаление объекта сущности
     * */
    public function delete($params){
        if (isset($params[0]) && is_string($params[0])){
            $entity = $params[0];
            if (isset($params[1]) && is_numeric($params[1])){
                $id = intval($params[1]);
                $this->loadModel($entity);
                try{
                    $this->model->{$entity}->delete(array('id'=>$id));
                }catch(Exception $ex){
                    header("Location: /admin/showlist/".$entity);
                }
            }
        }
        header("Location: /admin/showlist/".$entity);
    }


    public function imgs($params){
        echo $this->view->render('admin/upload.html', array('data'=>$this->data));

    }

    /**
     * Загрузка изображений
     */
    public function upload(){
        $req = new Request();
        if ($req->server['REQUEST_METHOD'] == 'GET'){
            $this->data['upload_url'] = '/admin/upload';
            $this->data['field_name'] = $this->field_name;
            echo $this->view->render('admin/upload.html',array('data'=>$this->data));
        }elseif($req->server['REQUEST_METHOD'] == 'POST'){
            //file_put_contents('post_data.txt', print_r($req->server));exit();
            if (!file_exists(Config::$upload_dir) || !is_dir(Config::$upload_dir)){
                if (!mkdir(Config::$upload_dir)) {
                    http_response_code(500);
                    return false;
                }
            }

            if (isset($req->files[$this->field_name])){

                if ($req->files[$this->field_name]['error'] == 0){
                    $original_name = $req->files[$this->field_name]['name'];
                    $tmp_name = $req->files[$this->field_name]['tmp_name'];
                    $name = $original_name;
                    $name = $this->base64_encode_ext($original_name) . substr($original_name, strrpos($original_name,'.'));
                    $decoded = base64_decode(file_get_contents($tmp_name));
                    file_put_contents($tmp_name, $decoded);
                    $size = filesize($tmp_name);
                    $type = $req->files[$this->field_name]['type'];
                    if(move_uploaded_file($tmp_name, Config::$upload_dir.'/'.$name)){
                        echo round($size/1024) . ' Kb saved';
                        if (isset($req->post['makethumb'])){
                            $percent = intval($req->post['percent']);
                            $thumb_name = 'thumb_'.$percent.'_'.$name;
                            echo ($this->makeThumbnailScale(Config::$upload_dir.'/'.$name, Config::$upload_dir.'/'.$thumb_name, $type, $percent))? ' ;thumb: OK' : ' ;thumb: Fail';
                        }
                        return true;
                    }else{
                        http_response_code(500);
                        return false;
                    }
                }
            }
        }
        http_response_code(500);
        return false;
    }

    /**
     * Загрузка изображений 2 вариант
     */
    public function upload2()
    {
        $req = new Request();
        if ($req->server['REQUEST_METHOD'] == 'GET') {
            $this->data['upload_url'] = '/admin/upload2';
            $this->data['field_name'] = $this->field_name;
            echo $this->view->render('admin/upload2.html', array('data' => $this->data));
        } elseif ($req->server['REQUEST_METHOD'] == 'POST') {
            $file_field = $this->field_name;
            //print_r($_FILES); exit();
            if (isset($_FILES[$file_field])) {
                $files = $_FILES[$file_field];
                if (isset($files['error'])) {
                    foreach ($files['error'] as $index => $error) {
                        if ($error == 0) {
                            if (strpos($files['type'][$index], 'image') === 0) {
                                $tmp_name = $files['tmp_name'][$index];
                                $original_name = $files['name'][$index];
                                $name = $this->base64_encode_ext($original_name) . substr($original_name, strrpos($original_name,'.'));
                                move_uploaded_file($tmp_name, $req->server['DOCUMENT_ROOT'] . '/' . Config::$upload_dir. '/' . $name);
                            }
                        }
                    }
                }
            }

            header('Location: /admin/upload2');
        }
    }

    /**
     * кодирование данных
     * @param $str
     * @return mixed|string
     */
    private function base64_encode_ext($str){
        $result = base64_encode($str);
        $result = str_replace('+','-',$result);
        $result = str_replace('/','_',$result);
        return $result;
    }

    /**
     * декодирование данных
     * @param $str
     * @return mixed|string
     */
    private function base64_decode_ext($str){
        $result = str_replace('-','+',$str);
        $result = str_replace('_','/',$result);
        $result = base64_decode($result);
        return $result;
    }

    /**
     * преобразование закодированного имени в оригинальное
     * @param $name
     * @return mixed|string
     */
    public function name2original_name($name){
        return $this->base64_decode_ext(substr($name, 0, strrpos($name, '.')));
    }

    /**
     * очистка кеша
     */
    public function cc($params){
        $cacher = new Cacher();
        $cacher->clear_all();
    }


    /**
     *  Make thumbnail for image
     * @param string $imgBig Filename big image
     * @param string $imgSmall Filename small image
     * @param string $type MIME-Type of image file
     * @param int $size Width of small image
     * @param bool $side Size is width or height
     * @return bool true if Ok or false if fail
     **/
    private function makeThumbnailScale( $imgBig, $imgSmall, $type, $percent )
    {
        list($width, $height) = getimagesize($imgBig);
        $newwidth = round($width * $percent/100);
        $newheight = round($height * $percent/100);
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if ( $type == 'image/jpeg' ){
            $source = imagecreatefromjpeg($imgBig);
        }
        elseif ( $type == 'image/gif' ){
            $source = imagecreatefromgif($imgBig);
        }
        elseif ( $type == 'image/png' ){
            $source = imagecreatefrompng($imgBig);
        }
        else return false;
        if ( imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height))
        {
            if ( $type == 'image/jpeg' ){
                imagejpeg($thumb,$imgSmall);
            }
            elseif ( $type == 'image/gif' ){
                imagegif($thumb,$imgSmall);
            }
            elseif ( $type == 'image/png' ){
                imagepng($thumb,$imgSmall);
            }
            return true;
        }
        return false;
    }//end func

    /**
     *  Make thumbnail for image
     * @param string $imgBig Filename big image
     * @param string $imgSmall Filename small image
     * @param string $type MIME-Type of image file
     * @param int $size Width of small image
     * @param bool $side Size is width or height
     * @return bool true if Ok or false if fail
     **/
    private function makeThumbnailSize( $imgBig, $imgSmall, $type, $size, $side = true )
    {
        list($width, $height) = getimagesize($imgBig);
        $percent = ( $side )? $size / $width : $size / $height;
        $newwidth = $width * $percent;
        $newheight = $height * $percent;
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if ( $type == 'image/jpeg' ){
            $source = imagecreatefromjpeg($imgBig);
        }
        elseif ( $type == 'image/gif' ){
            $source = imagecreatefromgif($imgBig);
        }
        elseif ( $type == 'image/png' ){
            $source = imagecreatefrompng($imgBig);
        }
        else return false;
        if ( imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height))
        {
            if ( $type == 'image/jpeg' ){
                imagejpeg($thumb,$imgSmall);
            }
            elseif ( $type == 'image/gif' ){
                imagegif($thumb,$imgSmall);
            }
            elseif ( $type == 'image/png' ){
                imagepng($thumb,$imgSmall);
            }
        }
    }//end func

    /**
     * вывод изображений
     */
    public function imglist(){
        $files = scandir(Config::$upload_dir);
        $images = array();
        if (is_array($files) && count($files)){
            foreach($files as $file){
                if ($file == '.' || $file == '..' || strpos($file, 'thumb') === 0 || $file == 'default.png') continue;
                $images[] = array('name'=>$file, 'origin_name'=>$this->name2original_name($file));
            }
        }
        echo $this->view->render('admin/crud/img_list.html', array('upload_dir'=>Config::$upload_dir, 'images'=>$images));
    }

    /**
     * вывод изображений для выбора
     */
    public function imglist_select(){
        $files = scandir(Config::$upload_dir);
        $images = array();
        if (is_array($files) && count($files)){
            foreach($files as $file){
                if ($file == '.' || $file == '..' || strpos($file, 'thumb') === 0 || $file == 'default.png') continue;
                $images[] = array('name'=>$file, 'origin_name'=>$this->name2original_name($file));
            }
        }
        echo $this->view->render('admin/crud/img_list_select.html', array('upload_dir'=>Config::$upload_dir, 'images'=>$images));
    }

    /**
     * удаление изображений
     * @param $params массив параметров
     */
    public function delimages($params){
        foreach($_POST as $name => $val){
            $name = trim(str_replace('_','.',$name));
            $fullname = $_SERVER['DOCUMENT_ROOT'] . '/' . Config::$upload_dir . '/' . $name;
            //echo $fullname;
            if (file_exists($fullname)) unlink($fullname);
            if (file_exists('thumb_' . $fullname)) unlink('thumb_' . $fullname);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    /**
     * добавление тега к статье
     * @param $params массив параметров
     */
    public function addtag($params){
        if (isset($params[0]) && is_numeric($params[0])){
            $post_id = intval($params[0]);
            if (isset($params[1]) && is_numeric($params[1])){
                $tag_id = intval($params[1]);
                $this->loadModel('Post');
                $this->model->Post->addTag($post_id, $tag_id);
                echo $post_id, $tag_id;
            }
        }
    }

    /**
     * удаление тега у статьи
     * @param $params массив параметров
     */
    public function removetag($params){
        if (isset($params[0]) && is_numeric($params[0])){
            $post_id = intval($params[0]);
            if (isset($params[1]) && is_numeric($params[1])){
                $tag_id = intval($params[1]);
                $this->loadModel('Post');
                $this->model->Post->removeTag($post_id, $tag_id);
                echo $post_id, $tag_id;
            }
        }
    }

    /**
     * вывод актуального состояния тегов
     * @param $params массив параметров
     */
    public function showtags($params){
        if (isset($params[0]) && is_numeric($params[0])){
            $post_id = intval($params[0]);
            $this->loadModel('Post');
            $post = $this->model->Post->getOne(array('id' => $post_id));
            $post_tags = $post->getTags();
            $data = array('model' => $this->model->Post);
            echo $this->view->render('admin/crud/objects.html', array('data' => $data, 'value' => $post_tags));
        }
    }

    /**
     * возвращает дамп БД
     * @param $params массив параметров
     */
    public function backup($params){
        $req = new Request();
        $dump_name = $req->server['SERVER_NAME'] . '.dump.sql';
        ob_start();
        $h_temp = tmpfile();
        $tmp_file_metadata = stream_get_meta_data($h_temp);
        $tmp_file_name = $tmp_file_metadata['uri'];
        //tmp_file_name;
        $df = new DoctrineFactory();
        $db_name = $df->getDbname();
        $db_user = $df->getUser();
        $db_pass = $df->getPassword();
        $comm = 'mysqldump -u' . $db_user . ' -p' . $db_pass . ' --opt --databases ' . $db_name . ' > ' . $tmp_file_name;
        //echo $comm;
        system($comm);
        header('Content-Disposition: attachment; filename=' . basename($dump_name));
        header('Content-Length: ' . filesize($tmp_file_name));
        header('Keep-Alive: timeout=5; max=100');
        header('Connection: Keep-Alive');
        header('Content-Type: application/octet-stream');
        ob_end_clean();
        readfile($tmp_file_name);
        }

    /**
     * заливка дампа в БД
     * @param $params массив параметров
     */
    public function recovery($params){
        $req = new Request();
        $df = new DoctrineFactory();
        $db_name = $df->getDbname();
        $db_user = $df->getUser();
        $db_pass = $df->getPassword();
        if ($req->server['REQUEST_METHOD'] == 'GET'){
            $this->data['upload_url'] = '/admin/recovery';
            $this->data['field_name'] = 'db_dump';
            $this->data['db_name'] = $db_name;
            echo $this->view->render('admin/upload_dump.html',array('data'=>$this->data));
        }elseif($req->server['REQUEST_METHOD'] == 'POST'){
            if (isset($_FILES['db_dump']['tmp_name']) && file_exists($_FILES['db_dump']['tmp_name'])){
                ob_start();
                $dump_name = $_FILES['db_dump']['tmp_name'];
                $comm = 'mysql -u' . $db_user . ' -p' . $db_pass . ' < ' . $dump_name;
                system($comm);
                header('Location: /admin');
                ob_end_clean();
                exit();
            }else{
                header('Location: /admin');
            }
        }
    }
}