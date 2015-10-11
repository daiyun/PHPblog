<?php /* Smarty version 3.1.27, created on 2015-10-05 21:25:20
         compiled from "/var/www/learn/View/root/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139408999956127a409ad4e1_55888622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ca379690a60af2f0b44da5add4f2ec5bf26122' => 
    array (
      0 => '/var/www/learn/View/root/index.tpl',
      1 => 1443660445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139408999956127a409ad4e1_55888622',
  'variables' => 
  array (
    'tpl_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56127a409e28d9_33892061',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56127a409e28d9_33892061')) {
function content_56127a409e28d9_33892061 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139408999956127a409ad4e1_55888622';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['title'];?>
</title>
	    
	    
	</head>
	<body>
		首页
	</body>
</html><?php }
}
?>