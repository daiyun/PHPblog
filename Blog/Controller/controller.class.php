<?php
/*
 * 控制器主方法
 */

class controller{
    protected $method = NULL;//存储控制器加载方法
    protected $date = NULL;//存储数据
    public $tpl = NULL;//存储渲染模板路径
    protected $DB = NULL;//存储数据库操作符
    
    public function __construct(){
        self::modelAdd(); 
    }
    
    private function modelAdd(){
        $model = get_class($this);
        if(file_exists(MODEL_DIR.$model.'.class.php')){
            require_once(MODEL_DIR.$model.'.class.php');
            $model = 'M'.$model;
            $this->DB = new $model();
        }
    }
    
    public function setTpl($tpl = NULL,$me = __METHOD__){
        if($tpl == NULL){
            $method = explode('::',$me);
            $tpl = __CLASS__ .'/'.$method[1].'.tpl';
            $this->tpl = $tpl;
        }else{
            if(file_exists(SMARTY_TEMPLATE_DIR.$tpl)){
                $this->tpl = $tpl;
            }else{
                $this->tpl = 'error/error.tpl';
            }
        }
    }
    
}
