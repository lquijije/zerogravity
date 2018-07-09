<?php /*%%SmartyHeaderCode:258664995ad9f7af1e2e64-43147514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6856396dd5f6ee6df2201425dfae4563e5194638' => 
    array (
      0 => '/var/www/html/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258664995ad9f7af1e2e64-43147514',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada01cd2d5c01_88375514',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada01cd2d5c01_88375514')) {function content_5ada01cd2d5c01_88375514($_smarty_tpl) {?>
<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: false,
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: 3000,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: 1,
			infiniteLoop: false,
			hideControlOnEnd: true
		});
	});
</script>


<div id="home_man">

<h4 class="man_title">
	<a href="http://200.93.198.236:8038/index.php?controller=manufacturer" title="Fabricantes destacados"><span>Fabricantes destacados</span></a>
	<div id="next_man" class="slider-btn"></div>
	<div id="prev_man" class="slider-btn"></div>
</h4>

<ul id="bx_manufacturer">
	<li>

		<a title="Fashion Manufacturer" href="http://200.93.198.236:8038/index.php?id_manufacturer=1&amp;controller=manufacturer">
			<img src="http://200.93.198.236:8038/img/m/1-medium_default.jpg" alt="Fashion Manufacturer" />
		</a>

	</li>
	
</ul>

<div class="clearfix"></div>

</div><?php }} ?>
