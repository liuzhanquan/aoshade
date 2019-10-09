<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.sdzs.com/?m=case_detail&id=60 -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/Public/Css/Home/Index/animate.min.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/normalize.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/public.css"								/>
<link rel="stylesheet" href="/Public/Css/Home/Index/layer.css" id="layui_layer_skinlayercss" />
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo ($headInfo["webTitle"]); ?></title>
	
	<meta name="keywords" content="<?php echo ($headInfo["webKeywords"]); ?>">
	<meta name="description" content="<?php echo ($headInfo["webDescription"]); ?>">
	</head>
<body rlt="1">
<header id="header" class="header">
	<div class="topbar">
		<div class="container clearfix">
			<!--div class="pull-left">当前装修站&nbsp;|&nbsp;<span>杭州</span><a href="./Img/浙江圣都家居装饰集团官方网站.html">[切换]</a></div-->
			<!--div class="pull-right">
				<a href="javascript:void(0);" onclick="AddFavorite(window.location,document.title)">收藏奥莎德</a><span>|</span><a href="javascript:void(0);">网站地图</a><span>|</span><a href="http://www.sdzs.com/?m=contact">联系我们</a>
			</div-->
		</div>
	</div>
	<div class="head">
		<div class="container clearfix">
			<a href="/" class="head-logo pull-left"><img src="/Public/Img/Home/logo.png" alt="奥莎德" style="" draggable="false"></a>
			<div class="head_tell  pull-right">
					<div class="pic"><img src="/Public/Img/Home/head_tell.png" alt="">咨询热线</div>
					<div class="desc"><?php echo ($headInfo["webDescphone"]); ?></div>
			</div>
			<nav class="head-nav pull-right">
				<ul class="list clearfix">
					<li class="nosub <?php if(($headerStatus) == "0"): ?>active<?php endif; ?>"><a href="/">首页</a></li>
					<li class="hot <?php if(($headerStatus) == "1"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/caseAll');?>">成功案例</a></li>
					<li class="<?php if(($headerStatus) == "2"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
					<li class="nosub <?php if(($headerStatus) == "3"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/contact');?>">联系我们</a></li>
					<li class="nosub <?php if(($headerStatus) == "4"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/designer');?>">加入我们</a></li>
					<li class="<?php if(($headerStatus) == "5"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/about');?>">关于我们</a></li>
					<!--li class="nosub "><a href="http://www.sdzs.com/?m=classroom">家装讲堂</a></li>
					<li class=""><a href="http://www.sdzs.com/?m=service">客户服务</a></li-->
				</ul>
			</nav>
		</div>
	</div>
