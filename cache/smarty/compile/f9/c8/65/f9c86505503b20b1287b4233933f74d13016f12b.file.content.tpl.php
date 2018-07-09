<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:20:49
         compiled from "/var/www/html/admin93185fjw6/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19837281755ad9f7411d6586-00016914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c86505503b20b1287b4233933f74d13016f12b' => 
    array (
      0 => '/var/www/html/admin93185fjw6/themes/default/template/content.tpl',
      1 => 1523541093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19837281755ad9f7411d6586-00016914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7411df834_38515325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7411df834_38515325')) {function content_5ad9f7411df834_38515325($_smarty_tpl) {?>
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
