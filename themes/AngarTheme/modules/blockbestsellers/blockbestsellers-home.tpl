{* AngarTheme *}
{if isset($best_sellers) && $best_sellers}
	<h4 class="index_title"><a href="{$link->getPageLink('best-sales')|escape:'html'}" title="{l s='Best Sellers' mod='blockbestsellers'}">{l s='Best Sellers' mod='blockbestsellers'}</a></h4>
	{include file="$tpl_dir./product-list.tpl" products=$best_sellers class='blockbestsellers tab-pane' id='blockbestsellers'}
{else}
	<h4 class="index_title"><a href="{$link->getPageLink('best-sales')|escape:'html'}" title="{l s='Best Sellers' mod='blockbestsellers'}">{l s='Best Sellers' mod='blockbestsellers'}</a></h4>
	<ul id="blockbestsellers" class="blockbestsellers tab-pane">
		<li class="alert alert-info">{l s='No best sellers at this time.' mod='blockbestsellers'}</li>
	</ul>
{/if}