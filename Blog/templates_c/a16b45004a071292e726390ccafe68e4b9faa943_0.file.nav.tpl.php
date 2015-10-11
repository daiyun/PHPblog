<?php /* Smarty version 3.1.27, created on 2015-10-05 20:23:43
         compiled from "/var/www/learn/View/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:201815095856126bcfac7a94_57589258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a16b45004a071292e726390ccafe68e4b9faa943' => 
    array (
      0 => '/var/www/learn/View/nav.tpl',
      1 => 1443862559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201815095856126bcfac7a94_57589258',
  'variables' => 
  array (
    'HOST' => 0,
    'tpl_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56126bcfaddc04_78074867',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56126bcfaddc04_78074867')) {
function content_56126bcfaddc04_78074867 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201815095856126bcfac7a94_57589258';
?>
<div class="hr">
			<br />&nbsp;
		</div>
		<div class="yapiskan">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
">Huangdr</a>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        
			        <?php if ($_smarty_tpl->tpl_vars['tpl_date']->value['controller'] == 'it') {?>
			        	<li class="active">
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/it">ＩＴ &nbsp;LIFE</a>
			        	</li>
			        <?php } else { ?>
			        	<li>
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/it">ＩＴ &nbsp;LIFE</a>
			        	</li>	
			        <?php }?>
			        <?php if ($_smarty_tpl->tpl_vars['tpl_date']->value['controller'] == 'man') {?>
			        	<li class="active">
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/man"> MAN &nbsp;ＬＩＦＥ </a>
			        	</li>
			        <?php } else { ?>
			        	<li>
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/man"> MAN &nbsp;ＬＩＦＥ </a>
			        	</li>	
			        <?php }?>
			        <?php if ($_smarty_tpl->tpl_vars['tpl_date']->value['controller'] == 'about') {?>
			        	<li class="active">
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/about">ＡＢＯＵＴ</a>
			        	</li>
			        <?php } else { ?>
			        	<li>
			        		<a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
/about">ＡＢＯＵＴ</a>
			        	</li>	
			        <?php }?>
			        
			        
			      </ul>
			      <form class="navbar-form navbar-right" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			      </form>
			    </div>
			  </div>
			</nav>
		</div><?php }
}
?>