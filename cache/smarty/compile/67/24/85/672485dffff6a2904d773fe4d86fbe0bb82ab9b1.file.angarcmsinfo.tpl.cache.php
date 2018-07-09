<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:39
         compiled from "/var/www/html/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15821765505ad9f7af24ab56-74482376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672485dffff6a2904d773fe4d86fbe0bb82ab9b1' => 
    array (
      0 => '/var/www/html/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15821765505ad9f7af24ab56-74482376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7af25c239_95298989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7af25c239_95298989')) {function content_5ad9f7af25c239_95298989($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_block">
	<div class="container">
		<?php  $_smarty_tpl->tpl_vars['info2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info2']->key => $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->_loop = true;
?>
			<div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
		<?php } ?>
	</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?>
<?php }} ?>