</header>	
<style>
	.designer-list ul{margin-right:-10px;}
	.designer-list li{float:left; width:288px; margin:0 10px 60px 0; border:1px solid #ccc;}
		.designer-list li .pic{display:block;overflow: hidden;height:201px}
			.designer-list li .pic img{display:block; width:100%;-webkit-transition:all .4s; -moz-transition:all .4s; -ms-transition:all .4s; -o-transition:all .4s; transition:all .4s; -webkit-transform:scale(1);-moz-transform:scale(1); -ms-transform:scale(1); -o-transform:scale(1); transform:scale(1);overflow: hidden;}
			.designer-list li a:hover .pic img{
					-webkit-transform: scale(1.4);
					-moz-transform: scale(1.4);
					-ms-transform: scale(1.4);
					-o-transform: scale(1.4);
					transform: scale(1.4);}
		.designer-list li .desc{padding:8px 16px 15px; border-top:1px solid #ccc;}
			.designer-list li .desc h3{height:40px; line-height:40px; overflow:hidden; margin:0; font-size:20px; font-weight:normal;}
				.designer-list li .desc h3 a{text-decoration:none;}
				.designer-list li .desc h3 span{margin-left:8px; font-size:13px; color:#818181;}
			.designer-list li .desc .btn{display:block; width:70px; height:26px; line-height:26px; overflow:hidden; font-size:13px; color:#fff; text-align:center; text-decoration:none; background-color:#E63C49;}
			.designer-list li .desc p{overflow:hidden; margin:13px 0 0; font-size:13px;}
			.case{background: #292a2e;}
			.case .title{color:#FFF}
			.video_div {position: fixed;background: #ccc;width: 480px;top: 50%;margin-top: -262px;}
			.video_div p{float: right;padding-right: 10px;}
			.video_div span{height: 40px;line-height: 40px;padding: 0px 30px;font-size: 20px;}
			.video_div1{position: fixed;width: 20px;bottom: 0px;background: #ccc;color: #000;font-size: 20px;padding: 10px;top: 50%;height: 110px;}
	</style>

<div class="main">
	<div class="container">
		<div class="crumb"><a href="/">奥莎德首页</a>&nbsp;&gt;&nbsp;<a href="<?php echo U('Index/caseAll');?>">成功案例</a>&nbsp;&gt;&nbsp;<span><?php echo ($case["caseTitle"]); ?></span></div>
		<div class="site clearfix">
			<div class="detail pull-left">
				<header>
					<h3><?php echo ($case["caseTitle"]); ?></h3>
					<div class="desc">
						<span>展览公司：<em><?php echo ($case["caseCompany"]); ?></em>     房屋面积：<?php echo ($case["caseSizeNum"]); ?>㎡     </span>
					</div>
				</header>
				<div class="case-photo">
					<div class="area-slider">
						<ul class="slides list clearfix">
								<?php if(($case["caseImg1"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg1"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg2"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg2"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg3"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg3"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg4"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg4"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg5"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg5"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg6"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg6"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg7"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg7"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg8"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg8"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<?php if(($case["caseImg9"]) != "99"): ?><li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
										<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg9"]); ?>.jpg" draggable="false">
									</li><?php endif; ?>
								<!--li style="text-align: center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class=""><img src="/Public/Img/Home/thumb (6).jpg" draggable="false"></li-->
								
						</ul>
					</div>
					<div class="area-control">
						
					<div class="area-control-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides list clearfix" style="width: 5800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
							
							
							<?php if(($case["caseImg1"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg1"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg2"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg2"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg3"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg3"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg4"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg4"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg5"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg5"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg6"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg6"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg7"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg7"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg8"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg8"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							<?php if(($case["caseImg9"]) != "99"): ?><li class="" style="width: 104px; float: left; display: block;">
									<img src="/Public/Case/<?php echo ($case["caseId"]); ?>/<?php echo ($case["caseImg9"]); ?>.jpg" draggable="false">
								</li><?php endif; ?>
							
							<!--li class="" style="width: 104px; float: left; display: block;"><img src="/Public/Img/Home/thumb (6).jpg" draggable="false"></li-->
															
						</ul></div><ul class="area-control-direction-nav"><li class="area-control-nav-prev"><a class="area-control-prev" href="<?php echo U('Index/caseDetail');?>"></a></li><li class="area-control-nav-next"><a class="area-control-next" href="<?php echo U('Index/caseDetail');?>"></a></li></ul></div>
				</div>
			</div>
			<!--div class="detailbar pull-right">
				<div class="relate bar-box">
					<header>本案套系</header>
					<ul class="list">
						<li><a>A6品质家居</a></li>
					</ul>
				</div>
				<div class="designer bar-box">
					<header>设计师</header>
					<div class="desc">
						<div class="hd clearfix">
							<div style="height: 113px;overflow: hidden;float: left;">
							<img src="/Public/Img/Home/1484290085110867.jpg" class="pull-left">
							</div>
							<h3>郑书升</h3>
							<p>设计总监</p>
						</div>
						<form action="" method="post" name="message" id="message" onsubmit="return checkForm(&#39;message&#39;);">
						<div class="form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="请输入您的姓名" title="请输入您的姓名">
							</div>
							<div class="form-group">
								<input type="text" name="tel" class="form-control" placeholder="请输入您的手机号码" title="请输入您的手机号码">
							</div>
							<div class="form-list clearfix">
								<div class="form-group col-6">
									<input type="text" class="form-control" placeholder="输入验证码" name="yzm" title="请输入验证码">
								</div>
								<div class="form-group col-6">
									<button type="button" class="btn btn-code" id="next">获取验证码</button>
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="41">
								<input type="hidden" name="act" value="sjs">
								<button type="submit" class="btn btn-submit">立即预约</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div-->
		</div>
		<div class="recommend">
			<header class="title">
				<h3>相似推荐</h3>
				<p>SIMILAR CASES</p>
			</header>
			<div class="case-list">
				<ul class="list clearfix">
					<?php if(is_array($case['similar'])): foreach($case['similar'] as $key=>$item): ?><li>
							<a href="<?php echo U('Index/caseDetail');?>/caseId/<?php echo ($item["caseId"]); ?>">
								<div class="pic"><img src="/Public/Case/<?php echo ($item["caseId"]); ?>/<?php echo ($item["caseImg1"]); ?>.jpg"></div>
								<div class="desc clearfix">
									<div class="hd pull-right">
										<!--img src="/Public/Img/Home/thumb (6).jpg" class="pull-left">
										张瑶		<span></span-->							</div>
									<h3><?php echo ($item["caseTitle"]); ?></h3>
									<dl class="clearfix">
										<dd><?php echo ($item["caseCompany"]); ?></dd>
										<dd>　　　<?php echo ($item["caseSizeNum"]); ?>㎡</dd>
									</dl>
								</div>
							</a>
						</li><?php endforeach; endif; ?>				
						<!--li>
							<a href="<?php echo U('Index/caseDetail');?>">
								<div class="pic"><img src="/Public/Img/Home/thumb (6).jpg"></div>
								<div class="desc clearfix">
									<div class="hd pull-right">
																		</div>
									<h3>翡翠城-现代简约</h3>
									<dl class="clearfix">
										<dd>现代简约</dd>
										<dd>100㎡</dd>
										<dd>两居</dd>
									</dl>
								</div>
							</a>
						</li-->
									</ul>
			</div>
		</div>
	</div>
</div>


<footer class="footer" id="footer">
	<!--div class="foot-top box">
		<div class="container clearfix">
			<div class="foot-news pull-left">
				<div class="tabnav tab-btn clearfix" id="tabNav1">
											<a href="javascript:void(0);" class="pull-left active">热点活动</a>
											<a href="javascript:void(0);" class="pull-left ">行业新闻</a>
											<a href="javascript:void(0);" class="pull-left ">促销新闻</a>
									</div>
				<div class="tabcont" id="tabCont1">
											<div class="foot-news-list">
							<ul class="list clearfix">
										<?php if(is_array($fNews['1'])): foreach($fNews['1'] as $key=>$item): ?><li>
												<h3><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>"><?php echo ($item["newsTitle"]); ?></a></h3>
												<p><?php echo (mb_substr($item["newsInfo"],0,50,"utf-8")); ?>...</p>
												<time><?php echo ($item["newsRelease"]); ?></time>
											</li><?php endforeach; endif; ?>
															</ul>
						</div>
											<div class="foot-news-list" style="display: none;">
							<ul class="list clearfix">
									<?php if(is_array($fNews['2'])): foreach($fNews['2'] as $key=>$item): ?><li>
												<h3><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>"><?php echo ($item["newsTitle"]); ?></a></h3>
												<p><?php echo (mb_substr($item["newsInfo"],0,50,"utf-8")); ?>...</p>
												<time><?php echo ($item["newsRelease"]); ?></time>
											</li><?php endforeach; endif; ?>
															</ul>
						</div>
											<div class="foot-news-list" style="display: none;">
							<ul class="list clearfix">
										<?php if(is_array($fNews['3'])): foreach($fNews['3'] as $key=>$item): ?><li>
												<h3><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>"><?php echo ($item["newsTitle"]); ?></a></h3>
												<p><?php echo (mb_substr($item["newsInfo"],0,50,"utf-8")); ?>...</p>
												<time><?php echo ($item["newsRelease"]); ?></time>
											</li><?php endforeach; endif; ?>
															</ul>
						</div>
						
				</div>
			</div>
		</div>
	</div-->
	
	

	<div class="foot-friend">
		<div class="container">
			友情链接 ：		</div>
	</div>
	<div class="foot-link box">
		<div class="container clearfix">
			<div class="" style="float:left;width:100px;height:200px;"></div>
			<dl>
				<dt>服务支持</dt>
				<dd><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=704037154&site=qq&menu=yes">在线客服</a></dd>
				<dd><a href="<?php echo U('Index/contact');?>">网站地图</a></dd>
			</dl>
			<dl>
				<dt>关于我们</dt>
				<dd><a href="<?php echo U('Index/about');?>">独家优势</a></dd>
				<dd><a href="<?php echo U('Index/designer');?>">加入我们</a></dd>
				<!--dd><a href="/Public/Img/Home/浙江圣都家居装饰集团官方网站.html">法律声明</a></dd>
				<dd><a href="/Public/Img/Home/浙江圣都家居装饰集团官方网站.html">合作申请</a></dd-->
			</dl>
			<dl>
				<dt>关注我们</dt>
				<dd><a href="/">新浪微博</a></dd>
				<dd><a href="/">QQ空间</a></dd>
			</dl>
			<div class="" style="float:left;width:150px;height:200px;"></div>
			<dl class="c">
				<dt>联系我们</dt>
				<dd>
					咨询热线
					<h3><?php echo ($headInfo["webDescphone"]); ?></h3>
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=704037154&site=qq&menu=yes" class="btn">在线咨询</a>
				</dd>
				<dd><?php echo ($headInfo["webCompanyname"]); ?></dd>
				<dd style="line-height:20px;"><?php echo ($headInfo["webCompnayarea"]); ?><br/><?php echo ($headInfo["webCompnayaddr"]); ?></dd>
			</dl>
			<!--dl>
				<dt>官方微信</dt>
				<dd><img src="/Public/Img/Home/img09.jpg"></dd>
			</dl-->
		</div>
	</div>
	<div class="foot-desc">
		<div class="container">
			<span style="margin-left:150px;"><?php echo ($headInfo["webContainer"]); ?><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010502002136" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/Public/Img/Home/ghs.png" style="float:left;"><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;"><?php echo ($headInfo["webBeian"]); ?></p></a></span>
		</div>
	</div>
</footer>
<!--div class="float-box">
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=704037154&site=qq&menu=yes" class="btn f0">在线客服</a>
	<a href="" class="btn f3" id="gotopBtn">返回顶部</a>
</div-->




<script src="/Public/Js/Home/Index/jquery.min.js"></script>
<script src="/Public/Js/Home/Index/base.js"></script>
<script src="/Public/Js/Home/Index/layer.js"></script>
<script type="text/javascript" src="/Public/Js/Home/Index/layer_dialog.js"></script>
<script> 
var WEB_DIR = '/' 
  function AddFavorite(sURL, sTitle) {
      sURL = encodeURI(sURL);
      try {
        window.external.addFavorite(sURL, sTitle);
      } catch (e) {
        try {
          window.sidebar.addPanel(sTitle, sURL, "");
        } catch (e) {
          liuAlert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
        }
      }
    }
</script><script src="/Public/Js/Home/Index/jquery.flexslider.min.js"></script>
<script src="/Public/Js/Home/Index/layer.js"></script>
<script type="text/javascript" src="/Public/Js/Home/Index/layer_dialog.js"></script>
<script type="text/javascript">
//检查表单通用函数,form 表单名称.
//在需要检查的字段添加 title属性,title属性将作为提示语
function checkForm(form){
	var form=eval("document."+form);
	for(i=0;i<form.elements.length;i++){
		var words=form.elements[i].title
		if(form.elements[i].value=='' && words){
			liuAlert(words);
			form.elements[i].focus();
			return false;
		}
	}
	return true;
}
</script>
<script type="text/javascript">
	$(function(){
		$('#next').on('click',function(){
			var that = this;
			mobi = $.trim($('input[name=tel]').val());
			var isMobile = new RegExp("^0?(13|15|18|14|17)[0-9]{9}$").test(mobi);
			if (!isMobile || mobi.length < 11) {
				liuAlert("请输入正确的11位手机号码。");
				return false;
			}
			var jsonData = {mobile:mobi};
			$.post(WEB_DIR +"?a=ajax&m=comm&ac=size",jsonData,function(rs){
					if (rs.error==0) {

		            	var second = 60; // 多少秒后重新获取验证码
		           		var timer = setInterval(function () {
			               	 second--;
			               	$(that).prop('disabled',true).html(second + '秒后重新获取');
			                if (second <= 0) {
			                    clearInterval(timer);
			                    $(that).prop('disabled',true).html('获取动态密码');
			                }
		           		 }, 1000);
					$('input[name=yzm]').val(rs.content);
					} else {
				    	liuTips(h);
		          	  $(that).prop('disabled',true).html('获取动态密码');
		        	}
				},'json');
			return false;
		});
});

		</script>
<script>
	$(function(){
		$(".area-control").flexslider({namespace:"area-control-",animation:"slide",controlNav:false,prevText:"",nextText:"",itemWidth:104,itemMargin:9,asNavFor:".area-slider"});
		$(".area-slider").flexslider({namespace:"area-slider-",directionNav:false,controlNav:false,sync:".area-control"});
		});
</script>
</body></html>