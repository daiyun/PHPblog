<?php
defined('HUANGDR') or die();

trait DBDriver
{
	public $DB = NULL;
	public $table = NULL;
	public function contact(){
        $this->DB = new mysqli();
        $this->DB->connect(CONFIG_APPDB_MASTER_HOST,CONFIG_APPDB_MASTER_USER,CONFIG_APPDB_MASTER_PASS,CONFIG_APPDB_MASTER_NAME);
        if($this->DB->errno){
            die("数据库连接失败！ ".$this->DB->error);
        }else{
            $this->DB->set_charset('UTF8');
        }
    }

	public  function get($key){
        $sql = "SELECT title,content,modify_time FROM life WHERE id=?";
        $Mysqli_stmt = $this->DB->prepare($sql);
        $id = $key;
        $title = '';
        $content = '';
        $modify_time = '';
        $artile = array();
        $Mysqli_stmt->bind_param('i',$id);
        if($Mysqli_stmt -> execute ()){
            $Mysqli_stmt->bind_result($title,$content,$modify_time);
            $Mysqli_stmt->fetch();
            if($title){
                $artile['title'] = $title;
                $artile['content'] = $content;
                $artile['modify_time'] = $modify_time;
            }
            $Mysqli_stmt->store_result();
        }
        $Mysqli_stmt->free_result();
        $Mysqli_stmt->close();
        return count($artile)>0?$artile:NULL;
    }
    public function set($key, $data){
        
    }
    public function delete($key){
        
    }
    public function  update($key, $arr){
        
    }
    public function maxid($table, $val = 0){
        
    }
    public function count($table = '', $val = 0){
        
    }
    public function truncate($table){
        
    }
    public function version(){
        
    }
    public function index_fetch($table, $keyname, $cond = array(), $orderby = array(), $start = 0, $limit = 0){
        
    }
    public function index_fetch_id($table, $keyname, $cond = array(), $orderby = array(), $start = 0, $limit = 0){
        
    }
    public function index_update($table, $cond, $update, $lowprority = FALSE){
        
    }
    public function index_delete($table, $cond, $lowprority = FALSE){
        
    }
    public function index_maxid($key){
        
    }
    public function index_count($table, $cond = array()){
        
    }
    public function index_create($table, $index){
        
    }
    public function index_drop($table, $index){
        
    }

	public function getById($key){
        $sql = "SELECT title,content,modify_time FROM {$this->table} WHERE id=?";
        $Mysqli_stmt = $this->DB->prepare($sql);
        $id = $key;
        $title = '';
        $content = '';
        $modify_time = '';
        $artile = array();
        $Mysqli_stmt->bind_param('i',$id);
        if($Mysqli_stmt -> execute ()){
            $Mysqli_stmt->bind_result($title,$content,$modify_time);
            $Mysqli_stmt->fetch();
            if($title){
                $artile['title'] = $title;
                $artile['content'] = $content;
                $artile['modify_time'] = $modify_time;
            }
            $Mysqli_stmt->store_result();
        }
        $Mysqli_stmt->free_result();
        $Mysqli_stmt->close();
        return count($artile)>0?$artile:NULL;
    }
    /**
     * 添加一条文章
     * @param string $arr
     */
    public function addOne($arr = NULL){
        //var_dump($arr);
        $arr['create_time'] = date('Y-m-d',time());
        $arr['modify_time'] = $arr['create_time'];
        $arr['hot'] = 0;
        $arr['type'] = 1;
        $arr['status'] = 1;
        $sql = "INSERT INTO {$this->table}(`title`,`content`,`create_time`,`modify_time`,`hot`,`type`,`status`) VALUES(?,?,?,?,?,?,?)";
        $Mysqli_stmt = $this->DB->prepare($sql);
        $Mysqli_stmt->bind_param('ssssiii', $arr['title'],$arr['content'],$arr['create_time'],$arr['modify_time'],$arr['hot'],$arr['type'],$arr['status']);
        $Mysqli_stmt->execute();
        return $Mysqli_stmt->error;
    }
    public function tableCount(){
        $sql = "SELECT COUNT(*) FROM {$this->table}";
        $result = $this->DB->query($sql);
        $count = $result->fetch_row();
        return $count[0];
    }
    /**
     * 分页
     * @param number $list
     * @return Ambigous <multitype:, unknown>
     */
    public function page($list = 1){
        $sql = "SELECT id,title,content,modify_time FROM {$this->table} limit ?,?";
        $Mysqli_stmt = $this->DB->prepare($sql);
        $count = 5;
        $id = NULL;
        $pageList = array();
        $i = 0;
        $start = (is_numeric($list)?$list:1)*5-5;
        $Mysqli_stmt->bind_param('ii', $start,$count);
        $Mysqli_stmt->execute();
        $Mysqli_stmt->bind_result($id,$title,$content,$modify_time);
        while ($Mysqli_stmt->fetch()){
            $pageList[$i]['id'] = $id;
            $pageList[$i]['title'] = $title;
            $pageList[$i]['content'] = substr(strip_tags($content),0,210);
            $pageList[$i]['modify_time'] = $modify_time;
            $i++;
        }
        $Mysqli_stmt->store_result();
        return $pageList;
    }
    
    public function getComment($date){
        $sql = "SELECT nikename,email,comments,create_time FROM comment WHERE article_id=?";
        $Mysql_stmt = $this->DB->prepare($sql);
        $id = $date;
        $Mysql_stmt->bind_param('i', $id);
        $Mysql_stmt->execute();
        $pageList = array();
        $i = 0;
        $Mysql_stmt->bind_result($nikename,$email,$comments,$create_time);
        while ($Mysql_stmt->fetch()){
            $pageList[$i]['nikename'] = $nikename;
            $pageList[$i]['email'] = $email;
            $pageList[$i]['comments'] = $comments;
            $pageList[$i]['create_time'] = $create_time;
            $i++;
        }
        $Mysql_stmt->store_result();
        return $pageList;
        
    }

    public function __destruct(){
        $this->DB->close();
        $this->DB = NUll;
    }
}