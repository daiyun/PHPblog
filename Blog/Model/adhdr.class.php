<?php
require_once(MODEL_DIR.'model.class.php');

class Madhdr extends model{
    public function __construct(){
        parent::__construct();
        $this->table = 'life';//手动设置该model操作数据表
    }
}