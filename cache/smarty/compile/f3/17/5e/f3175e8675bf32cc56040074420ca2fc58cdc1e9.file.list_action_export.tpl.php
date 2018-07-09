<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 20:44:32
         compiled from "C:\xampp\htdocs\zerogravity\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282935b43ad10796389-83534640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3175e8675bf32cc56040074420ca2fc58cdc1e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1531147675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282935b43ad10796389-83534640',
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
  'unifunc' => 'content_5b43ad107c5350_08949490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43ad107c5350_08949490')) {function content_5b43ad107c5350_08949490($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
