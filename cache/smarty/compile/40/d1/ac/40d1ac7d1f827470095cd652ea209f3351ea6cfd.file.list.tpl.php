<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 10:04:11
         compiled from "/var/www/html/modules/angarslider/views/templates/hook/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17013080635ada016bacb0c0-23386078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d1ac7d1f827470095cd652ea209f3351ea6cfd' => 
    array (
      0 => '/var/www/html/modules/angarslider/views/templates/hook/list.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17013080635ada016bacb0c0-23386078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'slides' => 0,
    'slide' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada016bb44407_85935660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada016bb44407_85935660')) {function content_5ada016bb44407_85935660($_smarty_tpl) {?>

<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo smartyTranslate(array('s'=>'Slides list','mod'=>'angarslider'),$_smarty_tpl);?>

	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=angarslider&addSlide=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo smartyTranslate(array('s'=>'Add new','mod'=>'angarslider'),$_smarty_tpl);?>
" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<div id="slides_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-3">
							<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image_baseurl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-thumbnail" />
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">
								#<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['id_slide'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								<?php if ($_smarty_tpl->tpl_vars['slide']->value['is_shared']) {?>
									<div>
										<span class="label color_field pull-left" style="background-color:#108510;color:white;margin-top:5px;">
											<?php echo smartyTranslate(array('s'=>'Shared slide','mod'=>'angarslider'),$_smarty_tpl);?>

										</span>
									</div>
								<?php }?>
							</h4>
							<div class="btn-group-action pull-right">
								<?php echo $_smarty_tpl->tpl_vars['slide']->value['status'];?>
 

								<a class="btn btn-default"
									href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=angarslider&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'angarslider'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configure=angarslider&delete_id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'angarslider'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }} ?>
