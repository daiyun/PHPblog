<?php
defined('HUANGDR') or die();
require_once CONTROLLER_DIR.'controller.class.php';

class comment extends controller{
    public function index(){
        $array = array();
        $array['title'] = '评论处理页！';
        
        $comment['name'] = $_POST['name'];
        $comment['mail'] = $_POST['mail'];
        $comment['comments'] = $_POST['comments'];
        $comment['pid'] = $_POST['pid'];
        $comment['article_id'] = $_POST['article_id'];
        
        $array['message'] = $this->DB->addComment($comment);
        $this->setTpl ('message.tpl');

        return $array;
    }
}