{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

<div class="panel"><h3><i class="icon-list-ul"></i> {l s='Slides list' mod='angarslider'}
	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')|escape:'htmlall':'UTF-8'}&configure=angarslider&addSlide=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="{l s='Add new' mod='angarslider'}" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="slidesContent">
		<div id="slides">
			{foreach from=$slides item=slide}
				<div id="slides_{$slide.id_slide|escape:'htmlall':'UTF-8'}" class="panel">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-3">
							<img src="{$image_baseurl|escape:'htmlall':'UTF-8'}{$slide.image|escape:'htmlall':'UTF-8'}" alt="{$slide.title|escape:'htmlall':'UTF-8'}" class="img-thumbnail" />
						</div>
						<div class="col-md-8">
							<h4 class="pull-left">
								#{$slide.id_slide|escape:'htmlall':'UTF-8'} - {$slide.title|escape:'htmlall':'UTF-8'}
								{if $slide.is_shared}
									<div>
										<span class="label color_field pull-left" style="background-color:#108510;color:white;margin-top:5px;">
											{l s='Shared slide' mod='angarslider'}
										</span>
									</div>
								{/if}
							</h4>
							<div class="btn-group-action pull-right">
								{$slide.status} {*HTML CONTENT*}

								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'htmlall':'UTF-8'}&configure=angarslider&id_slide={$slide.id_slide}">
									<i class="icon-edit"></i>
									{l s='Edit' mod='angarslider'}
								</a>
								<a class="btn btn-default"
									href="{$link->getAdminLink('AdminModules')|escape:'htmlall':'UTF-8'}&configure=angarslider&delete_id_slide={$slide.id_slide}">
									<i class="icon-trash"></i>
									{l s='Delete' mod='angarslider'}
								</a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
</div>
