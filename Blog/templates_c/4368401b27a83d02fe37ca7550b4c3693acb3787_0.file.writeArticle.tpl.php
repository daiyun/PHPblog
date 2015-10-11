<?php /* Smarty version 3.1.27, created on 2015-10-05 21:25:37
         compiled from "/var/www/learn/View/root/writeArticle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187539703956127a51b7d688_84234759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4368401b27a83d02fe37ca7550b4c3693acb3787' => 
    array (
      0 => '/var/www/learn/View/root/writeArticle.tpl',
      1 => 1443660506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187539703956127a51b7d688_84234759',
  'variables' => 
  array (
    'tpl_date' => 0,
    'PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56127a51bbec90_85600217',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56127a51bbec90_85600217')) {
function content_56127a51bbec90_85600217 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187539703956127a51b7d688_84234759';
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
		<div class="editor">
			<form name="plan" action="/adhdr/pwriteArticle" method="post">
				<input class="title" type="text"  name="title" />
				<?php echo '<script'; ?>
 id="editor" name="content" type="text/plain" style="width:100%;height:500px;"><?php echo '</script'; ?>
>
			
				<input type="submit" value="提 交">
			</form>
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
	
	    //实例化编辑器
	    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	    var ue = UE.getEditor('editor');
	
	    function getContent() {
	        var arr = [];
	        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
	        arr.push("内容为：");
	        arr.push(UE.getEditor('editor').getContent());
	        alert(arr.join("\n"));
	    }
	   
	    function disableBtn(str) {
	        var div = document.getElementById('btns');
	        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
	        for (var i = 0, btn; btn = btns[i++];) {
	            if (btn.id == str) {
	                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
	            } else {
	                btn.setAttribute("disabled", "true");
	            }
	        }
	    }
	    function enableBtn() {
	        var div = document.getElementById('btns');
	        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
	        for (var i = 0, btn; btn = btns[i++];) {
	            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
	        }
	    }
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
?>