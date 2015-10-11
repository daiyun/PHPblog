<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>{block name="title"}{$tpl_date.title}{/block}</title>
	    <link href="{$PUBLIC}/css/bootstrap.css" rel="stylesheet">
	    <link href="{$PUBLIC}/css/club.css" rel="stylesheet">
	    
	  	{block name=top_css_js}{/block}
	  	
	</head>
	<body>
		{include 'nav.tpl'}
		<div class="content">
		{block name=content}{/block}
		</div>
		<script src="{$PUBLIC}/js/jquery-1.9.1.js"></script>
		<script src="{$PUBLIC}/js/bootstrap.js"></script>
		
		{block name=bottom_js}{/block}
		<script type="text/javascript">
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
		</script>
	</body>
</html>