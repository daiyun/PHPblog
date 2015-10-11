<?php
defined('HUANGDR') or die();
require_once CONTROLLER_DIR.'controller.class.php';

class adhdr extends controller{
    /**
     * 方法格式说明
     * public function index($date = NULL){
     *   
     *   $this->tpl = 'root/index.tpl';//定义该方法渲染模板路径
     *   return $array;//返回该方法向模板发送的数据数组 
     * }
     */
    public function index($date = NULL){
        $array = array();
        $array['title'] = '编辑博文';
        $this->setTpl('root/index.tpl');
        return $array;
    }
    public function gwriteArticle($date){
        $array = array();
        //$this->DB->getById(2);
        $array['title'] = '编辑博文';
        $this->setTpl('root/writeArticle.tpl');
        return $array;
    }
    
    public function pwriteArticle($date){
        $array = array();
        $array['title'] = '添加文章处理页面！';
        $arr = array();
        
        $arr['title'] = $_POST['title'];
        $arr['content'] = $_POST['content'];
        
        $array['message'] = $this->DB->addOne($arr);
        $this->setTpl('root/message.tpl');
        return $array;
    }
    
    public function garticle($date = NULL){
        $this->setTpl('root/garticle.tpl');
        return 'gArticle';
    }
    
}
