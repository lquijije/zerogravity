{* AngarTheme *}

{if $enableconfig == 1}
	<h3 id="#idTab5" class="review_tab_boxed idTabHrefShort page-product-heading"><span>{l s='Reviews' mod='productcomments'}</span></h3>
	<li class="review_tab"><a href="#idTab5" class="idTabHrefShort page-product-heading">{l s='Reviews' mod='productcomments'}</a></li>
{else}

	{if $css37 == product_tabs1}
		<h3 id="#idTab5" class="review_tab_boxed idTabHrefShort page-product-heading"><span>{l s='Reviews' mod='productcomments'}</span></h3>
	{else}
		<li class="review_tab"><a href="#idTab5" class="idTabHrefShort page-product-heading">{l s='Reviews' mod='productcomments'}</a></li>
	{/if}

{/if}