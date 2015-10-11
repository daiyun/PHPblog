{extends file='base.tpl'}

{block name=title}{$tpl_date.title}{/block}

{block name="content"}
		
		<div class="article_content">	
			<div class="container">
			
			{foreach $tpl_date.data as $each}
				<div class="jumbotron">
				  <h2>{$each['title']}</h2>
				  <span class="btn-clipboard">{$each['modify_time']}</span>
				  <p>{$each['content']}...</p>
				  <p><a class="btn btn-primary" href="{$HOST}/it/read/{$each['id']}" role="button">Reading more</a></p>
				</div>
			{/foreach}
			
				
				
				
				<nav class="nav_list">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    {for $page=1 to $tpl_date.articleCount/5}
				    	{if $page eq $tpl_date.nowPage}
				    		<li class="active"><a href="{$HOST}/it/page/{$page}">{$tpl_date.nowPage}</a></li>
				    	{else}
				    		<li><a href="{$HOST}/it/index/{$page}">{$page}</a></li>
				    	{/if}
				    	
				    {/for}
				    
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			
		</div>
{/block}