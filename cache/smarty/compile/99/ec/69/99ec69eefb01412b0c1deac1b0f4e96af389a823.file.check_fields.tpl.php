<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:37:15
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/controllers/products/multishop/check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5050965405ad9fb1bc835b2-66293604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ec69eefb01412b0c1deac1b0f4e96af389a823' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/controllers/products/multishop/check_fields.tpl',
      1 => 1523541096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5050965405ad9fb1bc835b2-66293604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9fb1bca98f4_48944787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9fb1bca98f4_48944787')) {function content_5ad9fb1bca98f4_48944787($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value) {?>
	<div class="panel clearfix">
		<label class="control-label col-lg-3">
			<i class="icon-sitemap"></i> <?php echo smartyTranslate(array('s'=>'Multistore'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-4">
					<span class="switch prestashop-switch">
						<input type="radio" name="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
" id="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_on" value="1" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', true); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()">
						<label for="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_on">
							<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

						</label>
						<input type="radio" name="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
" id="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_off" value="0" checked="checked" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', false); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()">
						<label for="multishop_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
_off">
							<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

						</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="help-block">
						<strong><?php echo smartyTranslate(array('s'=>'Check / Uncheck all'),$_smarty_tpl);?>
</strong> <?php echo smartyTranslate(array('s'=>'(If you are editing this page for several shops, some fields may be disabled. If you need to edit them, you will need to check the box for each field)'),$_smarty_tpl);?>

					</p>
				</div>
			</div>
		</div>
	</div>
<?php }?>
<?php }} ?>
