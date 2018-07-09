<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:21:38
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12750189955ad9f7729a8077-95906489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fdc614db7f9ae9a0108f3b5d1ac9a2dcefdd916' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1523541099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12750189955ad9f7729a8077-95906489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7729b72b6_88134927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7729b72b6_88134927')) {function content_5ad9f7729b72b6_88134927($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
