<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0027)http://www.sdzs.com/?m=case -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/Public/Css/Home/Index/animate.min.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/normalize.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/index.css" 								/>
<link rel="stylesheet" href="/Public/Css/Home/Index/public.css" 								/>
<link rel="stylesheet" href="/Public/Css/Home/Index/layer.css" id="layui_layer_skinlayercss"	/>
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
<div class="banner">
	<div class="banner-slider">
		
	<div class="banner-viewport" style="overflow: hidden; position: relative;">
		<ul class="slides list clearfix" style="width: 800%; transition-duration: 0s; transform: translate3d(-1903px, 0px, 0px);">
			<li class="clone" aria-hidden="true" style="width: 1903px; float: left; display: block;"><a href="<?php echo U('Index/caseAll');?>" style="background-image: url(/Public/Img/Home/1461143337.jpg); background-size: 100% 100%;"></a></li>
			<li class="banner-active-slide" style="width: 1903px; float: left; display: block;"><a href="<?php echo U('Index/caseAll');?>" style="background-image: url(/Public/Img/Home/1461137353.jpg);background-size: 100% 100%;"></a></li>
			<li class="" style="width: 1903px; float: left; display: block;"><a href="<?php echo U('Index/caseAll');?>" style="background-image: url(/Public/Img/Home/1461142915.jpg);background-size: 100% 100%;"></a></li>
		</ul>
	</div>
				<ol class="banner-control-nav banner-control-paging"><!--li><a class="banner-active">1</a></li><li><a class="">2</a></li></ol--></div>
</div>
<div class="search">
	<div class="container clearfix">
		<div class="search-title pull-left"><span>PRODUCT SEARCH</span>大家都在搜：
							<?php if(is_array($rel['caseType'])): foreach($rel['caseType'] as $key=>$item): ?><a href="<?php echo U('Index/caseAll');?>/sreach/<?php echo ($item["casetypeText"]); ?>"><?php echo ($item["casetypeText"]); ?></a><?php endforeach; endif; ?>
							
							<!--a href="<?php echo U('Index/caseAll');?>">铝制门窗</a>
							<a href="<?php echo U('Index/caseAll');?>">医疗医药</a>
							<a href="<?php echo U('Index/caseAll');?>">机器人</a-->
					</div>
		<span>
		<div class="search-box pull-right">
			<div class="select pull-left">
				<span>案例</span>
				<!--<ul class="list">
					<li>案例</li>
					<li>案例1</li>
				</ul>-->
			</div>
			<input type="hidden">
			<input type="text" class="txt pull-left sreachText" placeholder="请输入关键字" name="keyword">
			<button type="submit" class="btn pull-left sreachSubmit" lin="<?php echo U('Index/caseAll');?>">搜索</button>
		</div>
		</span>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="crumb"><a href="/">奥莎德首页</a>&nbsp;&gt;&nbsp;<span><a href="<?php echo U('Index/caseAll');?>">成功案例</a></span></div>
		<div class="case-sort">
			<div class="sort-list clearfix" id="xl" num="<?php echo ($getU['caseArea']); ?>">
				<h3 class="pull-left">城市</h3>
				<ul class="list clearfix">
					<li class="active" cval="0">
						<a href="<?php echo U('Index/caseAll',array('caseType'=>$getU['caseType'],'caseSize'=>$getU['caseSize']));?>">全部</a>
					</li>
					<?php if(is_array($case['caseArea'])): foreach($case['caseArea'] as $key=>$item): ?><li class="" cval="0">
						<a href="<?php echo U('Index/caseAll',array('caseArea'=>$item['caseareaId'],'caseType'=>$getU['caseType'],'caseSize'=>$getU['caseSize']));?>"><?php echo ($item["caseareaText"]); ?></a>
					</li><?php endforeach; endif; ?>
					<!--li class="active" cval="0">
						<a href="<?php echo U('Index/caseAll',array('caseType'=>0,'caseSize'=>0));?>">全部</a>
					</li-->

				</ul>
			</div>
			<div class="sort-list clearfix" id="fg" num="<?php echo ($getU['caseType']); ?>">
				<h3 class="pull-left">类型</h3>
				<ul class="list clearfix">
					<!--li class="active" cval="0" href="javascript:;"><a>全部</a></li-->
						<li class="active" cval="0">
							<a href="<?php echo U('Index/caseAll',array('caseArea'=>$getU['caseArea'],'caseSize'=>$getU['caseSize']));?>">全部</a>
						</li>
						<?php if(is_array($case['caseType'])): foreach($case['caseType'] as $key=>$item): ?><li class="" cval="0">
							<a href="<?php echo U('Index/caseAll',array('caseArea'=>$getU['caseArea'],'caseType'=>$item['casetypeId'],'caseSize'=>$getU['caseSize']));?>"><?php echo ($item["casetypeText"]); ?></a>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="sort-list clearfix" id="mj" num="<?php echo ($getU['caseSize']); ?>">
				<h3 class="pull-left">面积</h3>
				<ul class="list clearfix">
					<li class="active" cval="0">
						<a href="<?php echo U('Index/caseAll',array('caseArea'=>$getU['caseArea'],'caseType'=>$getU['caseType']));?>">全部</a>
					</li>
					<?php if(is_array($case['caseSize'])): foreach($case['caseSize'] as $key=>$item): ?><li cval="60-90"><a href="<?php echo U('Index/caseAll',array('caseArea'=>$getU['caseArea'],'caseType'=>$getU['caseType'],'caseSize'=>$item['casesizeId']));?>"><?php echo ($item["casesizeText"]); ?>㎡</a></li><?php endforeach; endif; ?>
					
				</ul>
			</div>
		</div>

		<div class="case-list">
			<ul class="list clearfix">
				<?php if(is_array($case['content'])): foreach($case['content'] as $key=>$item): ?><li>
					<a href="<?php echo U('Index/caseDetail');?>/caseId/<?php echo ($item["caseId"]); ?>">
						<!--div class="pic"><img src="/Public/Img/Home/thumb (7).jpg"></div-->
						<div class="pic"><img src="/Public/Case/<?php echo ($item["caseId"]); ?>/1.jpg"></div>
						<div class="desc clearfix">
							<div class="hd pull-right">
								<!--img src="/Public/Img/Home/thumb_1484290085110867.jpg" class="pull-left"-->
							</div>
							<h3><?php echo ($item["caseTitle"]); ?></h3>
							<dl class="clearfix">
								<dd><?php echo ($item["caseCompany"]); ?></dd>
								<dd>　　　<?php echo ($item["caseSizeNum"]); ?>㎡</dd>
							</dl>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
				
			</ul>
		</div>
		<!--div class="pagenav">
			 <a class="btn">1</a> <a href="<?php echo U('Index/caseAll');?>"></a> <a href="<?php echo U('Index/caseAll');?>"></a> <a href="<?php echo U('Index/caseAll');?>"></a> <a class="btn go" href="<?php echo U('Index/caseAll');?>">下一页</a>
		</div-->
		<div class="pagenav">
			 <?php echo ($case["page"]); ?>
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




