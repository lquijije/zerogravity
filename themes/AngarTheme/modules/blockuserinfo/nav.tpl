<!-- Block user information module NAV  -->
{* AngarTheme AT02 *}
<div class="header_user_info">

	<span class="welcome">{l s='Welcome,' mod='blockuserinfo'}</span>
	
	{if $is_logged}		
		<a class="account" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow">
			<span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span>
		</a>

		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow">{l s='Your Account' mod='blockuserinfo'}</a>
		
		<a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">{l s='Sign out' mod='blockuserinfo'}</a>

	{else}
		<a class="account" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			{l s='Sign in' mod='blockuserinfo'}
		</a>
	{/if}
</div>

<!-- /Block usmodule NAV -->