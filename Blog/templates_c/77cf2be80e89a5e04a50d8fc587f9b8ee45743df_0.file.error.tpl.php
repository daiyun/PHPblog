<?php /* Smarty version 3.1.27, created on 2015-10-05 21:15:03
         compiled from "/var/www/learn/View/error/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1221132083561277d7c74873_00894941%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77cf2be80e89a5e04a50d8fc587f9b8ee45743df' => 
    array (
      0 => '/var/www/learn/View/error/error.tpl',
      1 => 1444050888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1221132083561277d7c74873_00894941',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561277d7c89b00_90748802',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561277d7c89b00_90748802')) {
function content_561277d7c89b00_90748802 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1221132083561277d7c74873_00894941';
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