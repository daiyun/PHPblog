<?php
defined('HUANGDR') or die();

require_once(IN_APP.'Conf/Index.config.php'); 
require_once(IN_APP.'Conf/DIR.config.php');
require_once(SMARTY_DIR.'Smarty.class.php');//Smarty框架
require_once(LIB_DIR.'function.class.php');//库函数

$smarty = new Smarty();//初始化Smarty
$smarty->template_dir = SMARTY_TEMPLATE_DIR;
$smarty->compile_dir = SMARTY_COMPILE_DIR;
$smarty->config_dir = SMARTY_CONFIG_DIR;
$smarty->cache_dir = SMARTY_CACHE_DIR;

$url = $_SERVER['REQUEST_URI'];//获取待处理访问完整网址
$way = array();
$way = U::url_to_controller_method_date($url);
$controller = INDEX_CONTROLLER;//index controller
$method = NULL;
$date = NUll;
array_key_exists('controller',$way) && $controller = $way['controller'];
array_key_exists('method',$way) && $method = $way['method'];
array_key_exists('date',$way) && $date = $way['date'];
unset($way);

//自动加载控制器+控制器方法
if(file_exists(CONTROLLER_DIR.$controller.'.class.php')){
    require_once CONTROLLER_DIR.$controller.'.class.php';
    
    $show_controller = new $controller();
    if($method != NULL && method_exists($show_controller, $method)){
        $tpl_date = $show_controller->$method($date);//获取模板数据
    }else{//默认夹载index方法
        $tpl_date = $show_controller->index($date);//获取模板数据
    }

    $tpl = $show_controller->tpl;//获取渲染模板路径
    unset($show_controller);

    $smarty->assign('PUBLIC',HOST.PUBLIC_DIR);//资源文件路径HOST
    $smarty->assign('HOST',HOST);//主机路径
    $smarty->assign('tpl_date',$tpl_date);//模板数据发送
    
    if(file_exists(SMARTY_TEMPLATE_DIR.$tpl)){
        $smarty->display($tpl);//模板渲染
    }else{
    	if(Debug){
			$smarty->assign('data',array('message'=>'view file no exists!'));
		}else{
			$smarty->assign('data',array('message'=>'error'));
		}
        $smarty->display('error/error.tpl');//模板渲染
    }
}else{
	if(Debug){
		$smarty->assign('data',array('message'=>'controller no exists!'));
	}else{
		$smarty->assign('data',array('message'=>'error'));
	}
	$smarty->display('error/error.tpl');//模板渲染
}
unset($smarty);