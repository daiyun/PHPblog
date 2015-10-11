<?php
defined('HUANGDR') or die();
require_once CONTROLLER_DIR.'controller.class.php';

class it extends controller{
    public function index($data){
        $array = array();
        $array['nowPage'] = $data > 0 ? $data:1;//当前页数 
        $array['data'] = $this->DB->page($array['nowPage']);
        
        $tableCount = $this->DB->tableCount();
        $array['title'] = 'Huangdr';
        $array['articleCount'] = $tableCount;//文章总数
        $array['controller'] = __CLASS__;
        $this->setTpl('it/index.tpl');
        return $array; 
    }
    public function read($data){
        $array = array();
        $arr_article = $this->DB->getById($data);
        
        $array['comments'] = $this->DB->getComment($data);
        $array['date_id'] = $data;
        $array['title'] = $arr_article['title'];
        $array['content'] = $arr_article['content'];
        $array['controller'] = __CLASS__;
        $this->setTpl('it/article.tpl');
        return $array;
    }
}
