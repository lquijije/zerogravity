<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 20:44:21
         compiled from "C:\xampp\htdocs\zerogravity\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156485b43ad058821d5-31464397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2359b0b1610961470e5bcff4466eab8f954db5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1531147671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156485b43ad058821d5-31464397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43ad05889495_61740411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43ad05889495_61740411')) {function content_5b43ad05889495_61740411($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
