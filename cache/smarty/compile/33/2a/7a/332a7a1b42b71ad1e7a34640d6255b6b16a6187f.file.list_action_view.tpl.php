<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:29:30
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20040995905ad9f94ab15fd1-12027278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '332a7a1b42b71ad1e7a34640d6255b6b16a6187f' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1523541099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20040995905ad9f94ab15fd1-12027278',
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
  'unifunc' => 'content_5ad9f94ab25224_86058647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f94ab25224_86058647')) {function content_5ad9f94ab25224_86058647($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
