<?php /* Smarty version 3.1.27, created on 2015-10-06 08:34:05
         compiled from "/var/www/learn/Blog/View/about/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1039015514561316fd10ca72_71578501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9962cce6f60deda4311900735e83568d9785c88' => 
    array (
      0 => '/var/www/learn/Blog/View/about/index.tpl',
      1 => 1443931941,
      2 => 'file',
    ),
    '587ef856559b680f76ae01b720d3a839eade51fc' => 
    array (
      0 => '/var/www/learn/Blog/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    '355765ea06f14b9451a45da6869261b02f1b2b25' => 
    array (
      0 => '355765ea06f14b9451a45da6869261b02f1b2b25',
      1 => 0,
      2 => 'string',
    ),
    '48320cda92db50c67cb78a48e2c3d5c6c481b3f3' => 
    array (
      0 => '48320cda92db50c67cb78a48e2c3d5c6c481b3f3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1039015514561316fd10ca72_71578501',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561316fd160f39_27004562',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561316fd160f39_27004562')) {
function content_561316fd160f39_27004562 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1039015514561316fd10ca72_71578501';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '1039015514561316fd10ca72_71578501';
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
$_smarty_tpl->properties['nocache_hash'] = '1039015514561316fd10ca72_71578501';
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