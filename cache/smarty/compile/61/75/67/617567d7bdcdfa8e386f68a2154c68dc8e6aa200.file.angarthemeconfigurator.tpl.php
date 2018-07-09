<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 09:22:37
         compiled from "/var/www/html/modules/angarthemeconfigurator/views/templates/front/angarthemeconfigurator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20327985255ad9f7adb906e6-58259572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617567d7bdcdfa8e386f68a2154c68dc8e6aa200' => 
    array (
      0 => '/var/www/html/modules/angarthemeconfigurator/views/templates/front/angarthemeconfigurator.tpl',
      1 => 1523900221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20327985255ad9f7adb906e6-58259572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enableconfig' => 0,
    'link' => 0,
    'demo' => 0,
    'css1' => 0,
    'css2' => 0,
    'css3' => 0,
    'css4' => 0,
    'css5' => 0,
    'css6' => 0,
    'css42' => 0,
    'css44' => 0,
    'css41' => 0,
    'css15' => 0,
    'css7' => 0,
    'css43' => 0,
    'css8' => 0,
    'css9' => 0,
    'css10' => 0,
    'css11' => 0,
    'css12' => 0,
    'css13' => 0,
    'css14' => 0,
    'css45' => 0,
    'css46' => 0,
    'css47' => 0,
    'css48' => 0,
    'css49' => 0,
    'css24' => 0,
    'css16' => 0,
    'css17' => 0,
    'css18' => 0,
    'css19' => 0,
    'css20' => 0,
    'css21' => 0,
    'css22' => 0,
    'css23' => 0,
    'css25' => 0,
    'css26' => 0,
    'css27' => 0,
    'css28' => 0,
    'css29' => 0,
    'css30' => 0,
    'css31' => 0,
    'css32' => 0,
    'css33' => 0,
    'css34' => 0,
    'css35' => 0,
    'css36' => 0,
    'css37' => 0,
    'css38' => 0,
    'css39' => 0,
    'color1' => 0,
    'color2' => 0,
    'color3' => 0,
    'color4' => 0,
    'color5' => 0,
    'color6' => 0,
    'color7' => 0,
    'color8' => 0,
    'color9' => 0,
    'color59' => 0,
    'color10' => 0,
    'color11' => 0,
    'color12' => 0,
    'color13' => 0,
    'color14' => 0,
    'color15' => 0,
    'color16' => 0,
    'color60' => 0,
    'color61' => 0,
    'color62' => 0,
    'color63' => 0,
    'color64' => 0,
    'color65' => 0,
    'color66' => 0,
    'color67' => 0,
    'color17' => 0,
    'color18' => 0,
    'color19' => 0,
    'color20' => 0,
    'color21' => 0,
    'color22' => 0,
    'color23' => 0,
    'color24' => 0,
    'color25' => 0,
    'color26' => 0,
    'color27' => 0,
    'color28' => 0,
    'color68' => 0,
    'color69' => 0,
    'color70' => 0,
    'color71' => 0,
    'color29' => 0,
    'color30' => 0,
    'color31' => 0,
    'color32' => 0,
    'color33' => 0,
    'color34' => 0,
    'color35' => 0,
    'color36' => 0,
    'color37' => 0,
    'color38' => 0,
    'color39' => 0,
    'color40' => 0,
    'color41' => 0,
    'color42' => 0,
    'color43' => 0,
    'color44' => 0,
    'color45' => 0,
    'color46' => 0,
    'color47' => 0,
    'color48' => 0,
    'color49' => 0,
    'color50' => 0,
    'color51' => 0,
    'color52' => 0,
    'color53' => 0,
    'color54' => 0,
    'color55' => 0,
    'color56' => 0,
    'color57' => 0,
    'color58' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9f7ae7ea048_28399546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9f7ae7ea048_28399546')) {function content_5ad9f7ae7ea048_28399546($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['enableconfig']->value==1) {?>

<div id="theme_customization_icon">
	<i></i>
</div>

<form id="theme_customization" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">

<h5><?php echo smartyTranslate(array('s'=>'Theme layout editor','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</h5>

<?php if ($_smarty_tpl->tpl_vars['demo']->value==1) {?>
<div class="must_save2"><?php echo smartyTranslate(array('s'=>'Remember to often save your changes.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</br><?php echo smartyTranslate(array('s'=>'After saving click on the shop logo and refresh the store several times to load your changes.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
<?php }?>

<div id="accordion">
<div class="panel">

	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box1"><?php echo smartyTranslate(array('s'=>'Background','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box1" class="collapse customization_container">	

		<div class="background_select_box">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Pattern background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="custom_pattern_bg"><?php echo smartyTranslate(array('s'=>'Add file custom_pattern.png to modules/angarthemeconfigurator/views/img/patterns next save and clear browser cache.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>

			<label class="bg_select no_bg <?php if ($_smarty_tpl->tpl_vars['css1']->value=='no_bg') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="no_bg" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='no_bg') {?>checked<?php }?>></label>
			<label class="bg_select color_only <?php if ($_smarty_tpl->tpl_vars['css1']->value=='color_only') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="color_only" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='color_only') {?>checked<?php }?>></label>
			<label class="bg_select custom_pattern <?php if ($_smarty_tpl->tpl_vars['css1']->value=='custom_pattern') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="custom_pattern" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='custom_pattern') {?>checked<?php }?>></label>

			<label class="bg_select bg1 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg1') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg1" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg1') {?>checked<?php }?>></label>
			<label class="bg_select bg2 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg2') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg2" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg2') {?>checked<?php }?>></label>
			<label class="bg_select bg3 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg3') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg3" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg3') {?>checked<?php }?>></label>
			<label class="bg_select bg4 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg4') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg4" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg4') {?>checked<?php }?>></label>
			<label class="bg_select bg5 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg5') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg5" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg5') {?>checked<?php }?>></label>
			<label class="bg_select bg6 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg6') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg6" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg6') {?>checked<?php }?>></label>
			<label class="bg_select bg7 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg7') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg7" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg7') {?>checked<?php }?>></label>
			<label class="bg_select bg8 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg8') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg8" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg8') {?>checked<?php }?>></label>
			<label class="bg_select bg9 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg9') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg9" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg9') {?>checked<?php }?>></label>
			<label class="bg_select bg10 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg10') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg10" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg10') {?>checked<?php }?>></label>
			<label class="bg_select bg11 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg11') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg11" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg11') {?>checked<?php }?>></label>
			<label class="bg_select bg12 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg12') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg12" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg12') {?>checked<?php }?>></label>
			<label class="bg_select bg13 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg13') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg13" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg13') {?>checked<?php }?>></label>
			<label class="bg_select bg14 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg14') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg14" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg14') {?>checked<?php }?>></label>
			<label class="bg_select bg15 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg15') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg15" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg15') {?>checked<?php }?>></label>
			<label class="bg_select bg16 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg16') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg16" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg16') {?>checked<?php }?>></label>
			<label class="bg_select bg17 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg17') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg17" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg17') {?>checked<?php }?>></label>
			<label class="bg_select bg18 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg18') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg18" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg18') {?>checked<?php }?>></label>
			<label class="bg_select bg19 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg19') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg19" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg19') {?>checked<?php }?>></label>
			<label class="bg_select bg20 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg20') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg20" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg20') {?>checked<?php }?>></label>
			<label class="bg_select bg21 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg21') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg21" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg21') {?>checked<?php }?>></label>
			<label class="bg_select bg22 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg22') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg22" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg22') {?>checked<?php }?>></label>
			<label class="bg_select bg23 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg23') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg23" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg23') {?>checked<?php }?>></label>
			<label class="bg_select bg24 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg24') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg24" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg24') {?>checked<?php }?>></label>
			<label class="bg_select bg25 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg25') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg25" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg25') {?>checked<?php }?>></label>
			<label class="bg_select bg26 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg26') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg26" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg26') {?>checked<?php }?>></label>
			<label class="bg_select bg27 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg27') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg27" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg27') {?>checked<?php }?>></label>
			<label class="bg_select bg28 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg28') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg28" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg28') {?>checked<?php }?>></label>
			<label class="bg_select bg29 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg29') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg29" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg29') {?>checked<?php }?>></label>
			<label class="bg_select bg30 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg30') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg30" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg30') {?>checked<?php }?>></label>
			<label class="bg_select bg31 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg31') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg31" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg31') {?>checked<?php }?>></label>
			<label class="bg_select bg32 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg32') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg32" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg32') {?>checked<?php }?>></label>
			<label class="bg_select bg33 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg33') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg33" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg33') {?>checked<?php }?>></label>
			<label class="bg_select bg34 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg34') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg34" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg34') {?>checked<?php }?>></label>
			<label class="bg_select bg35 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg35') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg35" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg35') {?>checked<?php }?>></label>
			<label class="bg_select bg36 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg36') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg36" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg36') {?>checked<?php }?>></label>
			<label class="bg_select bg37 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg37') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg37" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg37') {?>checked<?php }?>></label>
			<label class="bg_select bg38 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg38') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="bg38" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='bg38') {?>checked<?php }?>></label>


			</br>

			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Texture background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="custom_texture_bg"><?php echo smartyTranslate(array('s'=>'Add file custom_texture.jpg to modules/angarthemeconfigurator/views/img/textures next save and clear browser cache.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
			<label class="bg_select custom_texture <?php if ($_smarty_tpl->tpl_vars['css1']->value=='custom_texture') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="custom_texture" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='custom_texture') {?>checked<?php }?>></label>
			<label class="bg_select texture01 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture01') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture01" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture01') {?>checked<?php }?>></label>
			<label class="bg_select texture02 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture02') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture02" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture02') {?>checked<?php }?>></label>
			<label class="bg_select texture03 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture03') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture03" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture03') {?>checked<?php }?>></label>
			<label class="bg_select texture04 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture04') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture04" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture04') {?>checked<?php }?>></label>
			<label class="bg_select texture05 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture05') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture05" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture05') {?>checked<?php }?>></label>
			<label class="bg_select texture06 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture06') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture06" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture06') {?>checked<?php }?>></label>
			<label class="bg_select texture07 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture07') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture07" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture07') {?>checked<?php }?>></label>
			<label class="bg_select texture08 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture08') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture08" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture08') {?>checked<?php }?>></label>
			<label class="bg_select texture09 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture09') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture09" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture09') {?>checked<?php }?>></label>
			<label class="bg_select texture10 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture10') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture10" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture10') {?>checked<?php }?>></label>
			<label class="bg_select texture11 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture11') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture11" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture11') {?>checked<?php }?>></label>
			<label class="bg_select texture12 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture12') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture12" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture12') {?>checked<?php }?>></label>
			<label class="bg_select texture13 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture13') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture13" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture13') {?>checked<?php }?>></label>
			<label class="bg_select texture14 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture14') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture14" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture14') {?>checked<?php }?>></label>
			<label class="bg_select texture15 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture15') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture15" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture15') {?>checked<?php }?>></label>
			<label class="bg_select texture16 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture16') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture16" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture16') {?>checked<?php }?>></label>
			<label class="bg_select texture17 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture17') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture17" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture17') {?>checked<?php }?>></label>
			<label class="bg_select texture18 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture18') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture18" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture18') {?>checked<?php }?>></label>
			<label class="bg_select texture19 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture19') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture19" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture19') {?>checked<?php }?>></label>
			<label class="bg_select texture20 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture20') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture20" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture20') {?>checked<?php }?>></label>
			<label class="bg_select texture21 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture21') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture21" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture21') {?>checked<?php }?>></label>
			<label class="bg_select texture22 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture22') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture22" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture22') {?>checked<?php }?>></label>
			<label class="bg_select texture23 <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture23') {?>bg_current<?php }?>"><input type="radio" name="angarconfig_input1" value="texture23" <?php if ($_smarty_tpl->tpl_vars['css1']->value=='texture23') {?>checked<?php }?>></label>

	</div>

		<div class="color_modyficator form-group">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Pattern background color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<input type="text" name="angarconfig_input2" id="background_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css2']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		</div>

		<div class="bg_attachment">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Background attachment:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_attatchment_fixed"><input type="radio" name="angarconfig_input3" value="bg_attatchment_fixed" <?php if ($_smarty_tpl->tpl_vars['css3']->value=='bg_attatchment_fixed') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_attatchment_normal"><input type="radio" name="angarconfig_input3" value="bg_attatchment_normal" <?php if ($_smarty_tpl->tpl_vars['css3']->value=='bg_attatchment_normal') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>


		<div class="bg_position">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Background position:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_tl"><input type="radio" name="angarconfig_input4" value="bg_position_tl" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_tl') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Top left','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_tc"><input type="radio" name="angarconfig_input4" value="bg_position_tc" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_tc') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Top center','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_tr"><input type="radio" name="angarconfig_input4" value="bg_position_tr" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_tr') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Top right','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_cl"><input type="radio" name="angarconfig_input4" value="bg_position_cl" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_cl') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Center left','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_cc"><input type="radio" name="angarconfig_input4" value="bg_position_cc" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_cc') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Center center','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_cr"><input type="radio" name="angarconfig_input4" value="bg_position_cr" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_cr') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Center right','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_bl"><input type="radio" name="angarconfig_input4" value="bg_position_bl" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_bl') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Bottom left','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_bc"><input type="radio" name="angarconfig_input4" value="bg_position_bc" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_bc') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Bottom center','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_position_br"><input type="radio" name="angarconfig_input4" value="bg_position_br" <?php if ($_smarty_tpl->tpl_vars['css4']->value=='bg_position_br') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Bottom right','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>	

		<div class="bg_repeat">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Background repeat:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_repeat_no"><input type="radio" name="angarconfig_input5" value="bg_repeat_no" <?php if ($_smarty_tpl->tpl_vars['css5']->value=='bg_repeat_no') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No repeat','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_repeat_x"><input type="radio" name="angarconfig_input5" value="bg_repeat_x" <?php if ($_smarty_tpl->tpl_vars['css5']->value=='bg_repeat_x') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat in axis x','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_repeat_y"><input type="radio" name="angarconfig_input5" value="bg_repeat_y" <?php if ($_smarty_tpl->tpl_vars['css5']->value=='bg_repeat_y') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat in axis y','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_repeat_xy"><input type="radio" name="angarconfig_input5" value="bg_repeat_xy" <?php if ($_smarty_tpl->tpl_vars['css5']->value=='bg_repeat_xy') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Repeat in axis x and y','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="bg_size">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Background size:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_size_initial"><input type="radio" name="angarconfig_input6" value="bg_size_initial" <?php if ($_smarty_tpl->tpl_vars['css6']->value=='bg_size_initial') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No scaling','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="bg_size_cover"><input type="radio" name="angarconfig_input6" value="bg_size_cover" <?php if ($_smarty_tpl->tpl_vars['css6']->value=='bg_size_cover') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Scale to 100%','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box2"><?php echo smartyTranslate(array('s'=>'Top','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box2" class="collapse customization_container">	

		<div class="header_sep">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top separators:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="header_sep0"><input type="radio" name="angarconfig_input42" value="header_sep0" <?php if ($_smarty_tpl->tpl_vars['css42']->value=='header_sep0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No separators','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="header_sep1"><input type="radio" name="angarconfig_input42" value="header_sep1" <?php if ($_smarty_tpl->tpl_vars['css42']->value=='header_sep1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Border bottom','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="header_sep2"><input type="radio" name="angarconfig_input42" value="header_sep2" <?php if ($_smarty_tpl->tpl_vars['css42']->value=='header_sep2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Separators + border','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="logo_top_comp">
			<div class="options_title"><?php echo smartyTranslate(array('s'=>'Logo margin-top:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <span class="value"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css44']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <span>px</span></div>
			<input type="range" name="angarconfig_input44" min="0" max="40" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css44']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box3"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box3" class="collapse customization_container">	

		<div class="menu_sep">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu separators:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="menu_sep0"><input type="radio" name="angarconfig_input41" value="menu_sep0" <?php if ($_smarty_tpl->tpl_vars['css41']->value=='menu_sep0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No separators','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="menu_sep1"><input type="radio" name="angarconfig_input41" value="menu_sep1" <?php if ($_smarty_tpl->tpl_vars['css41']->value=='menu_sep1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Separators','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="menu_sep2"><input type="radio" name="angarconfig_input41" value="menu_sep2" <?php if ($_smarty_tpl->tpl_vars['css41']->value=='menu_sep2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Separators + border','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="submenu_type">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Submenu layout:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="submenu1"><input type="radio" name="angarconfig_input15" value="submenu1" <?php if ($_smarty_tpl->tpl_vars['css15']->value=='submenu1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Submenu layout 1','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="submenu2"><input type="radio" name="angarconfig_input15" value="submenu2" <?php if ($_smarty_tpl->tpl_vars['css15']->value=='submenu2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Submenu layout 2','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box4"><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box4" class="collapse customization_container">	
		
		<div class="must_save"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'- Must save this option to see changes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>

		<div class="slider_position">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Slider position:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <sup>*</sup></label></br>
			<label class="slider_position_top"><input type="radio" name="angarconfig_input7" value="slider_position_top" <?php if ($_smarty_tpl->tpl_vars['css7']->value=='slider_position_top') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Slider under menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="slider_position_column"><input type="radio" name="angarconfig_input7" value="slider_position_column" <?php if ($_smarty_tpl->tpl_vars['css7']->value=='slider_position_column') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Slider in column','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>	

		<div class="slider_size">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Slider width:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <sup>*</sup></label></br>
			<label class="slider_boxed"><input type="radio" name="angarconfig_input43" value="slider_boxed" <?php if ($_smarty_tpl->tpl_vars['css43']->value=='slider_boxed') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Slider max width 1170px','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="slider_full_width"><input type="radio" name="angarconfig_input43" value="slider_full_width" <?php if ($_smarty_tpl->tpl_vars['css43']->value=='slider_full_width') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Slider full width','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>	

		<div class="slider_controls">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Slider controls color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="slider_controls_white"><input type="radio" name="angarconfig_input8" value="slider_controls_white" <?php if ($_smarty_tpl->tpl_vars['css8']->value=='slider_controls_white') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'White','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="slider_controls_black"><input type="radio" name="angarconfig_input8" value="slider_controls_black" <?php if ($_smarty_tpl->tpl_vars['css8']->value=='slider_controls_black') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Black','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box5"><?php echo smartyTranslate(array('s'=>'Banners top','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box5" class="collapse customization_container">

		<div id="banners_top">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top1"><input type="radio" name="angarconfig_input9" value="banners_top1" <?php if ($_smarty_tpl->tpl_vars['css9']->value=='banners_top1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top2"><input type="radio" name="angarconfig_input9" value="banners_top2" <?php if ($_smarty_tpl->tpl_vars['css9']->value=='banners_top2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top3"><input type="radio" name="angarconfig_input9" value="banners_top3" <?php if ($_smarty_tpl->tpl_vars['css9']->value=='banners_top3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top4"><input type="radio" name="angarconfig_input9" value="banners_top4" <?php if ($_smarty_tpl->tpl_vars['css9']->value=='banners_top4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top5"><input type="radio" name="angarconfig_input9" value="banners_top5" <?php if ($_smarty_tpl->tpl_vars['css9']->value=='banners_top5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="banners_top_tablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets0"><input type="radio" name="angarconfig_input10" value="banners_top_tablets0" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets1"><input type="radio" name="angarconfig_input10" value="banners_top_tablets1" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets2"><input type="radio" name="angarconfig_input10" value="banners_top_tablets2" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets3"><input type="radio" name="angarconfig_input10" value="banners_top_tablets3" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets4"><input type="radio" name="angarconfig_input10" value="banners_top_tablets4" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_tablets5"><input type="radio" name="angarconfig_input10" value="banners_top_tablets5" <?php if ($_smarty_tpl->tpl_vars['css10']->value=='banners_top_tablets5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="banners_top_phones">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (phones):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones0"><input type="radio" name="angarconfig_input11" value="banners_top_phones0" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top_phones0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones1"><input type="radio" name="angarconfig_input11" value="banners_top_phones1" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top_phones1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones2"><input type="radio" name="angarconfig_input11" value="banners_top_phones2" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top_phones2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones3"><input type="radio" name="angarconfig_input11" value="banners_top_phones3" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top_phones3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones4"><input type="radio" name="angarconfig_input11" value="banners_top_phones4" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top_phones4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_top_phones5"><input type="radio" name="angarconfig_input11" value="banners_top_phones5" <?php if ($_smarty_tpl->tpl_vars['css11']->value=='banners_top5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box6"><?php echo smartyTranslate(array('s'=>'Banners bottom','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box6" class="collapse customization_container">

		<div id="banners_bottom">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom1"><input type="radio" name="angarconfig_input12" value="banners_bottom1" <?php if ($_smarty_tpl->tpl_vars['css12']->value=='banners_bottom1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom2"><input type="radio" name="angarconfig_input12" value="banners_bottom2" <?php if ($_smarty_tpl->tpl_vars['css12']->value=='banners_bottom2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom3"><input type="radio" name="angarconfig_input12" value="banners_bottom3" <?php if ($_smarty_tpl->tpl_vars['css12']->value=='banners_bottom3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom4"><input type="radio" name="angarconfig_input12" value="banners_bottom4" <?php if ($_smarty_tpl->tpl_vars['css12']->value=='banners_bottom4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom5"><input type="radio" name="angarconfig_input12" value="banners_bottom5" <?php if ($_smarty_tpl->tpl_vars['css12']->value=='banners_bottom5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>		
		</div>

		<div id="banners_bottom_tablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets0"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets0" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets1"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets1" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets2"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets2" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets3"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets3" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets4"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets4" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_tablets5"><input type="radio" name="angarconfig_input13" value="banners_bottom_tablets5" <?php if ($_smarty_tpl->tpl_vars['css13']->value=='banners_bottom_tablets5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="banners_bottom_phones">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Banners per row (phones):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones0"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones0" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom_phones0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones1"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones1" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom_phones1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 banner per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones2"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones2" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom_phones2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones3"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones3" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom_phones3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones4"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones4" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom_phones4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="banners_bottom_phones5"><input type="radio" name="angarconfig_input14" value="banners_bottom_phones5" <?php if ($_smarty_tpl->tpl_vars['css14']->value=='banners_bottom5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 banners per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box7"><?php echo smartyTranslate(array('s'=>'Featured categories','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box7" class="collapse customization_container">

		<div id="feat_cat_style">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Featured categories style:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_style1"><input type="radio" name="angarconfig_input45" value="feat_cat_style1" <?php if ($_smarty_tpl->tpl_vars['css45']->value=='feat_cat_style1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 1 ','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_style2"><input type="radio" name="angarconfig_input45" value="feat_cat_style2" <?php if ($_smarty_tpl->tpl_vars['css45']->value=='feat_cat_style2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 2 ','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_style3"><input type="radio" name="angarconfig_input45" value="feat_cat_style3" <?php if ($_smarty_tpl->tpl_vars['css45']->value=='feat_cat_style3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 3','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_style4"><input type="radio" name="angarconfig_input45" value="feat_cat_style4" <?php if ($_smarty_tpl->tpl_vars['css45']->value=='feat_cat_style4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 4','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="feat_cat">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Featured categories per row (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat2"><input type="radio" name="angarconfig_input46" value="feat_cat2" <?php if ($_smarty_tpl->tpl_vars['css46']->value=='feat_cat2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat3"><input type="radio" name="angarconfig_input46" value="feat_cat3" <?php if ($_smarty_tpl->tpl_vars['css46']->value=='feat_cat3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat4"><input type="radio" name="angarconfig_input46" value="feat_cat4" <?php if ($_smarty_tpl->tpl_vars['css46']->value=='feat_cat4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat5"><input type="radio" name="angarconfig_input46" value="feat_cat5" <?php if ($_smarty_tpl->tpl_vars['css46']->value=='feat_cat5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat6"><input type="radio" name="angarconfig_input46" value="feat_cat6" <?php if ($_smarty_tpl->tpl_vars['css46']->value=='feat_cat6') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'6 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>	
		</div>

		<div id="feat_cat_bigtablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Featured categories per row (big tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_bigtablets0"><input type="radio" name="angarconfig_input47" value="feat_cat_bigtablets0" <?php if ($_smarty_tpl->tpl_vars['css47']->value=='feat_cat_bigtablets0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_bigtablets1"><input type="radio" name="angarconfig_input47" value="feat_cat_bigtablets1" <?php if ($_smarty_tpl->tpl_vars['css47']->value=='feat_cat_bigtablets1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_bigtablets2"><input type="radio" name="angarconfig_input47" value="feat_cat_bigtablets2" <?php if ($_smarty_tpl->tpl_vars['css47']->value=='feat_cat_bigtablets2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_bigtablets3"><input type="radio" name="angarconfig_input47" value="feat_cat_bigtablets3" <?php if ($_smarty_tpl->tpl_vars['css47']->value=='feat_cat_bigtablets3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_bigtablets4"><input type="radio" name="angarconfig_input47" value="feat_cat_bigtablets4" <?php if ($_smarty_tpl->tpl_vars['css47']->value=='feat_cat_bigtablets4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="feat_cat_tablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Featured categories per row (tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_tablets0"><input type="radio" name="angarconfig_input48" value="feat_cat_tablets0" <?php if ($_smarty_tpl->tpl_vars['css48']->value=='feat_cat_tablets0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_tablets1"><input type="radio" name="angarconfig_input48" value="feat_cat_tablets1" <?php if ($_smarty_tpl->tpl_vars['css48']->value=='feat_cat_tablets1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_tablets2"><input type="radio" name="angarconfig_input48" value="feat_cat_tablets2" <?php if ($_smarty_tpl->tpl_vars['css48']->value=='feat_cat_tablets2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_tablets3"><input type="radio" name="angarconfig_input48" value="feat_cat_tablets3" <?php if ($_smarty_tpl->tpl_vars['css48']->value=='feat_cat_tablets3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_tablets4"><input type="radio" name="angarconfig_input48" value="feat_cat_tablets4" <?php if ($_smarty_tpl->tpl_vars['css48']->value=='feat_cat_tablets4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

		<div id="feat_cat_phones">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Featured categories per row (phones):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_phones0"><input type="radio" name="angarconfig_input49" value="feat_cat_phones0" <?php if ($_smarty_tpl->tpl_vars['css49']->value=='feat_cat_phones0') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_phones1"><input type="radio" name="angarconfig_input49" value="feat_cat_phones1" <?php if ($_smarty_tpl->tpl_vars['css49']->value=='feat_cat_phones1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_phones2"><input type="radio" name="angarconfig_input49" value="feat_cat_phones2" <?php if ($_smarty_tpl->tpl_vars['css49']->value=='feat_cat_phones2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="feat_cat_phones3"><input type="radio" name="angarconfig_input49" value="feat_cat_phones3" <?php if ($_smarty_tpl->tpl_vars['css49']->value=='feat_cat_phones3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 categories per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		</div>

	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box8"><?php echo smartyTranslate(array('s'=>'Homepage products layout','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box8" class="collapse customization_container">	

		<div class="home_tabs">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Homepage products in tabs or boxes:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="home_tabs1"><input type="radio" name="angarconfig_input24" value="home_tabs1" <?php if ($_smarty_tpl->tpl_vars['css24']->value=='home_tabs1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="home_tabs2"><input type="radio" name="angarconfig_input24" value="home_tabs2" <?php if ($_smarty_tpl->tpl_vars['css24']->value=='home_tabs2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Boxes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box9"><?php echo smartyTranslate(array('s'=>'Products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box9" class="collapse customization_container">	

		<div class="pl_1col_qty">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in one column layout (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_2"><input type="radio" name="angarconfig_input16" value="pl_1col_qty_2" <?php if ($_smarty_tpl->tpl_vars['css16']->value=='pl_1col_qty_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_3"><input type="radio" name="angarconfig_input16" value="pl_1col_qty_3" <?php if ($_smarty_tpl->tpl_vars['css16']->value=='pl_1col_qty_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_4"><input type="radio" name="angarconfig_input16" value="pl_1col_qty_4" <?php if ($_smarty_tpl->tpl_vars['css16']->value=='pl_1col_qty_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_5"><input type="radio" name="angarconfig_input16" value="pl_1col_qty_5" <?php if ($_smarty_tpl->tpl_vars['css16']->value=='pl_1col_qty_5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_6"><input type="radio" name="angarconfig_input16" value="pl_1col_qty_6" <?php if ($_smarty_tpl->tpl_vars['css16']->value=='pl_1col_qty_6') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'6 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="pl_2col_qty">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in two column layout (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_2"><input type="radio" name="angarconfig_input17" value="pl_2col_qty_2" <?php if ($_smarty_tpl->tpl_vars['css17']->value=='pl_2col_qty_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_3"><input type="radio" name="angarconfig_input17" value="pl_2col_qty_3" <?php if ($_smarty_tpl->tpl_vars['css17']->value=='pl_2col_qty_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_4"><input type="radio" name="angarconfig_input17" value="pl_2col_qty_4" <?php if ($_smarty_tpl->tpl_vars['css17']->value=='pl_2col_qty_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_5"><input type="radio" name="angarconfig_input17" value="pl_2col_qty_5" <?php if ($_smarty_tpl->tpl_vars['css17']->value=='pl_2col_qty_5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_6"><input type="radio" name="angarconfig_input17" value="pl_2col_qty_6" <?php if ($_smarty_tpl->tpl_vars['css17']->value=='pl_2col_qty_6') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'6 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="pl_3col_qty">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in three column layout (computers):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_3col_qty_2"><input type="radio" name="angarconfig_input18" value="pl_3col_qty_2" <?php if ($_smarty_tpl->tpl_vars['css18']->value=='pl_3col_qty_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_3col_qty_3"><input type="radio" name="angarconfig_input18" value="pl_3col_qty_3" <?php if ($_smarty_tpl->tpl_vars['css18']->value=='pl_3col_qty_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_3col_qty_4"><input type="radio" name="angarconfig_input18" value="pl_3col_qty_4" <?php if ($_smarty_tpl->tpl_vars['css18']->value=='pl_3col_qty_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			
	</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box10"><?php echo smartyTranslate(array('s'=>'Products per row on tablets and phones','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box10" class="collapse customization_container">	

		<div class="pl_1col_qty_bigtablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in one column layout (big tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_bigtablets_2"><input type="radio" name="angarconfig_input19" value="pl_1col_qty_bigtablets_2" <?php if ($_smarty_tpl->tpl_vars['css19']->value=='pl_1col_qty_bigtablets_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_bigtablets_3"><input type="radio" name="angarconfig_input19" value="pl_1col_qty_bigtablets_3" <?php if ($_smarty_tpl->tpl_vars['css19']->value=='pl_1col_qty_bigtablets_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_bigtablets_4"><input type="radio" name="angarconfig_input19" value="pl_1col_qty_bigtablets_4" <?php if ($_smarty_tpl->tpl_vars['css19']->value=='pl_1col_qty_bigtablets_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_bigtablets_5"><input type="radio" name="angarconfig_input19" value="pl_1col_qty_bigtablets_5" <?php if ($_smarty_tpl->tpl_vars['css19']->value=='pl_1col_qty_bigtablets_5') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'5 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_bigtablets_6"><input type="radio" name="angarconfig_input19" value="pl_1col_qty_bigtablets_6" <?php if ($_smarty_tpl->tpl_vars['css19']->value=='pl_1col_qty_bigtablets_6') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'6 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="pl_2col_qty_bigtablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in two column layout (big tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_bigtablets_2"><input type="radio" name="angarconfig_input20" value="pl_2col_qty_bigtablets_2" <?php if ($_smarty_tpl->tpl_vars['css20']->value=='pl_2col_qty_bigtablets_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_bigtablets_3"><input type="radio" name="angarconfig_input20" value="pl_2col_qty_bigtablets_3" <?php if ($_smarty_tpl->tpl_vars['css20']->value=='pl_2col_qty_bigtablets_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_2col_qty_bigtablets_4"><input type="radio" name="angarconfig_input20" value="pl_2col_qty_bigtablets_4" <?php if ($_smarty_tpl->tpl_vars['css20']->value=='pl_2col_qty_bigtablets_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			
		</div>

		<div class="pl_3col_qty_bigtablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row in three column layout (big tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_3col_qty_bigtablets_2"><input type="radio" name="angarconfig_input21" value="pl_3col_qty_bigtablets_2" <?php if ($_smarty_tpl->tpl_vars['css21']->value=='pl_3col_qty_bigtablets_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_3col_qty_bigtablets_3"><input type="radio" name="angarconfig_input21" value="pl_3col_qty_bigtablets_3" <?php if ($_smarty_tpl->tpl_vars['css21']->value=='pl_3col_qty_bigtablets_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			
		</div>

		<div class="pl_1col_qty_tablets">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row (tablets):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_tablets_2"><input type="radio" name="angarconfig_input22" value="pl_1col_qty_tablets_2" <?php if ($_smarty_tpl->tpl_vars['css22']->value=='pl_1col_qty_tablets_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_tablets_3"><input type="radio" name="angarconfig_input22" value="pl_1col_qty_tablets_3" <?php if ($_smarty_tpl->tpl_vars['css22']->value=='pl_1col_qty_tablets_3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'3 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_tablets_4"><input type="radio" name="angarconfig_input22" value="pl_1col_qty_tablets_4" <?php if ($_smarty_tpl->tpl_vars['css22']->value=='pl_1col_qty_tablets_4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'4 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			
		</div>

		<div class="pl_1col_qty_phones">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product per row (phones):','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_phones_1"><input type="radio" name="angarconfig_input23" value="pl_1col_qty_phones_1" <?php if ($_smarty_tpl->tpl_vars['css23']->value=='pl_1col_qty_phones_1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'1 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_1col_qty_phones_2"><input type="radio" name="angarconfig_input23" value="pl_1col_qty_phones_2" <?php if ($_smarty_tpl->tpl_vars['css23']->value=='pl_1col_qty_phones_2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 products per row','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			
		</div>

	</div>











	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box11"><?php echo smartyTranslate(array('s'=>'Product-list options','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box11" class="collapse customization_container">

		<div class="pl_border_type">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product-list border style:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_border_type1"><input type="radio" name="angarconfig_input25" value="pl_border_type1" <?php if ($_smarty_tpl->tpl_vars['css25']->value=='pl_border_type1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 1','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_border_type2"><input type="radio" name="angarconfig_input25" value="pl_border_type2" <?php if ($_smarty_tpl->tpl_vars['css25']->value=='pl_border_type2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Style 2','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div id="pl_name_height">
			<div class="options_title"><?php echo smartyTranslate(array('s'=>'Product-list name height:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <span class="value"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css26']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <span>px</span></div>
			<input type="range" name="angarconfig_input26" min="16" max="50" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css26']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		</div>

		<div id="pl_name_fs">
			<div class="options_title"><?php echo smartyTranslate(array('s'=>'Product-list name font-size:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <span class="value"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css27']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <span>px</span></div>
			<input type="range" name="angarconfig_input27" min="12" max="22" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css27']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		</div>

		<div id="pl_name_lh">
			<div class="options_title"><?php echo smartyTranslate(array('s'=>'Product-list name line-height:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <span class="value"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css28']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <span>px</span></div>
			<input type="range" name="angarconfig_input28" min="12" max="22" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css28']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
		</div>

		<div class="pl_button_icon">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide cart icon in button:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_icon_yes"><input type="radio" name="angarconfig_input29" value="pl_button_icon_yes" <?php if ($_smarty_tpl->tpl_vars['css29']->value=='pl_button_icon_yes') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_icon_no"><input type="radio" name="angarconfig_input29" value="pl_button_icon_no" <?php if ($_smarty_tpl->tpl_vars['css29']->value=='pl_button_icon_no') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="pl_button_qty">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product-list button qty:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_qty1"><input type="radio" name="angarconfig_input30" value="pl_button_qty1" <?php if ($_smarty_tpl->tpl_vars['css30']->value=='pl_button_qty1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'2 buttons','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_qty2"><input type="radio" name="angarconfig_input30" value="pl_button_qty2" <?php if ($_smarty_tpl->tpl_vars['css30']->value=='pl_button_qty2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Only "Add to cart"','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_qty3"><input type="radio" name="angarconfig_input30" value="pl_button_qty3" <?php if ($_smarty_tpl->tpl_vars['css30']->value=='pl_button_qty3') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Only view button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_button_qty4"><input type="radio" name="angarconfig_input30" value="pl_button_qty4" <?php if ($_smarty_tpl->tpl_vars['css30']->value=='pl_button_qty4') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Hide buttons','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="pl_desc">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide description in product-list:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_desc_yes"><input type="radio" name="angarconfig_input31" value="pl_desc_yes" <?php if ($_smarty_tpl->tpl_vars['css31']->value=='pl_desc_yes') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_desc_no"><input type="radio" name="angarconfig_input31" value="pl_desc_no" <?php if ($_smarty_tpl->tpl_vars['css31']->value=='pl_desc_no') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		
		<div class="pl_reviews">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide reviews and stars:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_reviews_yes"><input type="radio" name="angarconfig_input32" value="pl_reviews_yes" <?php if ($_smarty_tpl->tpl_vars['css32']->value=='pl_reviews_yes') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_reviews_no"><input type="radio" name="angarconfig_input32" value="pl_reviews_no" <?php if ($_smarty_tpl->tpl_vars['css32']->value=='pl_reviews_no') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>
		

		<div class="pl_availability">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide availability in product-list:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_availability_yes"><input type="radio" name="angarconfig_input33" value="pl_availability_yes" <?php if ($_smarty_tpl->tpl_vars['css33']->value=='pl_availability_yes') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="pl_availability_no"><input type="radio" name="angarconfig_input33" value="pl_availability_no" <?php if ($_smarty_tpl->tpl_vars['css33']->value=='pl_availability_no') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box12"><?php echo smartyTranslate(array('s'=>'Product page','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box12" class="collapse customization_container">	

		<div class="product_layout">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product page layout:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_layout1"><input type="radio" name="angarconfig_input34" value="product_layout1" <?php if ($_smarty_tpl->tpl_vars['css34']->value=='product_layout1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Layout 1','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_layout2"><input type="radio" name="angarconfig_input34" value="product_layout2" <?php if ($_smarty_tpl->tpl_vars['css34']->value=='product_layout2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Layout 2','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="product_hide_condition">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide condition info:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_hide_condition1"><input type="radio" name="angarconfig_input35" value="product_hide_condition1" <?php if ($_smarty_tpl->tpl_vars['css35']->value=='product_hide_condition1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_hide_condition2"><input type="radio" name="angarconfig_input35" value="product_hide_condition2" <?php if ($_smarty_tpl->tpl_vars['css35']->value=='product_hide_condition2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="product_hide_print">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide print:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_hide_print1"><input type="radio" name="angarconfig_input36" value="product_hide_print1" <?php if ($_smarty_tpl->tpl_vars['css36']->value=='product_hide_print1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_hide_print2"><input type="radio" name="angarconfig_input36" value="product_hide_print2" <?php if ($_smarty_tpl->tpl_vars['css36']->value=='product_hide_print2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="product_tabs">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product info in boxes or tabs:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_tabs1"><input type="radio" name="angarconfig_input37" value="product_tabs1" <?php if ($_smarty_tpl->tpl_vars['css37']->value=='product_tabs1') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Boxes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="product_tabs2"><input type="radio" name="angarconfig_input37" value="product_tabs2" <?php if ($_smarty_tpl->tpl_vars['css37']->value=='product_tabs2') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Tabs','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion" data-target="#customization_box13"><?php echo smartyTranslate(array('s'=>'Order and authetication page','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="customization_box13" class="collapse customization_container">

		<div class="order_gender">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide gender:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="order_gender_hide"><input type="radio" name="angarconfig_input38" value="order_gender_hide" <?php if ($_smarty_tpl->tpl_vars['css38']->value=='order_gender_hide') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="order_gender_show"><input type="radio" name="angarconfig_input38" value="order_gender_show" <?php if ($_smarty_tpl->tpl_vars['css38']->value=='order_gender_show') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

		<div class="order_birthday">
			<label class="options_title"><?php echo smartyTranslate(array('s'=>'Hide birthday:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="order_birthday_hide"><input type="radio" name="angarconfig_input39" value="order_birthday_hide" <?php if ($_smarty_tpl->tpl_vars['css39']->value=='order_birthday_hide') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
			<label class="order_birthday_show"><input type="radio" name="angarconfig_input39" value="order_birthday_show" <?php if ($_smarty_tpl->tpl_vars['css39']->value=='order_birthday_show') {?>checked<?php }?>><?php echo smartyTranslate(array('s'=>'No','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label>
		</div>

	</div>













</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['demo']->value==1) {?>
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
" class="button_at_config" name="submitAngarcss" />
	<input type="hidden" name="action" value="0" />
<?php } else { ?>
	<div class="button_disabled"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div class="must_save"><?php echo smartyTranslate(array('s'=>'You cant save demo version','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
<?php }?>


</form>





<div id="theme_color_icon"> </div>

<form id="theme_color" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">

<h5><?php echo smartyTranslate(array('s'=>'Theme color editor','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</h5>

<?php if ($_smarty_tpl->tpl_vars['demo']->value==1) {?>
<div class="must_save2"><?php echo smartyTranslate(array('s'=>'Remember to often save your changes.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</br><?php echo smartyTranslate(array('s'=>'After saving click on the shop logo and refresh the store several times to load your changes.','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
<?php }?>

<div id="accordion2">
<div class="panel">	


	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box1"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box1" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input1" id="nav_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color1']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border and separators:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input2" id="nav_border" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color2']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input3" id="top_font_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color3']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font bold color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input4" id="top_font_color2" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color4']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Top bar','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'icons color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input5" id="top_icons" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color5']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	</div>







	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box2"><?php echo smartyTranslate(array('s'=>'Header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box2" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input6" id="header_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color6']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Search button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input7" id="search_button" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color7']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Search button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input8" id="search_button_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color8']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input9" id="cart_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color9']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Account icon (tablet and smartfon)','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input59" id="account_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color59']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Slider active dot:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input10" id="slider_dot" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color10']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box3"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box3" class="collapse customization_container">


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input11" id="menu_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color11']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border and separators:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input12" id="menu_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color12']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input13" id="menu_font_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color13']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input14" id="menu_font_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color14']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input15" id="menu_li_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color15']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Submenu layout 2','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input16" id="submenu_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color16']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box4"><?php echo smartyTranslate(array('s'=>'Featured categories','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box4" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Module header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input60" id="feat_title" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color60']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Category name','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input61" id="feat_cat_title" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color61']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input62" id="feat_button_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color62']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input63" id="feat_button_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color63']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input64" id="feat_button_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color64']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input65" id="feat_button_bg_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color65']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input66" id="feat_button_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color66']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Subcategory button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input67" id="feat_button_border_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color67']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box5"><?php echo smartyTranslate(array('s'=>'Left/right column','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box5" class="collapse customization_container">


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Modules header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input17" id="title_block1" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color17']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Price color in left or right column:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input18" id="price_column_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color18']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box6"><?php echo smartyTranslate(array('s'=>'Homepage products layout','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box6" class="collapse customization_container">


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Blocks with products header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input19" id="index_title1" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color19']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box7"><?php echo smartyTranslate(array('s'=>'Product-list','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box7" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'New label background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input20" id="new_label" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color20']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Product name','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input21" id="product_name_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color21']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Price color in product-list:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input22" id="price_color_index" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color22']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input23" id="pl_cart_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color23']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input24" id="pl_cart_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color24']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input25" id="pl_cart_button_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color25']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input26" id="pl_cart_bg_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color26']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input27" id="pl_cart_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color27']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input28" id="pl_cart_button_border_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color28']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box8"><?php echo smartyTranslate(array('s'=>'Products from category','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box8" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Module header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input68" id="catprod_title" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color68']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Price color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input69" id="catprod_price" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color69']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'New label background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input70" id="catprod_label" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color70']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	</div>










	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box9"><?php echo smartyTranslate(array('s'=>'Featured manufacturers','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box9" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Module header','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input71" id="featman_title" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color71']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	</div>








	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box10"><?php echo smartyTranslate(array('s'=>'Footer','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box10" class="collapse customization_container">

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Icons before footer color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input29" id="footer_cms_icons" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color29']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input30" id="footer_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color30']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input31" id="footer_border" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color31']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'modules header border color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input32" id="footer_border_header" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color32']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input33" id="footer_font_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color33']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Newsletter button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input34" id="newsletter_button" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color34']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Newsletter button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input35" id="newsletter_button_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color35']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer bottom','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input36" id="footer2_background" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color36']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer bottom','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input37" id="footer2_border" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color37']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Footer bottom','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input38" id="footer2_font_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color38']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>








	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box11"><?php echo smartyTranslate(array('s'=>'Product page','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box11" class="collapse customization_container">


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Price color product page:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input39" id="price_color_product" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color39']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input40" id="product_cart_button_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color40']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input41" id="product_cart_button_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color41']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input42" id="product_cart_button_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color42']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input43" id="product_cart_button_bg_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color43']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input44" id="product_cart_button_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color44']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Add to cart" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input45" id="product_cart_button_border_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color45']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'Selected tab background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input46" id="product_selected_tab" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color46']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>


	</div>









	<div class="customization_title" data-toggle="collapse" data-parent="#accordion2" data-target="#color_box12"><?php echo smartyTranslate(array('s'=>'Other buttons','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div id="color_box12" class="collapse customization_container">


	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input47" id="green_button_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color47']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input48" id="green_button_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color48']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input49" id="green_button_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color49']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input50" id="green_button_bg_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color50']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input51" id="green_button_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color51']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Green" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input52" id="green_button_border_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color52']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>











	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input53" id="grey_button_bg" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color53']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input54" id="grey_button_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color54']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input55" id="grey_button_border_color" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color55']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'background:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input56" id="grey_button_bg_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color56']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button hover','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'font color:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input57" id="grey_button_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color57']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>

	<div class="color_modyficator form-group">
		<label class="options_title"><?php echo smartyTranslate(array('s'=>'"Grey" button','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>'border-color hover:','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</label></br>
		<input type="text" name="angarcolor_input58" id="grey_button_border_color_hover" class="form-control" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['color58']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	</div>








	</div>









</div>
</div>


<?php if ($_smarty_tpl->tpl_vars['demo']->value==1) {?>
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
" class="button_at_config" name="submitAngarcolor" />
	<input type="hidden" name="action" value="0" />
<?php } else { ?>
	<div class="button_disabled"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
	<div class="must_save"><?php echo smartyTranslate(array('s'=>'You cant save demo version','mod'=>'angarthemeconfigurator'),$_smarty_tpl);?>
</div>
<?php }?>


</form>


















<?php }?><?php }} ?>
