<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 10:02:33
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6690793925ada0109c66834-10185648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912876341684eb5e9f61952706bdbfb0d873e887' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1523541095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6690793925ada0109c66834-10185648',
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
  'unifunc' => 'content_5ada0109c9cad6_08950147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada0109c9cad6_08950147')) {function content_5ada0109c9cad6_08950147($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
