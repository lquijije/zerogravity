<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 14:10:57
         compiled from "C:\xampp\htdocs\zerogravity\modules\angarslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109295b43b34128f582-66425805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d84d3843269f8ee915a0163645ad4f9aa96c1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\modules\\angarslider\\views\\templates\\hook\\header.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109295b43b34128f582-66425805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'angarslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43b3412d11d8_70771259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43b3412d11d8_70771259')) {function content_5b43b3412d11d8_70771259($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['angarslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_loop'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_width'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_speed'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_pause'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
