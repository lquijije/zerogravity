<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:20:49
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4418755315ad9f7413557f8-60582674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63c03dac6260f8d87d3e754591a66fdb24d3ec1' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1523541099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4418755315ad9f7413557f8-60582674',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f741358e59_25324616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f741358e59_25324616')) {function content_5ad9f741358e59_25324616($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
