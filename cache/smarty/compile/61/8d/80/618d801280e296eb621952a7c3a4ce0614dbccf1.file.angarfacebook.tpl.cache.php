<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:39
         compiled from "/var/www/html/modules/angarfacebook/views/templates/front/angarfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21298601915ad9f7af26a552-19821916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618d801280e296eb621952a7c3a4ce0614dbccf1' => 
    array (
      0 => '/var/www/html/modules/angarfacebook/views/templates/front/angarfacebook.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21298601915ad9f7af26a552-19821916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7af283681_45243691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7af283681_45243691')) {function content_5ad9f7af283681_45243691($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="likebox_content">
	<h4><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'angarfacebook'),$_smarty_tpl);?>
</h4>
	<div class="likebox_tab"></div>
	<div class="fb-page" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
">Facebook</a></blockquote></div></div>
</div>
<?php }?>
<?php }} ?>
