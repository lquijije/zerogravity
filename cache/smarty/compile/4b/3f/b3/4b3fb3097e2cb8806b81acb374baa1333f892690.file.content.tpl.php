<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 14:48:27
         compiled from "C:\xampp\htdocs\zerogravity\admin0\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90765b43bc0bb9b522-04334218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3fb3097e2cb8806b81acb374baa1333f892690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin0\\themes\\default\\template\\content.tpl',
      1 => 1531147665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90765b43bc0bb9b522-04334218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43bc0bba2c74_10449713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43bc0bba2c74_10449713')) {function content_5b43bc0bba2c74_10449713($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
