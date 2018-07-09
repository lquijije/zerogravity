{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{extends file="helpers/list/list_content.tpl"}

{block name="td_content"}
	{if isset($params.type) && $params.type == 'link'}
		<a href="{$tr.$key|escape:'html':'UTF-8'}" target="_blank">{$tr.$key|escape:'html':'UTF-8'}</a>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
