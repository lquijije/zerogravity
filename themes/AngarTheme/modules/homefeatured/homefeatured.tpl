{* AngarTheme *}
{if isset($products) && $products}
	<h4 class="index_title"><span>{l s='Featured products' mod='homefeatured'}</span></h4>	
	{include file="$tpl_dir./product-list.tpl" class='homefeatured tab-pane' id='homefeatured'}
{else}
	<h4 class="index_title"><span>{l s='Featured products' mod='homefeatured'}</span></h4>	
	<ul id="homefeatured" class="homefeatured tab-pane">
		<li class="alert alert-info">{l s='No featured products at this time.' mod='homefeatured'}</li>
	</ul>
{/if}