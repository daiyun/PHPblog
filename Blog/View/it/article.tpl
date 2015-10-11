{extends file='base.tpl'}

{block name=title}{$tpl_date.title}{/block}

{block name="content"}
	<div class="article_content">
			<div class="container">
				{$tpl_date.content}
				
				<hr/>
				{foreach $tpl_date.comments as $each}
					{$each['nikename']}<br>
					{$each['email']}<br>
					{$each['comments']}<br>
					{$each['create_time']}<br/>
				{/foreach}
				<hr/>
				<form method="post" action="{$HOST}/comment/index">
					<div class="input-group">
					  <span class="input-group-addon" id="sizing-addon2">Nickname</span>
					  <input type="text" name="name" class="form-control" placeholder="Nickname" required aria-describedby="sizing-addon1">
					</div>
					<br />
					<input type="hidden" name="article_id" value="{$tpl_date.date_id}">
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
{/block}
		
		
		