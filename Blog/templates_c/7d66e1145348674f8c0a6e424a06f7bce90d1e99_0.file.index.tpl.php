<?php /* Smarty version 3.1.27, created on 2015-10-05 20:23:44
         compiled from "/var/www/learn/View/it/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209869192256126bd0d25f82_81789733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d66e1145348674f8c0a6e424a06f7bce90d1e99' => 
    array (
      0 => '/var/www/learn/View/it/index.tpl',
      1 => 1443862820,
      2 => 'file',
    ),
    '71441de531007f6ff68bc4b43734c1d5b63e527a' => 
    array (
      0 => '/var/www/learn/View/base.tpl',
      1 => 1443862891,
      2 => 'file',
    ),
    '18733a6270b3c8f1a7efa0d854107ce94e662cb0' => 
    array (
      0 => '18733a6270b3c8f1a7efa0d854107ce94e662cb0',
      1 => 0,
      2 => 'string',
    ),
    'cd705b7294e877c1bc3daca91144f60e5427ba4d' => 
    array (
      0 => 'cd705b7294e877c1bc3daca91144f60e5427ba4d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '209869192256126bd0d25f82_81789733',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56126bd0dfca94_49077999',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56126bd0dfca94_49077999')) {
function content_56126bd0dfca94_49077999 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209869192256126bd0d25f82_81789733';
?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php
$_smarty_tpl->properties['nocache_hash'] = '209869192256126bd0d25f82_81789733';
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
$_smarty_tpl->properties['nocache_hash'] = '209869192256126bd0d25f82_81789733';
?>
}
		
		<div class="article_content">	
			<div class="container">
			
			<?php
$_from = $_smarty_tpl->tpl_vars['tpl_date']->value['date'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['each'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['each']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
$foreach_each_Sav = $_smarty_tpl->tpl_vars['each'];
?>
				<div class="jumbotron">
				  <h2><?php echo $_smarty_tpl->tpl_vars['each']->value['title'];?>
</h2>
				  <span class="btn-clipboard"><?php echo $_smarty_tpl->tpl_vars['each']->value['modify_time'];?>
</span>
				  <p><?php echo $_smarty_tpl->tpl_vars['each']->value['content'];?>
...</p>
				  <p><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/it/read/<?php echo $_smarty_tpl->tpl_vars['each']->value['id'];?>
" role="button">Reading more</a></p>
				</div>
			<?php
$_smarty_tpl->tpl_vars['each'] = $foreach_each_Sav;
}
?>
			
				
				
				
				<nav class="nav_list">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['tpl_date']->value['count']/5+1 - (1) : 1-($_smarty_tpl->tpl_vars['tpl_date']->value['count']/5)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
				    	<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['tpl_date']->value['now']) {?>
				    		<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/it/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tpl_date']->value['now'];?>
</a></li>
				    	<?php } else { ?>
				    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/it/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				    	<?php }?>
				    	
				    <?php }} ?>
				    
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			
		</div>

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