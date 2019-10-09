<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0026)http://www.sdzs.com/?m=job -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="/Public/Css/Home/Index/animate.min.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/normalize.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/public.css"								/>
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

<div class="main">
	<div class="container">
		<div class="crumb"><a href="/">奥莎德首页</a>&nbsp;&gt;&nbsp;<span><a href="<?php echo U('Index/designer');?>">加入我们</a></span></div>
	</div>
	<div class="service-banner job-banner">
		<header class="title white-title">
			<!--h3>加入我们</h3>
			<p>RECRUITMENT</p-->
		</header>
	</div>
	<!--div class="service-nav profile-nav">
		<div class="container">
			<ul class="list clearfix">
				<li><a href="http://www.sdzs.com/?m=profile">圣都简介</a></li>
				<li><a href="http://www.sdzs.com/?m=honor">公司荣誉</a></li>
				<li><a href="http://www.sdzs.com/?m=history">发展历程</a></li>
				<li><a href="http://www.sdzs.com/?m=culture">圣都文化</a></li>
				<li class="active"><a href="/Public/Public/Img/Home/Home/招贤纳士-浙江圣都家居装饰集团官方网站.html">招贤纳士</a></li>
				<li><a href="http://www.sdzs.com/?m=news">新闻中心</a></li>
				<li><a href="http://www.sdzs.com/?m=contact">联系我们</a></li>
			</ul>
		</div>
	</div-->
	<div class="container">
		<div class="job-detail">
			<header class="about-title">
				<h3>在奥莎德 你能收获的不仅仅是高薪 还有成长和家人<br>欢迎志同道合的你加入</h3>
				<p>In AoShaDe you can not only harvest high-income growth and family welcome to join you like-minded</p>
			</header>
			<div class="job-sort">
				<dl class="clearfix" id="zpzw">
					<dt>在聘职位：</dt>
					<dd>
						<a cval="0" class="active">全部</a>
												<a cval="1">市场传讯运营部经理</a>
												<a cval="2">总经理助理</a>
												<!--a cval="3">项目经理</a>
												<a cval="4">职能</a-->
											</dd>
				</dl>
				<dl class="clearfix" id="gzdd">
					<dt>工作地点：</dt>
					<dd>
						<a cval="0" class="active">全部</a>
													<a cval="1">广州</a>
											</dd>
				</dl>
			</div>
			<div class="job-detail-list">
				<ul class="list">
									<li>
						<header>
							<h3>市场传讯运营部经理  [ 广州 ]</h3>
							<a href="javascript:void(0);" class="btn pull-right">查看更多</a>
							<p><span>5-10K</span>   经验不限 / 不限 / 全职</p>
						</header>
						<div class="desc">
							<h3>你将要负责：</h3>
							<p>1、建立和维护项目市场工作的互动机制，保障公司市场营销策略在各个项目中的有效贯彻及项目之间良好的沟通、借鉴和资源的综合利用</p>
							<p>2、熟练网络营销、微信、微博推广。</p>
							<p>2、根据展会的预算和时间结点运用准确的市场分析数据制定相关的市场推广计划；领导市场部工作人员有效的管理并完成市场部工作的目标。</p>
							
							
							<h3>我们能提供：</h3>
							<p>1、不低于友司的薪酬</p><p>2、大把的晋升机会</p><p>3、丰富的节假日福利</p>
							<h3>基本的要求：</h3><p>1、具备良好的市场开拓能力、服务意识和公关协调能力</p>
							<p>2、吃苦耐劳，具备较强的语言表达能力和沟通能力</p>
							<p>3、诚实守信，工作勤奋主动，具有良好的团队精神，能承受较强的工作压力，愿意接受工作挑战</p>
							<p>4、有良好的陈述技巧，性格外向，喜欢与人打交道，高度的工作热情有较强观察能力和应变能力</p>
							<h3>优先条件：</h3>
							<p>5年以上市场从业经历，2年以上市场经理工作经验</p><h3>
							更高期望：</h3><p>善于管理时间，良好的沟通能力</p>							<footer>
								<h3>如果你能胜任以上条件且对我们感兴趣，请</h3>
								<a href="osdexpo@163.com" class="btn">发送简历</a>
								<p>email：osdexpo@163.com</p>
								<p>tel：020-38981622</p>
							</footer>
						</div>
					</li>
										<li>
						<header>
							<h3>总经理助理  [ 广州 ]</h3>
							<a href="javascript:void(0);" class="btn pull-right">查看更多</a>
							<p><span>5-10K</span>   经验不限 / 本科 / 全职</p>
						</header>
						<div class="desc">
							<h3>你将要负责：</h3>
							<p>1、笔译公司相关展会项目的外事文件，包括函电及合同；</p>
							<p>2、与境外展会主办方的沟通，合作，谈判；拓展国际合作，对外合作资源的提升和整合；</p>
							<p>3、协助总经理调查研究国际展会项目，并进行推介和评估。</p>
							<h3>我们能提供：</h3>
							<p>1、不低于友司的薪酬</p>
							<p>2、大把的晋升机会</p>
							<p>3、丰富的节假日福利</p>
							<h3>基本的要求：</h3>
							<p>1、形象气质佳，优秀的职业修养，全国统招本科以上学历，英语熟练，英语六级以上，口语流利</p>
							<p>2、英语与国际贸易相关专业，具有境外学习或工作经历者优先</p>
							<p>3、较强的组织及综合协调管理能力、系统规划能力、卓越的公关拓展能力、优秀的沟通表达能力</p>
							<p>4、一年以上相关工作经验，具有良好的国际交流合作经验与背景者优先</p>
							<h3>优先条件：</h3><p>具有国际展览行业经验者优先考虑</p>
							<h3>更高期望：</h3><p>善于管理时间，良好的沟通能力</p>							<footer>
								<h3>如果你能胜任以上条件且对我们感兴趣，请</h3>
								<a href="osdexpo@163.com" class="btn">发送简历</a>
								<p>email：osdexpo@163.com</p>
								<p>tel：020-38981622</p>
							</footer>
						</div>
					</li>
										
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
</script><script src="/Public/Js/Home/Index/objURL.js" type="text/javascript" charset="utf-8"></script>
<script>
	var ajaxData = new Object();
	$(function(){
		$(".job-detail-list li .btn").click(function(){
			$(this).hide().parent().siblings(".desc").show();
		});
		var myurl=new objURL();
	$(document).on('click','#zpzw dd a',function(){
		ajaxData.page = 1;
		ajaxData.lx_id = $(this).attr('cval');
		if(ajaxData.lx_id){
			var val= ajaxData.lx_id;
		}else{
			var val=myurl.get('zw');
		}
		var val1=myurl.get('gz');
		myurl.set("zw",val); 
		$(this).addClass('active').siblings().removeClass('active');
		location.href=myurl.url();
	});
	$(document).on('click','#gzdd dd a',function(){
		ajaxData.page = 1;
		ajaxData.fg_id = $(this).attr('cval');
		if(ajaxData.fg_id){
			var val1= ajaxData.fg_id;
		}else{
			var val1=myurl.get('gz');
		}
		var val=myurl.get('zw');
		myurl.set("gz",val1);
		$(this).addClass('active').siblings().removeClass('active');
		location.href=myurl.url();
	});
	});

</script>

</body></html>