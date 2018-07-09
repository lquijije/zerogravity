<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:38
         compiled from "/var/www/html/modules/angarhomecat/views/templates/front/at_homecat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1217108065ad9f7aed75628-97442221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb09b2c2fdd7a186b4e237cc259767da58afb3e' => 
    array (
      0 => '/var/www/html/modules/angarhomecat/views/templates/front/at_homecat.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217108065ad9f7aed75628-97442221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_title' => 0,
    'catProducts' => 0,
    'show_img' => 0,
    'catProduct' => 0,
    'link' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
    'subcat_limit' => 0,
    'subcat' => 0,
    'show_btn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7aee157e3_34762923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7aee157e3_34762923')) {function content_5ad9f7aee157e3_34762923($_smarty_tpl) {?>

<div id="home_categories"> 

<?php if ($_smarty_tpl->tpl_vars['show_title']->value==1) {?>
	<h4 class="homecat_title"><span><?php echo smartyTranslate(array('s'=>'Featured categories','mod'=>'angarhomecat'),$_smarty_tpl);?>
</span></h4>
<?php }?>

<ul class="row"> 
	<?php  $_smarty_tpl->tpl_vars['catProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catProduct']->key => $_smarty_tpl->tpl_vars['catProduct']->value) {
$_smarty_tpl->tpl_vars['catProduct']->_loop = true;
?>
		<li class="cat_block col-xs-12 col-sm-4 col-md-3">
			<div class="cat-container">

				<?php if ($_smarty_tpl->tpl_vars['show_img']->value==1) {?>
				<div class="catimg_container">
					<?php if ($_smarty_tpl->tpl_vars['catProduct']->value['id_image']) {?>
						<img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['catProduct']->value['id_image'],'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
					<?php } else { ?>
						<img class="replace-2x" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_cat_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-default-category_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
					<?php }?>
				</div>
				<?php }?>

				<div class="catlinks_container">
					<h2>
						<a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'];?>
<?php $_tmp9=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp8,$_tmp9), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</a>
						<span></span>
					</h2>

					<ul class="sub_categories">
					<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catProduct']->value['sub_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value) {
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==$_smarty_tpl->tpl_vars['subcat_limit']->value) {?><?php break 1?><?php }?>
						 <li><a href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['subcat']->value['link_rewrite'];?>
<?php $_tmp11=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp10,$_tmp11), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
					<?php } ?>
					</ul>

					<?php if ($_smarty_tpl->tpl_vars['show_btn']->value==1) {?>
						<a class="view_more" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="<?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['catProduct']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['catProduct']->value['link_rewrite'];?>
<?php $_tmp13=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_tmp12,$_tmp13), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'See more','mod'=>'angarhomecat'),$_smarty_tpl);?>
</a>
					<?php }?>
				</div>

				<div class="clearfix"></div>

			</div>
		</li>
	<?php } ?>	
</ul>

<div class="clearfix"></div>

</div><?php }} ?>
