<?php
defined('HUANGDR') or die();
class U{
    public function __construct(){
        
    }
    /**
     * URL分割
     * @param unknown $url
     * @return multitype:
     */
    public static function url_to_controller_method_date($url){
        $visit_way = array();
        $url_array = array();
        $url_array = explode('/', strtolower($url));
        if(array_key_exists('1',$url_array) && self::check_str($url_array[1])){
            $visit_way['controller'] = $url_array[1];
            if(array_key_exists('2',$url_array) && self::check_str($url_array[2])){
                $visit_way['method'] = $url_array[2];
                if(array_key_exists('3',$url_array) && is_numeric($url_array[3])){
                    $visit_way['date'] = $url_array[3];
                }
            }
        }
        return $visit_way;
    }
    /**
     * 检查字符是否全为字母组成
     * @param string $str
     * @return boolean
     */
    public static function check_str($str = ''){
        if(preg_match("/^[a-zA-Z\s]+$/",$str)){
            return true;
        }else{
            return false;        
        }
    }
    
}