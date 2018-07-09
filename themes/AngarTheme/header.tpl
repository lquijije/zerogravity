{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html id="mycss" {if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		{if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}

		{* AngarTheme *}
		<link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		
	<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

	{* AngarTheme *}
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso} 
	{$css1|escape:'html':'UTF-8'} {$css2|escape:'html':'UTF-8'} {$css3|escape:'html':'UTF-8'} {$css4|escape:'html':'UTF-8'} {$css5|escape:'html':'UTF-8'} {$css6|escape:'html':'UTF-8'} {$css7|escape:'html':'UTF-8'} {$css8|escape:'html':'UTF-8'} {$css9|escape:'html':'UTF-8'} {$css10|escape:'html':'UTF-8'} {$css11|escape:'html':'UTF-8'} {$css12|escape:'html':'UTF-8'} {$css13|escape:'html':'UTF-8'} {$css14|escape:'html':'UTF-8'} {$css15|escape:'html':'UTF-8'} {$css16|escape:'html':'UTF-8'} {$css17|escape:'html':'UTF-8'} 
	{$css18|escape:'html':'UTF-8'} {$css19|escape:'html':'UTF-8'} {$css20|escape:'html':'UTF-8'} {$css21|escape:'html':'UTF-8'} {$css22|escape:'html':'UTF-8'} {$css23|escape:'html':'UTF-8'} {$css24|escape:'html':'UTF-8'} {$css25|escape:'html':'UTF-8'} {$css26|escape:'html':'UTF-8'} {$css27|escape:'html':'UTF-8'} {$css28|escape:'html':'UTF-8'} {$css29|escape:'html':'UTF-8'} {$css30|escape:'html':'UTF-8'} {$css31|escape:'html':'UTF-8'} {$css32|escape:'html':'UTF-8'} {$css33|escape:'html':'UTF-8'} {$css34|escape:'html':'UTF-8'} {$css35|escape:'html':'UTF-8'} {$css36|escape:'html':'UTF-8'} {$css37|escape:'html':'UTF-8'} {$css38|escape:'html':'UTF-8'} {$css39|escape:'html':'UTF-8'} {$css40|escape:'html':'UTF-8'} {$css41|escape:'html':'UTF-8'} {$css42|escape:'html':'UTF-8'} {$css43|escape:'html':'UTF-8'} 
	{$css45|escape:'html':'UTF-8'} {$css46|escape:'html':'UTF-8'} {$css47|escape:'html':'UTF-8'} {$css48|escape:'html':'UTF-8'} {$css49|escape:'html':'UTF-8'} ">

	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<div id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</div>
		{/if}
		<div id="page">
			<div class="header-container">
				<header id="header">
					{capture name='displayBanner'}{hook h='displayBanner'}{/capture}
					{if $smarty.capture.displayBanner}
						<div class="banner">
							<div class="container2">
								<div class="row">
									{$smarty.capture.displayBanner}
								</div>
							</div>
						</div>
					{/if}
					{capture name='displayNav'}{hook h='displayNav'}{/capture}
					{if $smarty.capture.displayNav}
						<div class="nav">
							<div class="container">
								<div class="row">
									<nav>{$smarty.capture.displayNav}</nav>
								</div>
							</div>
						</div>
					{/if}
					<div>
						<div class="container">
							<div class="row">
								<div id="header_logo">
									<a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
										<img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
									</a>
								</div>
								{if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
							</div>
						</div>
					</div>

					{hook h='angarMenu'}
					<div class="clearfix"></div>

				</header>
			</div>

			{* AngarTheme *}
			{if $css7 == slider_position_top}
				{if $page_name == 'index'}
				<div id="slider_row">
					<div id="top_column">{hook h="displayTopColumn"}</div>
					<div class="clearfix"></div>
				</div>
				{/if}
			{/if}

			<div class="columns-container">
				<div id="columns" class="container">
					{if $page_name !='index' && $page_name !='pagenotfound'}
						{include file="$tpl_dir./breadcrumb.tpl"}
					{/if}

					{if $css7 == slider_position_top}
						{if $page_name == 'index'}
							{hook h='angarHomeCat'}
						{/if}
					{/if}

					<div class="row">
						{if isset($left_column_size) && !empty($left_column_size)}
						<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
						{/if}
						{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
						<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">

						{* AngarTheme *}
						<div class="center_bg"> 

						{* AngarTheme *}
						{if $css7 == slider_position_column}
							{if $page_name == 'index'}
							<div id="slider_row">
								<div id="top_column">{hook h="displayTopColumn"}</div>
								<div class="clearfix"></div>
							</div>

							{hook h='angarHomeCat'}

							{/if}
						{/if}

	{/if}
