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
{if count($categoryProducts) > 0 && $categoryProducts !== false}

<script>

$(document).ready(function() {
if (!!$.prototype.bxSlider)
	$('#bx_productscategory').bxSlider({
		minSlides: 1,
		maxSlides: 6,
		slideWidth: 296,
		pager: false,
		nextSelector: '#next_productcat',
		prevSelector: '#prev_productcat',
		nextText: '>',
		prevText: '<',
		moveSlides:1,
		infiniteLoop:false,
		hideControlOnEnd: true
	});
});

</script>

<section class="page-product-box blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading">
		<span>
		{if $categoryProducts|@count == 1}
			{l s='%s other product in the same category:' sprintf=[$categoryProducts|@count] mod='productscategory'}
		{else}
			{l s='%s other products in the same category:' sprintf=[$categoryProducts|@count] mod='productscategory'}
		{/if}
		</span>
		<div id="next_productcat" class="slider-btn"></div>
		<div id="prev_productcat" class="slider-btn"></div>
	</h3>
	<div id="productscategory_list" class="clearfix">

			<ul id="bx_productscategory" class="product_list grid row">
				{foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
					<li class="col-xs-12 col-sm-4 col-md-4">

						<div class="product-container">

							<div class="product-image-container">
								<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="product-image product_image" title="{$categoryProduct.name|htmlspecialchars}">
									<img class="replace-2x img-responsive" src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$categoryProduct.name|htmlspecialchars}" />
								</a>

								{if isset($categoryProduct.new) && $categoryProduct.new == 1}
									<a class="new-box" href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}">
										<span class="new-label">{l s='New' mod='productscategory'}</span>
									</a>
								{/if}

								{* AngarTheme *}
								{if isset($categoryProduct.on_sale) && $categoryProduct.on_sale && isset($categoryProduct.show_price) && $categoryProduct.show_price && !$PS_CATALOG_MODE}
									<a class="sale-box {if isset($categoryProduct.new) && $categoryProduct.new == 1}sale-box_new{/if}" href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}">
										<span class="sale-label">{l s='Sale!' mod='productscategory'}</span>
									</a>
								{/if}

							</div>

							<div class="right-block">

								<h5 itemprop="name">
									<a class="product-name" href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html':'UTF-8'}" title="{$categoryProduct.name|htmlspecialchars}">
										{$categoryProduct.name|truncate:80:'...'|escape:'html':'UTF-8'}
									</a>
								</h5>

								<div class="hook-reviews">
									{hook h='displayProductListReviews' product=$categoryProduct}
								</div>

								<p class="product-desc" itemprop="description">
									{$categoryProduct.description_short|strip_tags:'UTF-8'|truncate:80:'...'}
								</p>

								<div class="content_price">
									{if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices
									&& ($categoryProduct.displayed_price|number_format:2 !== $categoryProduct.price_without_reduction|number_format:2)}
										<span class="price product-price">{convertPrice price=$categoryProduct.displayed_price}</span>
										<span class="old-price product-price">{displayWtPrice p=$categoryProduct.price_without_reduction}</span>
										{if $categoryProduct.specific_prices.reduction_type == 'percentage'}
											<span class="price-percent-reduction">-{$categoryProduct.specific_prices.reduction * 100}%</span>
										{/if}
									{else}
										<span class="price product-price">{convertPrice price=$categoryProduct.displayed_price}</span>
									{/if}
								</div>

								<div class="button-container">
									{if !$PS_CATALOG_MODE && ($categoryProduct.allow_oosp || $categoryProduct.quantity > 0)}
										<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart', true, NULL, "qty=1&amp;id_product={$categoryProduct.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$categoryProduct.id_product|intval}" title="{l s='Add to cart' mod='productscategory'}">
											<span>{l s='Add to cart' mod='productscategory'}</span>
										</a>
									{else}
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<span>{l s='Add to cart' mod='productscategory'}</span>
										</span>
									{/if}
									<a class="button lnk_view btn btn-default" href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html':'UTF-8'}" title="{l s='More' mod='productscategory'}">
										<span>{l s='More' mod='productscategory'}</span>
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
