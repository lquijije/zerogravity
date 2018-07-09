{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: {if $man_auto == 0}false{else}true{/if},
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: {$man_pause|escape:'htmlall':'UTF-8'},
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: {$man_move|escape:'htmlall':'UTF-8'},
			infiniteLoop: {if $man_loop == 0}false{else}true{/if},
			hideControlOnEnd: true
		});
	});
</script>


<div id="home_man">

<h4 class="man_title">
	<a href="{$link->getPageLink('manufacturer')|escape:'html'}" title="{l s='Featured manufacturers' mod='angarmanufacturer'}"><span>{l s='Featured manufacturers' mod='angarmanufacturer'}</span></a>
	<div id="next_man" class="slider-btn"></div>
	<div id="prev_man" class="slider-btn"></div>
</h4>

<ul id="bx_manufacturer">
{foreach from=$homeManufacturers item=homeManufacturer name=atHomeMan}
	<li>

		<a title="{$homeManufacturer.name|escape:'htmlall':'UTF-8'}" href="{$link->getManufacturerLink({$homeManufacturer.id},{$homeManufacturer.link_rewrite})|escape:'html':'UTF-8'}">
			<img src="{$img_manu_dir|escape:'html':'UTF-8'}{$homeManufacturer.image|escape:'html':'UTF-8'}" alt="{$homeManufacturer.name|escape:'htmlall':'UTF-8'}" />
		</a>

	</li>
{/foreach}	
</ul>

<div class="clearfix"></div>

</div>