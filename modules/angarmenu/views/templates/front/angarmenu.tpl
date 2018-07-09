{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{if $MENU != ''}
	<!-- Menu -->
<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
	{* AngarTheme *}
	<div class="container">
		<div class="cat-title">{l s='Menu ' mod='angarmenu'}</div>
		<ul class="sf-menu clearfix menu-content">
			{$MENU} {*HTML CONTENT*}
			{if $MENU_SEARCH}
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'html':'UTF-8'}{/if}" />
						</p>
					</form>
				</li>
			{/if}
		</ul>
	</div>
</div>
	<!--/ Menu -->
{/if}