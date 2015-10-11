<?php
defined('HUANGDR') or die();
require_once CONTROLLER_DIR.'controller.class.php';

class about extends controller{
    public function index() {
        $this->setTpl('about/index.tpl');
        $array = array();
        $array['title'] = "个人简介";
        $array['controller'] = get_class($this);
        return $array;
    }
}