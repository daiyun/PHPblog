<?php
defined('HUANGDR') or die();
require_once(SMARTY_CONFIG_DIR.'DB.config.php');
require_once(LIB_DIR.'DB/DB.php');

class model{
    protected $DB = NULL;
    public function __construct(){
        $this->DB = new DB();
        $this->DB->table = substr(get_class($this),1);
    }
    /**
     * 根据文章id获取文章内容
     * @param unknown $key
     * @return Ambigous <NULL, multitype:string >
     */
    public function getById($key){
        return $this->DB->getById($key);
    }
    /**
     * 添加一条文章
     * @param string $arr
     */
    public function addOne($arr = NULL){
       return $this->DB->addOne($arr);
    }
    public function tableCount(){
        return $this->DB->tableCount();
    }
    /**
     * 分页
     * @param number $list
     * @return Ambigous <multitype:, unknown>
     */
    public function page($list = 1){
        return $this->DB->page($list);
    }
    
    public function getComment($data){
        return $this->DB->getComment($data);
        
    }
    
}
