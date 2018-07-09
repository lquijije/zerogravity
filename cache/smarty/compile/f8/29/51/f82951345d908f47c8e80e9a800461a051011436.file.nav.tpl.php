<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 11:09:23
         compiled from "/var/www/html/themes/AngarTheme/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12337813645ada10b39939c6-79068630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82951345d908f47c8e80e9a800461a051011436' => 
    array (
      0 => '/var/www/html/themes/AngarTheme/modules/blockcontact/nav.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12337813645ada10b39939c6-79068630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada10b39c4177_18071085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada10b39c4177_18071085')) {function content_5ada10b39c4177_18071085($_smarty_tpl) {?>

<div id="contact_nav">

<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><span class="shop-phone_text"><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
	<span class="shop-phone shop-email<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-envelope"></i><span class="shop-phone_text"><?php echo smartyTranslate(array('s'=>'E-mail:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>
	</span>
<?php }?>

</div><?php }} ?>
