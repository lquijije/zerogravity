{* AngarTheme *}
	<div class="comments_note">
		<div class="star_content clearfix">
			{section name="i" start=0 loop=5 step=1}
				{if $averageTotal le $smarty.section.i.index}
					<div class="star"></div>
				{else}
					<div class="star star_on"></div>
				{/if}
			{/section}
		</div>
		<span class="nb-comments">{l s='Review(s)' mod='productcomments'}: <span>{$nbComments}</span></span>
	</div>
