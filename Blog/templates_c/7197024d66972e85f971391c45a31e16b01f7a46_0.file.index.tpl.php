<?php /* Smarty version 3.1.27, created on 2015-10-05 21:30:22
         compiled from "/var/www/learn/vendor/View/about/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119173679256127b6ebd07b0_12948458%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7197024d66972e85f971391c45a31e16b01f7a46' => 
    array (
      0 => '/var/www/learn/vendor/View/about/index.tpl',
      1 => 1443931941,
      2 => 'file',
    ),
    '7980e215b1c5054ae319e57f7b7d23f6deda557c' => 
    array (
      0 => '/var/www/learn/vendor/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    'eecb8acbb095cff5f592d8cdcafc4e31f166f326' => 
    array (
      0 => 'eecb8acbb095cff5f592d8cdcafc4e31f166f326',
      1 => 0,
      2 => 'string',
    ),
    '43e89e88af36ea16b29b73420904fddb784a77dc' => 
    array (
      0 => '43e89e88af36ea16b29b73420904fddb784a77dc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '119173679256127b6ebd07b0_12948458',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56127b6ec36b61_86778005',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56127b6ec36b61_86778005')) {
function content_56127b6ec36b61_86778005 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119173679256127b6ebd07b0_12948458';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '119173679256127b6ebd07b0_12948458';
?>
</title>
	    <link href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/css/bootstrap.css" rel="stylesheet">
	    <link href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/css/club.css" rel="stylesheet">
	    
	  	
	  	
	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="content">
		<?php
$_smarty_tpl->properties['nocache_hash'] = '119173679256127b6ebd07b0_12948458';
?>

	

		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/js/jquery-1.9.1.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
		
		
		<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			var h1 = 20;
			var h2 = 50;
			var ss = $(document).scrollTop();
			$(window).scroll(function(){
				var s = $(document).scrollTop();
		
				if(s< h1){
					$('.yapiskan').removeClass('yya');
				}if(s > h1){
					$('.yapiskan').addClass('yya');
				}if(s > h2){
					$('.yapiskan').addClass('gizle');
					if(s > ss){
						$('.yapiskan').removeClass('sabit');
					}else{
						$('.yapiskan').addClass('sabit');
					}
					ss = s;
				}
		
		
			});
			
		});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
?>