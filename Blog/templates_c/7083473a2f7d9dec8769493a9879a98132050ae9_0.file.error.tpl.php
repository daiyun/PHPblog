<?php /* Smarty version 3.1.27, created on 2015-10-05 21:30:23
         compiled from "/var/www/learn/vendor/View/error/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1612270856127b6f656d34_49430228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7083473a2f7d9dec8769493a9879a98132050ae9' => 
    array (
      0 => '/var/www/learn/vendor/View/error/error.tpl',
      1 => 1444050888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612270856127b6f656d34_49430228',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56127b6f661014_47571280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56127b6f661014_47571280')) {
function content_56127b6f661014_47571280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1612270856127b6f656d34_49430228';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>错误页！</title>
	    
	</head>
	<body>
		<?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

	</body>
</html><?php }
}
?>