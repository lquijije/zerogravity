<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 11:09:23
         compiled from "/var/www/html/themes/AngarTheme/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149162865ada10b38ad966-80265162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f89c5966ca90dc5de0917ce44a9fd2a1016875e' => 
    array (
      0 => '/var/www/html/themes/AngarTheme/modules/homefeatured/homefeatured.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149162865ada10b38ad966-80265162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada10b38c0c99_92995995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada10b38c0c99_92995995')) {function content_5ada10b38c0c99_92995995($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<h4 class="index_title"><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</span></h4>	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
	<h4 class="index_title"><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</span></h4>	
	<ul id="homefeatured" class="homefeatured tab-pane">
		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
	</ul>
<?php }?><?php }} ?>
