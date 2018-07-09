<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:39
         compiled from "/var/www/html/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'man_auto' => 0,
    'man_pause' => 0,
    'man_move' => 0,
    'man_loop' => 0,
    'link' => 0,
    'homeManufacturers' => 0,
    'homeManufacturer' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7af234ea5_71924598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7af234ea5_71924598')) {function content_5ad9f7af234ea5_71924598($_smarty_tpl) {?>

<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: <?php if ($_smarty_tpl->tpl_vars['man_auto']->value==0) {?>false<?php } else { ?>true<?php }?>,
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['man_pause']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['man_move']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
			infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['man_loop']->value==0) {?>false<?php } else { ?>true<?php }?>,
			hideControlOnEnd: true
		});
	});
</script>


<div id="home_man">

<h4 class="man_title">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl);?>
</span></a>
	<div id="next_man" class="slider-btn"></div>
	<div id="prev_man" class="slider-btn"></div>
</h4>

<ul id="bx_manufacturer">
<?php  $_smarty_tpl->tpl_vars['homeManufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homeManufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeManufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homeManufacturer']->key => $_smarty_tpl->tpl_vars['homeManufacturer']->value) {
$_smarty_tpl->tpl_vars['homeManufacturer']->_loop = true;
?>
	<li>

		<a title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['homeManufacturer']->value['id'];?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['homeManufacturer']->value['link_rewrite'];?>
<?php $_tmp17=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_tmp16,$_tmp17), ENT_QUOTES, 'UTF-8', true);?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
		</a>

	</li>
<?php } ?>	
</ul>

<div class="clearfix"></div>

</div><?php }} ?>
