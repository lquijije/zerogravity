<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:38
         compiled from "/var/www/html/modules/angarmenu/views/templates/front/angarmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8229487395ad9f7aeca38e4-47646803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a735cc8ac1e3739846ea0ce9e8126f70eefe52a' => 
    array (
      0 => '/var/www/html/modules/angarmenu/views/templates/front/angarmenu.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8229487395ad9f7aeca38e4-47646803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7aecc9c57_81614882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7aecc9c57_81614882')) {function content_5ad9f7aecc9c57_81614882($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
	
	<div class="container">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>'Menu ','mod'=>'angarmenu'),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
