<?php /* Smarty version Smarty-3.1.19, created on 2018-07-09 20:44:47
         compiled from "C:\xampp\htdocs\zerogravity\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49445b43ad1f00c186-51184262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab8e98d12b8128e216c9a9ced0cafcc72e07d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1531147681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49445b43ad1f00c186-51184262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43ad1f010872_55654354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43ad1f010872_55654354')) {function content_5b43ad1f010872_55654354($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
