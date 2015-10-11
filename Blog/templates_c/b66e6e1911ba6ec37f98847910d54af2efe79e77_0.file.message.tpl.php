<?php /* Smarty version 3.1.27, created on 2015-10-06 12:54:21
         compiled from "/var/www/learn/Blog/View/root/message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1157780588561353fd6f6c93_52172780%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66e6e1911ba6ec37f98847910d54af2efe79e77' => 
    array (
      0 => '/var/www/learn/Blog/View/root/message.tpl',
      1 => 1443661108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157780588561353fd6f6c93_52172780',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561353fd71eea3_37332016',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561353fd71eea3_37332016')) {
function content_561353fd71eea3_37332016 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1157780588561353fd6f6c93_52172780';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title><?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['title'];?>
</title>
    	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/UEditor/ueditor.config.js"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/UEditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
   		<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/UEditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

	   	<style type="text/css">
	   		.editor {
	   			text-align:center;
	   		}
	   		.title {
	   			width:500px;
	   			margin: 10px 0px;
	   		}
	   	</style>
	   
	</head>
	<body> 
		<?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['message'];?>

	</body>
</html>
<?php }
}
?>