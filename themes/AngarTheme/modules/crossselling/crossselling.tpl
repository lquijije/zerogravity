{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($orderProducts) && count($orderProducts)}

<script>

$(document).ready(function() {
if (!!$.prototype.bxSlider)
	$('#product #bx_crossselling').bxSlider({
		minSlides: 1,
		maxSlides: 6,
		slideWidth: 296,
		pager: false,
		nextSelector: '#next_crossseling',
		prevSelector: '#prev_crossseling',
		nextText: '>',
		prevText: '<',
		moveSlides:1,
		infiniteLoop:false,
		hideControlOnEnd: true
	});
});

</script>

	<section id="crossselling" class="page-product-box">

		<h3 class="productscategory_h2 page-product-heading">
			<span>
			{if $page_name == 'product'}
				{l s='Customers who bought this product also bought:' mod='crossselling'}
			{else}
				{l s='We recommend' mod='crossselling'}
			{/if}
			</span>
			<div id="next_crossseling" class="slider-btn"></div>
			<div id="prev_crossseling" class="slider-btn"></div>
		</h3>

		<div id="crossselling_list">
			<ul id="bx_crossselling" class="product_list grid row">
				{foreach from=$orderProducts item='orderProduct' name=orderProduct}
					<li class="col-xs-12 col-sm-4 col-md-4">

						<div class="product-container">

							<div class="product-image-container">
								<a class="product-image product_image" href="{$orderProduct.link|escape:'html':'UTF-8'}" title="{$orderProduct.name|htmlspecialchars}" >
									<img class="replace-2x img-responsive" itemprop="image" src="{$orderProduct.image}" alt="{$orderProduct.name|htmlspecialchars}" />
								</a>

								{if isset($orderProduct.new) && $orderProduct.new == 1}
									<a class="new-box" href="{$orderProduct.link|escape:'html':'UTF-8'}">
										<span class="new-label">{l s='New' mod='crossselling'}</span>
									</a>
								{/if}

								{* AngarTheme *}
								{if isset($orderProduct.on_sale) && $orderProduct.on_sale && isset($orderProduct.show_price) && $orderProduct.show_price && !$PS_CATALOG_MODE}
									<a class="sale-box {if isset($orderProduct.new) && $orderProduct.new == 1}sale-box_new{/if}" href="{$orderProduct.link|escape:'html':'UTF-8'}">
										<span class="sale-label">{l s='Sale!' mod='crossselling'}</span>
									</a>
								{/if}

							</div>

							<div class="right-block">

								<h5 itemprop="name">
									<a class="product-name" href="{$orderProduct.link|escape:'html':'UTF-8'}" title="{$orderProduct.name|htmlspecialchars}">
										{$orderProduct.name|truncate:80:'...'|escape:'html':'UTF-8'}
									</a>
								</h5>

								<div class="hook-reviews">
									{hook h='displayProductListReviews' product=$orderProduct}
								</div>

								<p class="product-desc" itemprop="description">
									{$orderProduct.description_short|strip_tags:'UTF-8'|truncate:80:'...'}
								</p>

								<div class="content_price">
									{if isset($orderProduct.specific_prices) && $orderProduct.specific_prices
									&& ($orderProduct.displayed_price|number_format:2 !== $orderProduct.price_without_reduction|number_format:2)}
										<span class="price product-price">{convertPrice price=$orderProduct.displayed_price}</span>
										<span class="old-price product-price">{displayWtPrice p=$orderProduct.price_without_reduction}</span>
										{if $orderProduct.specific_prices.reduction_type == 'percentage'}
											<span class="price-percent-reduction">-{$orderProduct.specific_prices.reduction * 100}%</span>
										{/if}
									{else}
										<span class="price product-price">{convertPrice price=$orderProduct.displayed_price}</span>
									{/if}
								</div>

								<div class="button-container">
									{if !$PS_CATALOG_MODE && ($orderProduct.allow_oosp || $orderProduct.quantity > 0)}
										<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart', true, NULL, "qty=1&amp;id_product={$orderProduct.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$orderProduct.id_product|intval}" title="{l s='Add to cart' mod='crossselling'}">
											<span>{l s='Add to cart' mod='crossselling'}</span>
										</a>
									{else}
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<span>{l s='Add to cart' mod='crossselling'}</span>
										</span>
									{/if}
									<a class="button lnk_view btn btn-default" href="{$orderProduct.link|escape:'html':'UTF-8'}" title="{l s='View'}">
										<span>{l s='More' mod='crossselling'}</span>
									</a>
								</div>

							</div>

						</div>

					</li>

				{/foreach}
			</ul>
		</div>

	</section>
{/if}
