<?php /* Smarty version 3.1.27, created on 2015-10-05 20:27:59
         compiled from "/var/www/learn/View/it/article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30394089556126ccf64be26_55341937%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f9c7c2bc91fe07fcb5f6d3a9158a9f4bc62b2f' => 
    array (
      0 => '/var/www/learn/View/it/article.tpl',
      1 => 1443862821,
      2 => 'file',
    ),
    '71441de531007f6ff68bc4b43734c1d5b63e527a' => 
    array (
      0 => '/var/www/learn/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    '255674baf2e9d739c24a65ba6b398e7601401c35' => 
    array (
      0 => '255674baf2e9d739c24a65ba6b398e7601401c35',
      1 => 0,
      2 => 'string',
    ),
    'cf067d7c89b0dc93f7f208dd9641fe8f25df14c2' => 
    array (
      0 => 'cf067d7c89b0dc93f7f208dd9641fe8f25df14c2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '30394089556126ccf64be26_55341937',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56126ccf6e2508_85497891',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56126ccf6e2508_85497891')) {
function content_56126ccf6e2508_85497891 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30394089556126ccf64be26_55341937';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '30394089556126ccf64be26_55341937';
echo $_smarty_tpl->tpl_vars['tpl_date']->value['title'];?>
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
$_smarty_tpl->properties['nocache_hash'] = '30394089556126ccf64be26_55341937';
?>

	<div class="article_content">
			<div class="container">
				<?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['content'];?>

				
				<hr/>
				<?php
$_from = $_smarty_tpl->tpl_vars['tpl_date']->value['comments'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['each'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['each']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
$foreach_each_Sav = $_smarty_tpl->tpl_vars['each'];
?>
					<?php echo $_smarty_tpl->tpl_vars['each']->value['nikename'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['each']->value['email'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['each']->value['comments'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['each']->value['create_time'];?>
<br/>
				<?php
$_smarty_tpl->tpl_vars['each'] = $foreach_each_Sav;
}
?>
				<hr/>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/comment/index">
					<div class="input-group">
					  <span class="input-group-addon" id="sizing-addon2">Nickname</span>
					  <input type="text" name="name" class="form-control" placeholder="Nickname" required aria-describedby="sizing-addon1">
					</div>
					<br />
					<input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['date_id'];?>
">
					<input type="hidden" name="pid" value="0">
					<div class="input-group">
					  <span class="input-group-addon" id="sizing-addon2">Email</span>
					  <input type="email" name="mail" class="form-control" placeholder="Email" required aria-describedby="sizing-addon1">
					</div>
					<textarea class="comments" name="comments" required></textarea>
					<br/>
					<div class="submit">
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button submit" class="btn btn-default">ADD</button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		
		<br/>
		<br/>
		<br/>

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