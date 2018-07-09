<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:38
         compiled from "/var/www/html/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12057734535ad9f7aee8b8a3-37741481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5788af96bf6453cdb43ffee527d96e57d15aeef' => 
    array (
      0 => '/var/www/html/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12057734535ad9f7aee8b8a3-37741481',
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
  'unifunc' => 'content_5ad9f7aee9d000_78790732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7aee9d000_78790732')) {function content_5ad9f7aee9d000_78790732($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_desc">
	<?php  $_smarty_tpl->tpl_vars['info2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info2']->key => $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->_loop = true;
?>
		<div class="desc_block"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
	<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?>
<?php }} ?>
