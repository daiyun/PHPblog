<?php
require_once(MODEL_DIR.'model.class.php');

class Mcomment extends model{
    public function __construct(){
        parent::__construct();
        //$this->table = 'comment';//手动设置该model操作数据表
    }
    
    public function addComment($arr = NULL){
        $sql = "INSERT INTO {$this->table}(`pid`,`article_id`,`nikename`,`email`,`comments`,`create_time`) VALUES(?,?,?,?,?,?)";
        $Mysqli_stmt = $this->DB->prepare($sql);
        $arr['creatr_time'] = date("Y-m-d H:s:i",time());
        $Mysqli_stmt->bind_param('iissss', $arr['pid'],$arr['article_id'],$arr['name'],$arr['mail'],$arr['comments'],$arr['creatr_time']);
        $Mysqli_stmt->execute();
        
        return $Mysqli_stmt->error;
    }
}