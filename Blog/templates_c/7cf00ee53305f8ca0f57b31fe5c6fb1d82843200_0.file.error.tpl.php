<?php /* Smarty version 3.1.27, created on 2015-10-06 08:55:35
         compiled from "/var/www/learn/Blog/View/error/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190058140056131c072e0320_24408255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf00ee53305f8ca0f57b31fe5c6fb1d82843200' => 
    array (
      0 => '/var/www/learn/Blog/View/error/error.tpl',
      1 => 1444050888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190058140056131c072e0320_24408255',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56131c0731c626_36569441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56131c0731c626_36569441')) {
function content_56131c0731c626_36569441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190058140056131c072e0320_24408255';
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