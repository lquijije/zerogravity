<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 12:32:34
         compiled from "/var/www/html/themes/AngarTheme/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18500238355ada2432c4fc30-41695846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15bf18b81f613f6b1994fc01b7d4bfb2727d3dca' => 
    array (
      0 => '/var/www/html/themes/AngarTheme/modules/productscategory/productscategory.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18500238355ada2432c4fc30-41695846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
    'categoryProduct' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada2432d880e2_95819332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada2432d880e2_95819332')) {function content_5ada2432d880e2_95819332($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false) {?>

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
		<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)==1) {?>
			<?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['categoryProducts']->value)),'mod'=>'productscategory'),$_smarty_tpl);?>

		<?php }?>
		</span>
		<div id="next_productcat" class="slider-btn"></div>
		<div id="prev_productcat" class="slider-btn"></div>
	</h3>
	<div id="productscategory_list" class="clearfix">

			<ul id="bx_productscategory" class="product_list grid row">
				<?php  $_smarty_tpl->tpl_vars['categoryProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoryProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoryProduct']->key => $_smarty_tpl->tpl_vars['categoryProduct']->value) {
$_smarty_tpl->tpl_vars['categoryProduct']->_loop = true;
?>
					<li class="col-xs-12 col-sm-4 col-md-4">

						<div class="product-container">

							<div class="product-image-container">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
" class="product-image product_image" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
">
									<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
" />
								</a>

								<?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['new'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['new']==1) {?>
									<a class="new-box" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
">
										<span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
									</a>
								<?php }?>

								
								<?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['on_sale'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['categoryProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<a class="sale-box <?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['new'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['new']==1) {?>sale-box_new<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']);?>
">
										<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
									</a>
								<?php }?>

							</div>

							<div class="right-block">

								<h5 itemprop="name">
									<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryProduct']->value['name']);?>
">
										<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoryProduct']->value['name'],80,'...'), ENT_QUOTES, 'UTF-8', true);?>

									</a>
								</h5>

								<div class="hook-reviews">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['categoryProduct']->value),$_smarty_tpl);?>

								</div>

								<p class="product-desc" itemprop="description">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['categoryProduct']->value['description_short']),80,'...');?>

								</p>

								<div class="content_price">
									<?php if (isset($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']&&(number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price'],2)!==number_format($_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction'],2))) {?>
										<span class="price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
										<span class="old-price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
										<?php if ($_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction_type']=='percentage') {?>
											<span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['categoryProduct']->value['specific_prices']['reduction']*100;?>
%</span>
										<?php }?>
									<?php } else { ?>
										<span class="price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['categoryProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
									<?php }?>
								</div>

								<div class="button-container">
									<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['categoryProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['categoryProduct']->value['quantity']>0)) {?>
										<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl);?>
">
											<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
										</a>
									<?php } else { ?>
										<span class="button ajax_add_to_cart_button btn btn-default disabled">
											<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
										</span>
									<?php }?>
									<a class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['categoryProduct']->value['id_product'],$_smarty_tpl->tpl_vars['categoryProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['categoryProduct']->value['category'],$_smarty_tpl->tpl_vars['categoryProduct']->value['ean13']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More','mod'=>'productscategory'),$_smarty_tpl);?>
">
										<span><?php echo smartyTranslate(array('s'=>'More','mod'=>'productscategory'),$_smarty_tpl);?>
</span>
									</a>
								</div>

							</div>

						</div>

					</li>

				<?php } ?>
			</ul>

	</div>
</section>
<?php }?>
<?php }} ?>
