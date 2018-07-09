<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 13:53:46
         compiled from "C:\xampp\htdocs\zerogravity\admin681jvq9bw\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291035b43af3a48e619-91571743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd2ccbfbcc28dc69d2977856418bcf0892e7f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin681jvq9bw\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1531147680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291035b43af3a48e619-91571743',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43af3a491819_25418262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43af3a491819_25418262')) {function content_5b43af3a491819_25418262($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
