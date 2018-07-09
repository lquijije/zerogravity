<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 12:31:57
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18072044005ada240d498972-97571330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59eb6735d25905304ab3cd74ff3ef6a753c99f15' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1523541100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18072044005ada240d498972-97571330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada240d4a8b08_74375779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada240d4a8b08_74375779')) {function content_5ada240d4a8b08_74375779($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
