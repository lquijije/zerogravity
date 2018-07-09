<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:36
         compiled from "/var/www/html/modules/angarslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13387949905ad9f7ac5894e7-53255685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472186991ece8061ccf7861adc721c344add4f48' => 
    array (
      0 => '/var/www/html/modules/angarslider/views/templates/hook/header.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13387949905ad9f7ac5894e7-53255685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'angarslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7ac5ca222_80127478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7ac5ca222_80127478')) {function content_5ad9f7ac5ca222_80127478($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['angarslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_loop'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_width'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_speed'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_pause'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
