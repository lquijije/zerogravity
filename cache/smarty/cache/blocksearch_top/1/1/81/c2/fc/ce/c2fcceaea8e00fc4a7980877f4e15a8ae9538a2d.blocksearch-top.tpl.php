<?php /*%%SmartyHeaderCode:11694608295ad9f7acd1d9d7-20207284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2fcceaea8e00fc4a7980877f4e15a8ae9538a2d' => 
    array (
      0 => '/var/www/html/themes/AngarTheme/modules/blocksearch/blocksearch-top.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11694608295ad9f7acd1d9d7-20207284',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada0431175715_85237114',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada0431175715_85237114')) {function content_5ada0431175715_85237114($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//200.93.198.236:8038/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