<script src="/Public/Js/Home/Index/hm.js"></script>
<script src="/Public/Js/Home/Index/hm(1).js"></script>
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
</script>
<script src="/Public/Js/Home/Index/jquery.flexslider.min.js"></script>
<script src="/Public/Js/Home/Index/wow.min.js"></script>
<script src="/Public/Js/Home/Index/layer.js"></script>
<script type="text/javascript" src="/Public/Js/Home/Index/layer_dialog.js"></script>
<script src="/Public/Js/Home/Index/objURL.js" type="text/javascript" charset="utf-8"></script>
<script>
	new WOW().init();
	$(function(){
		$(".banner-slider").flexslider({namespace:"banner-",animation:"slide",directionNav:false});
		$(".hardcover-slider li").hover(function(){
			var index = $(this).index();
			$(this).addClass("active").siblings("li").removeClass("active");
			$(".hardcover-slider .pic a").eq(index).fadeIn(200).siblings().hide();
		});
		$(".team-slider").flexslider({namespace:"team-",controlNav:false,prevText:"<",nextText:">"});

		/*function checkSt(){
			if($(window).scrollTop() >= $(".advantage").offset().top - $(window).height()/2){
				$(".advantage .list").addClass("active");
			}
			console.log($(window).scrollTop(),$(".advantage").offset().top);
		}
		$(window).scroll(function(){
			checkSt();
		});
		window.onload = function(){
			checkSt();
		}
		*/
	});
</script>
<script>


	/*var ajaxData = new Object();
	$(function(){	
	var myurl=new objURL();
	$(document).on('click','#xl li',function(){
		ajaxData.page = 1;
		ajaxData.lx_id = $(this).attr('cval');
		if(ajaxData.lx_id){
			var val= ajaxData.lx_id;
		}else{
			var val=myurl.get('xl');
		}
		var val1=myurl.get('fg');
		var val2=myurl.get('mj');
		var val3=myurl.get('hx');
		myurl.set("xl",val); 
		$(this).addClass('active').siblings().removeClass('active');
		location.href=myurl.url();
	});
	$(document).on('click','#fg li',function(){
		ajaxData.page = 1;
		ajaxData.fg_id = $(this).attr('cval');
		if(ajaxData.fg_id){
			var val1= ajaxData.fg_id;
		}else{
			var val1=myurl.get('fg');
		}
		var val=myurl.get('xl');
		var val2=myurl.get('mj');
		var val3=myurl.get('hx');
		//myurl.set("area_id",val); // 新增/修改 一个arg参数的值为data
		myurl.set("fg",val1);
		//myurl.set("layout_id",val2);
		var name = $(this).html();
		$(this).addClass('active').siblings().removeClass('active');
		location.href=myurl.url();
	});
	$(document).on('click','#mj li',function(){
		ajaxData.mj_id = $(this).attr('cval');
		if(ajaxData.mj_id){
			var val2= ajaxData.mj_id;
		}else{
			var val2=myurl.get('mj');
		}
		var val=myurl.get('xl');
		var val1=myurl.get('fg');
		var val3=myurl.get('hx');
		myurl.set("mj",val2);
		location.href=myurl.url();
	});
	$(document).on('click','#hx li',function(){
		ajaxData.page = 1;
		ajaxData.hx_id = $(this).attr('cval');
		if(ajaxData.hx_id){
				var val3= ajaxData.hx_id;
			}else{
			var val3=myurl.get('hx');
		}
		var val=myurl.get('xl');
		var val1=myurl.get('fg');
		var val2=myurl.get('mj');
		myurl.set("hx",val3);
		location.href=myurl.url();
	});
	});
	*/

	var xl = $('#xl').attr('num');
	if( xl ){
		$('#xl li').attr('class','');
		$('#xl li').eq(xl).attr('class','active');
	}

	var fg = $('#fg').attr('num');
	if( fg ){
		$('#fg li').attr('class','');
		$('#fg li').eq(fg).attr('class','active');
	}

	var mj = $('#mj').attr('num');
	if( mj ){
		$('#mj li').attr('class','');
		$('#mj li').eq(mj).attr('class','active');
	}


	</script>
</body></html>