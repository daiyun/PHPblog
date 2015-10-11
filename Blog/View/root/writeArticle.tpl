<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>{$tpl_date.title}</title>
    	<script type="text/javascript" charset="utf-8" src="{$PUBLIC}/UEditor/ueditor.config.js"></script>
    	<script type="text/javascript" charset="utf-8" src="{$PUBLIC}/UEditor/ueditor.all.min.js"> </script>
   		<script type="text/javascript" charset="utf-8" src="{$PUBLIC}/UEditor/lang/zh-cn/zh-cn.js"></script>

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
				<script id="editor" name="content" type="text/plain" style="width:100%;height:500px;"></script>
			
				<input type="submit" value="提 交">
			</form>
		</div>
		<script type="text/javascript">
	
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
		</script>
	</body>
</html>
