<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 20:44:14
         compiled from "C:\xampp\htdocs\zerogravity\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82725b43acfece5b03-02183327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcefff528d9f54e2d2dba839113af53e79b34d5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin\\themes\\default\\template\\content.tpl',
      1 => 1531147665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82725b43acfece5b03-02183327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43acfedc3c46_20998503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43acfedc3c46_20998503')) {function content_5b43acfedc3c46_20998503($_smarty_tpl) {?>
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
