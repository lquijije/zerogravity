{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<script>
	$(document).ready(function() {
		{foreach from=$catProducts item=catProduct name=atCatProducts}
			$('#bxslider_{$catProduct.id|escape:'htmlall':'UTF-8'}').bxSlider({
				auto: {if $auto == 0}false{else}true{/if},
				minSlides: {$visible|escape:'htmlall':'UTF-8'},
				maxSlides: {$visible|escape:'htmlall':'UTF-8'},
				mode: 'vertical',
				pager: false,
				pause: 3000,
				nextSelector: '#home-next_{$catProduct.id|escape:'htmlall':'UTF-8'}',
				prevSelector: '#home-prev_{$catProduct.id|escape:'htmlall':'UTF-8'}',
				nextText: '>',
				prevText: '<',
				moveSlides: {$move|escape:'htmlall':'UTF-8'},
				infiniteLoop: {if $loop == 0}false{else}true{/if},
				hideControlOnEnd: true,
				useCSS: false,
			});
		{/foreach}
	});
</script>

<div id="home_cat_product">

	<div class="row">
	{foreach from=$catProducts item=catProduct name=atCatProducts}
		
		<div id="block_id_{$catProduct.id|escape:'htmlall':'UTF-8'}" class="col-xs-12 col-sm-3">

			<h4 class="catprod_title">
				<a href="{$link->getCategoryLink({$catProduct.id|escape:'htmlall':'UTF-8'},{$catProduct.link_rewrite})|escape:'html':'UTF-8'}" title="{$catProduct.name|escape:'htmlall':'UTF-8'}">
					<span>{$catProduct.name|escape:'htmlall':'UTF-8'}</span>
				</a>
				<div id="home-next_{$catProduct.id|escape:'htmlall':'UTF-8'}" class="slider-btn"></div>
				<div id="home-prev_{$catProduct.id|escape:'htmlall':'UTF-8'}" class="slider-btn"></div>
			</h4>

			<div class="bx_box">
				<ul id="bxslider_{$catProduct.id|escape:'htmlall':'UTF-8'}">
					{foreach from=$catProduct.product item=product name=myLoop}
					<li>
						
						<div class="product_container">
							<div class="left-block">
								<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
									<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($smallSize)} width="{$smallSize.width}" height="{$smallSize.height}"{/if} itemprop="image" />
								</a>

								{if isset($product.new) && $product.new == 1}
									<a class="new-box" href="{$product.link|escape:'html':'UTF-8'}">
										<span class="new-label">{l s='New' mod='angarcatproduct'}</span>
									</a>
								{/if}
								{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
									<a class="sale-box {if isset($product.new) && $product.new == 1}sale-box_new{/if}" href="{$product.link|escape:'html':'UTF-8'}">
										<span class="sale-label">{l s='Sale!' mod='angarcatproduct'}</span>
									</a>
								{/if}

								{if isset($product.is_virtual) && !$product.is_virtual}{hook h="displayProductDeliveryTime" product=$product}{/if}
								{hook h="displayProductPriceBlock" product=$product type="weight"}
							</div>

							<div class="right-block">
								<h5 itemprop="name">
									{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
									<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
										{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
									</a>
								</h5>
								{capture name='displayProductListReviews'}{hook h='displayProductListReviews' product=$product}{/capture}
								{if $smarty.capture.displayProductListReviews}
									<div class="hook-reviews">
										{hook h='displayProductListReviews' product=$product}
									</div>
								{/if}

								<p class="product-desc" itemprop="description">
									{$product.description_short|strip_tags:'UTF-8'|truncate:40:'...'} {*HTML CONTENT*}
								</p>

								{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
								<div class="content_price">
									{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
										{hook h="displayProductPriceBlock" product=$product type='before_price'}
										<span class="price product-price">
											{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
										</span>
										{if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											{hook h="displayProductPriceBlock" product=$product type="old_price"}
											<span class="old-price product-price">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
											{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
										{/if}
										{hook h="displayProductPriceBlock" product=$product type="price"}
										{hook h="displayProductPriceBlock" product=$product type="unit_price"}
										{hook h="displayProductPriceBlock" product=$product type='after_price'}
									{/if}
								</div>
								{/if}

								<div class="button-container">
									{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
										{capture}add=1&amp;id_product={$product.id_product|escape:'htmlall':'UTF-8'}{if isset($product.id_product_attribute) && $product.id_product_attribute}&amp;ipa={$product.id_product_attribute|intval}{/if}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
										<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='angarcatproduct'}" data-id-product-attribute="{$product.id_product_attribute|intval}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
											<span>{l s='Add to cart' mod='angarcatproduct'}</span>
										</a>
									{else}
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<span>{l s='Add to cart' mod='angarcatproduct'}</span>
										</span>
									{/if}
								</div>
							</div>

							<div class="clearfix"></div>

						</div>

					</li>
					{/foreach}
				</ul>

			</div>

		</div>
	{/foreach}
	</div>

</div>

<div class="clearfix"></div>
