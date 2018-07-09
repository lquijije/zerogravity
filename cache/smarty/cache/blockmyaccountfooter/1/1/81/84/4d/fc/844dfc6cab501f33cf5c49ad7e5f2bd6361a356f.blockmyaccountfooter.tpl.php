<?php /*%%SmartyHeaderCode:188675b43b3427da330-34106281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '844dfc6cab501f33cf5c49ad7e5f2bd6361a356f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zerogravity\\themes\\AngarTheme\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188675b43b3427da330-34106281',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b43b342937329_02699219',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b43b342937329_02699219')) {function content_5b43b342937329_02699219($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-3">
	<h4><a href="http://200.93.198.236:8038/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow"><span>Mi cuenta</span></a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://200.93.198.236:8038/index.php?controller=history" title="Mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://200.93.198.236:8038/index.php?controller=order-slip" title="Mis facturas por abono" rel="nofollow">Mis facturas por abono</a></li>
			<li><a href="http://200.93.198.236:8038/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://200.93.198.236:8038/index.php?controller=identity" title="Administrar mis datos personales" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
