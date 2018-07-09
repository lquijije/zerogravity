<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:37
         compiled from "/var/www/html/modules/angarbanners/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14798947985ad9f7ad1b7d06-20983927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e648776c4765de4736bed606f1c37661540f92d' => 
    array (
      0 => '/var/www/html/modules/angarbanners/views/templates/hook/hook.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14798947985ad9f7ad1b7d06-20983927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
    'hItem' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7ad2bfd01_41853847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7ad2bfd01_41853847')) {function content_5ad9f7ad2bfd01_41853847($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value) {?>
<div id="angarbanners_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="angarbanners">
	<ul class="clearfix row">
	<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>


<?php if ($_smarty_tpl->tpl_vars['hook']->value=='left'||$_smarty_tpl->tpl_vars['hook']->value=='right') {?>

	<li class="block">
		<h4 class="title_block <?php if ($_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?>banner_title<?php }?>"><span><?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Banner','mod'=>'angarbanners'),$_smarty_tpl);?>
<?php }?></span></h4>
		
		<div class="block_content">
			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
			<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" class="item-img <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left'||$_smarty_tpl->tpl_vars['hook']->value=='right') {?>img-responsive<?php }?>" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_w']);?>
<?php } else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_h']);?>
<?php } else { ?>100%<?php }?>"/>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
					<div class="itemhtml_desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['html'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
				<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			</a>
			<?php }?>
		</div>

	</li>

<?php } else { ?>

	<li class="angarbanners-item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['hook']->value=='footer') {?>col-xs-12<?php } else { ?> col-xs-4<?php }?>">

		<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="item-link"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['target']==1) {?> onclick="return !window.open(this.href);"<?php }?> title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" class="item-img <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left'||$_smarty_tpl->tpl_vars['hook']->value=='right') {?>img-responsive<?php }?>" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_w']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_w']);?>
<?php } else { ?>100%<?php }?>" height="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['image_h']) {?><?php echo intval($_smarty_tpl->tpl_vars['hItem']->value['image_h']);?>
<?php } else { ?>100%<?php }?>"/>
			<?php }?>

				<div class="item_desc">
					<?php if ($_smarty_tpl->tpl_vars['hItem']->value['title']&&$_smarty_tpl->tpl_vars['hItem']->value['title_use']==1) {?>
						<h3 class="item-title"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['hItem']->value['html']) {?>
						<div class="item-html">
							<?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
 
						</div>
					<?php }?>
				</div>

		<?php if ($_smarty_tpl->tpl_vars['hItem']->value['url']) {?>
			</a>
		<?php }?>

	</li>

<?php }?>


	<?php } ?>
	</ul>
</div>
<?php }?>
<?php }} ?>
