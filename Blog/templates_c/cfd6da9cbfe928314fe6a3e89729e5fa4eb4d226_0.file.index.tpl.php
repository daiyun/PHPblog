<?php /* Smarty version 3.1.27, created on 2015-10-05 20:23:43
         compiled from "/var/www/learn/View/about/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134052150856126bcf8ec927_21249307%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd6da9cbfe928314fe6a3e89729e5fa4eb4d226' => 
    array (
      0 => '/var/www/learn/View/about/index.tpl',
      1 => 1443931941,
      2 => 'file',
    ),
    '71441de531007f6ff68bc4b43734c1d5b63e527a' => 
    array (
      0 => '/var/www/learn/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    '65d7e7e39c7ba57c3ecadd3888b019ecb490125b' => 
    array (
      0 => '65d7e7e39c7ba57c3ecadd3888b019ecb490125b',
      1 => 0,
      2 => 'string',
    ),
    '5c89e6cb9499000bdbc3ee875320ad37798ef115' => 
    array (
      0 => '5c89e6cb9499000bdbc3ee875320ad37798ef115',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '134052150856126bcf8ec927_21249307',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56126bcfac24f7_99502189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56126bcfac24f7_99502189')) {
function content_56126bcfac24f7_99502189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134052150856126bcf8ec927_21249307';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '134052150856126bcf8ec927_21249307';
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
$_smarty_tpl->properties['nocache_hash'] = '134052150856126bcf8ec927_21249307';
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