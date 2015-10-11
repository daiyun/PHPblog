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
			      <a class="navbar-brand" href="{$HOST}">Huangdr</a>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        
			        {if $tpl_date.controller eq 'it'}
			        	<li class="active">
			        		<a href="{$HOST}/it">ＩＴ &nbsp;LIFE</a>
			        	</li>
			        {else}
			        	<li>
			        		<a href="{$HOST}/it">ＩＴ &nbsp;LIFE</a>
			        	</li>	
			        {/if}
			        {if $tpl_date.controller eq 'man'}
			        	<li class="active">
			        		<a href="{$HOST}/man"> MAN &nbsp;ＬＩＦＥ </a>
			        	</li>
			        {else}
			        	<li>
			        		<a href="{$HOST}/man"> MAN &nbsp;ＬＩＦＥ </a>
			        	</li>	
			        {/if}
			        {if $tpl_date.controller eq 'about'}
			        	<li class="active">
			        		<a href="{$HOST}/about">ＡＢＯＵＴ</a>
			        	</li>
			        {else}
			        	<li>
			        		<a href="{$HOST}/about">ＡＢＯＵＴ</a>
			        	</li>	
			        {/if}
			        
			        
			      </ul>
			      <form class="navbar-form navbar-right" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			      </form>
			    </div>
			  </div>
			</nav>
		</div>