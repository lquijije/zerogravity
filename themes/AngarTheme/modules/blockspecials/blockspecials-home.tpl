{* AngarTheme *}
{if isset($specials) && $specials}
	<h4 class="index_title"><a href="{$link->getPageLink('prices-drop')|escape:'html':'UTF-8'}" title="{l s='Specials' mod='blockspecials'}">{l s='Specials' mod='blockspecials'}</a></h4>
	{include file="$tpl_dir./product-list.tpl" products=$specials class='blockspecials tab-pane' id='blockspecials'}
{else}
	<h4 class="index_title"><a href="{$link->getPageLink('prices-drop')|escape:'html':'UTF-8'}" title="{l s='Specials' mod='blockspecials'}">{l s='Specials' mod='blockspecials'}</a></h4>
	<ul id="blockspecials" class="blockspecials tab-pane">
		<li class="alert alert-info">{l s='No special products at this time.' mod='blockspecials'}</li>
	</ul>
{/if}
