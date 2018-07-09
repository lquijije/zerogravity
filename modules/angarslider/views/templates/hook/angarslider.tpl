{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{if $page_name =='index'}
<!-- Module AngarSlider -->
    {if isset($angarslider_slides)}
		<div id="homepage-slider">
			{if isset($angarslider_slides.0) && isset($angarslider_slides.0.sizes.1)}{capture name='height'}{$angarslider_slides.0.sizes.1|escape:'html':'UTF-8'}{/capture}{/if}
			<ul id="angarslider"{if isset($smarty.capture.height) && $smarty.capture.height} style="max-height:{$smarty.capture.height|escape:'htmlall':'UTF-8'}px;"{/if}>
				{foreach from=$angarslider_slides item=slide}
					{if $slide.active}
						<li class="angarslider-container">
							<a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.legend|escape:'html':'UTF-8'}">
								<img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`angarslider/views/img/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="100%" height="100%"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />
							</a>
							{if isset($slide.description) && trim($slide.description) != ''}
								<div class="angarslider-description">{$slide.description} {*HTML CONTENT*}</div>
							{/if}
						</li>
					{/if}
				{/foreach}
			</ul>
		</div>
	{/if}
<!-- /Module AngarSlider -->
{/if}