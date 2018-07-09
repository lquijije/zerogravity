<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:38
         compiled from "/var/www/html/modules/angarparallax/views/templates/front/at_parallax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12911716355ad9f7aeeab118-46158501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c946da363263eef453181edaefdac9c2a2862c01' => 
    array (
      0 => '/var/www/html/modules/angarparallax/views/templates/front/at_parallax.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12911716355ad9f7aeeab118-46158501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parallax_img' => 0,
    'parallax_desc' => 0,
    'parallax_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7aeeccb59_59723888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7aeeccb59_59723888')) {function content_5ad9f7aeeccb59_59723888($_smarty_tpl) {?>

<div id="parallax_baner" <?php if (isset($_smarty_tpl->tpl_vars['parallax_img']->value)) {?>style="background-image: url(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)"<?php }?>>

	<div class="parallax_desc">
		<?php echo $_smarty_tpl->tpl_vars['parallax_desc']->value;?>
 
	</div>

	<?php if (mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')) {?>
		<a class="parallax_button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl);?>
</a>
	<?php }?>

</div>
<?php }} ?>
