<?php defined('IN_ECJIA') or exit('No permission resources.');?> 
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.merchant_info.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="page-header">
	<div class="pull-left">
		<h2><!-- {if $ur_here}{$ur_here}{/if} --></h2>
  	</div>
  	<div class="pull-right">
  		{if $action_link}
		<a href="{$action_link.href}" class="btn btn-primary data-pjax">
			<i class="fa fa-reply"></i> {$action_link.text}
		</a>
		{/if}
  	</div>
  	<div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-lg-12 merchant-template-content">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal" name="theForm" action="{$form_action}"  method="post" enctype="multipart/form-data" data-toggle='from'>
                  	    <div class="form-group">
                            <label class="control-label col-lg-2">{t}选择模版：{/t}</label>
                            <div class="col-lg-6">
                                <span class="help-block">此模版只适用于门店小程序（点击图片可查看模版大图）</span>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label col-lg-2"></label>
                            <div class="col-lg-10">
                                <div class="template-content img-pwsp-list">
                                	<div class="template-item">
                                		<figure><span><a class="nopjax" href="{$app_url}template_1.png" data-size="248x500" data-med-size="200x403" title="点击放大" data-med="{$app_url}template_1.png"><img href="{$app_url}template_1.png" src="{$app_url}template_1.png" class="w200"/></a></span></figure>
                                	</div>
                                	<div class="template-item">
                                		<figure><span><a class="nopjax" href="{$app_url}template_2.png" data-size="248x500" data-med-size="200x403" title="点击放大" data-med="{$app_url}template_2.png"><img href="{$app_url}template_2.png" src="{$app_url}template_2.png" class="w200"/></a></span></figure>
                                	</div>
                                	<div class="template-item">
                                		<figure><span><a class="nopjax" href="{$app_url}template_3.png" data-size="248x500" data-med-size="200x403" title="点击放大" data-med="{$app_url}template_3.png"><img href="{$app_url}template_3.png" src="{$app_url}template_3.png" class="w200"/></a></span></figure>
                                	</div>
                                </div>
                            </div>
                            <label class="control-label col-lg-2"></label>
                            <div class="col-lg-10 m_b10">
                            	<div class="f_l">
	                                <input id="template_1" type="radio" name="shop_template" value="default1" {if $shop_template eq 'default1'} checked{/if}/>
	                                <label for="template_1">普通商城类模版<span class="help-block">适用于普通电商购物</span></label>
                                </div>
                                <div class="f_l m_l130">
	                                <input id="template_2" type="radio" name="shop_template" value="default2" {if $shop_template eq 'default2'} checked{/if}/>
	                                <label for="template_2">外卖类模版<span class="help-block">适用于同城餐饮外卖</span></label>
                                </div>
                                <div class="f_l m_l140">
	                                <input id="template_3" type="radio" name="shop_template" value="default3" {if $shop_template eq 'default3'} checked{/if}/>
	                                <label for="template_3">自助购物模版<span class="help-block">适用于自助买单、到店消费</span></label>
                                </div>
                        	</div>
                        </div>
                        
                      	<div class="form-group">
                        	<label class="control-label col-lg-2"></label>
                            <div class="col-lg-10">
                                <div class="template-content img-pwsp-list">
                                	<div class="template-item">
                                		<figure><span><a class="nopjax" href="{$app_url}template_4.png" data-size="248x500" data-med-size="200x403" title="点击放大" data-med="{$app_url}template_4.png"><img href="{$app_url}template_4.png" src="{$app_url}template_4.png" class="w200"/></a></span></figure>
                                	</div>
                                </div>
                            </div>
                            <label class="control-label col-lg-2"></label>
                            <div class="col-lg-10 m_b10">
                            	<div class="f_l">
	                                <input id="template_4" type="radio" name="shop_template" value="default4" {if $shop_template eq 'default4'} checked{/if}/>
	                                <label for="template_4">优惠买单模版<span class="help-block">适用于到店支付、享受店铺优惠</span></label>
                                </div>
                        	</div>
                        </div>
                        <div class="form-group m_t20">
                            <div class="col-lg-6 col-md-offset-2">
                                <input class="btn btn-info" type="submit" name="name" value="确定">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg">
	</div>
	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">
		<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		<!-- don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item">
			</div>
			<div class="pswp__item">
			</div>
			<div class="pswp__item">
			</div>
		</div>
		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<!--  Controls are self-explanatory. Order can be changed. -->
				<div class="pswp__counter">
				</div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip">
				</div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>
			<div class="pswp__caption">
				<div class="pswp__caption__center">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- {/block} -->
