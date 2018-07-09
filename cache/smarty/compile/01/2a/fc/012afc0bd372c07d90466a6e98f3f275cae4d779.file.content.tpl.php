<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 13:54:01
         compiled from "C:\xampp\htdocs\zerogravity\admin681jvq9bw\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168325b43af496a3e58-17543170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012afc0bd372c07d90466a6e98f3f275cae4d779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin681jvq9bw\\themes\\default\\template\\content.tpl',
      1 => 1531147665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168325b43af496a3e58-17543170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43af496ac3e4_79811998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43af496ac3e4_79811998')) {function content_5b43af496ac3e4_79811998($_smarty_tpl) {?>
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
