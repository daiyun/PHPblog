<?php
require_once(MODEL_DIR.'model.class.php');

class Mit extends model{
    public function __construct(){
        parent::__construct();
        $this->DB->table = 'life';//手动设置该model操作数据表
    }
}