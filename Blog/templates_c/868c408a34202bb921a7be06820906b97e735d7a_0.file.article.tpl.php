<?php /* Smarty version 3.1.27, created on 2015-10-06 08:55:26
         compiled from "/var/www/learn/Blog/View/it/article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141073586356131bfee9c524_33439943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '868c408a34202bb921a7be06820906b97e735d7a' => 
    array (
      0 => '/var/www/learn/Blog/View/it/article.tpl',
      1 => 1443862821,
      2 => 'file',
    ),
    '587ef856559b680f76ae01b720d3a839eade51fc' => 
    array (
      0 => '/var/www/learn/Blog/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    'b7f14e73d030b8c90f44c4ce12d38c173a3de7ad' => 
    array (
      0 => 'b7f14e73d030b8c90f44c4ce12d38c173a3de7ad',
      1 => 0,
      2 => 'string',
    ),
    'aa4137a6969eed4ac1bc08e8c0565087df76ff8e' => 
    array (
      0 => 'aa4137a6969eed4ac1bc08e8c0565087df76ff8e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '141073586356131bfee9c524_33439943',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56131bff03c3e0_62086749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56131bff03c3e0_62086749')) {
function content_56131bff03c3e0_62086749 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141073586356131bfee9c524_33439943';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '141073586356131bfee9c524_33439943';
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
$_smarty_tpl->properties['nocache_hash'] = '141073586356131bfee9c524_33439943';
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