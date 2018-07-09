{* AngarTheme *}
{if isset($new_products) && $new_products}
	<h4 class="index_title"><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='New arrivals' mod='blocknewproducts'}">{l s='New arrivals' mod='blocknewproducts'}</a></h4>	
	{include file="$tpl_dir./product-list.tpl" products=$new_products class='blocknewproducts tab-pane' id='blocknewproducts'}
{else}
	<h4 class="index_title"><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='New arrivals' mod='blocknewproducts'}">{l s='New arrivals' mod='blocknewproducts'}</a></h4>	
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info">{l s='No new products at this time.' mod='blocknewproducts'}</li>
</ul>
{/if}