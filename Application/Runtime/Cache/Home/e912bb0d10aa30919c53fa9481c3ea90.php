<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.sdzs.com/?m=news_detail&id=23 -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
<link rel="stylesheet" href="/Public/Css/Home/Index/animate.min.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/normalize.css"							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/public.css"								/>
<link rel="stylesheet" href="/Public/Css/Home/Index/layer.css" id="layui_layer_skinlayercss"	/>
<link rel="stylesheet" href="/Public/Css/Home/Index/share_style1_16.css"						/>

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
		<div class="crumb"><a href="/">奥莎德首页</a>&nbsp;&gt;&nbsp;<a href="<?php echo U('Index/news');?>">新闻动态</a></div>
	</div>
	<div class="service-banner news-banner">
		<header class="title white-title">
			<h3>新闻中心</h3>
			<p>NEWS CENTER</p>
		</header>
	</div>
	<div class="container">
		<div class="news-detail">
			<header class="clearfix">
				<h3 style="text-align:center;"><?php echo ($result["info"]["newsTitle"]); ?></h3>
				<p class="pull-left">发布者：<?php echo ($result["info"]["newsName"]); ?>   发布时间：<?php echo ($result["info"]["newsRelease"]); ?>    浏览次数：<?php echo ($result["info"]["newsTimes"]); ?></p>
				<div class="bdsharebuttonbox pull-right bdshare-button-style1-16" data-bd-bind="1491474761186"><a href="/Index/newsDetail" class="bds_more" data-cmd="more"></a><a href="/Index/newsDetail" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="/Index/newsDetail" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="/Index/newsDetail" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="/Index/newsDetail" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="/Index/newsDetail" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
			</header>
			<section id="newsImgPath" newsId="<?php echo ($result["info"]["newsId"]); ?>">
				<?php echo ($result["info"]["newsContent"]); ?>
						</section>
			<div class="clearfix">
				<a href="<?php echo U('Index/news');?>" class="btn pull-right">返回列表&nbsp;<span>&gt;</span></a>
			</div>
			<footer>
				<?php if($result['listStatus'] == 3): ?><em><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($result["list"]["0"]["newsId"]); ?>"><?php echo ($result["list"]["0"]["newsTitle"]); ?></a></em>&nbsp;<a><span>&lt;</span>&nbsp;上一篇</a>&nbsp;&gt;<span><?php endif; ?>
				<?php if($result['listStatus'] == 1): ?></span>&nbsp;<a>&lt;下一篇&nbsp;<span>&gt;</span><em></em></a><em><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($result["list"]["0"]["newsId"]); ?>"><?php echo ($result["list"]["0"]["newsTitle"]); ?></a></em><?php endif; ?>
				<?php if($result['listStatus'] == 2): ?><em><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($result["list"]["0"]["newsId"]); ?>"><?php echo ($result["list"]["0"]["newsTitle"]); ?></a></em>&nbsp;<a><span>&lt;</span>&nbsp;上一篇</a>&nbsp;<span>|</span>&nbsp;<a>下一篇&nbsp;<span>&gt;</span><em></em></a><em><a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($result["list"]["2"]["newsId"]); ?>"><?php echo ($result["list"]["2"]["newsTitle"]); ?></a></em><?php endif; ?>
				
			</footer>
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
</script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
<script>
	function getMdl(){
	    var 
	        mdl  = '',
	        idx  = null,
	        adm  = 'Admin',
	        lctn = window.location,
	        host = window.location.host;
	        
	        lctn = String(lctn);
	        lctn = lctn.split('/');

	    for (var i = 0; i < lctn.length; i++) {
	        if(host == lctn[i]){
	           host = 1; 
	           continue;
	        }else if(adm == lctn[i]){
	            break;
	        }

	        if(1 == host){
	            idx = lctn[i].indexOf('.');

	            if(0 <= idx){
	                break;
	            }else if(-1 == idx && adm == idx){
	                mdl = lctn[i];
	            }
	        }
	    }

	    //return ('' == mdl) ? '' : ('/' + mdl);
	    return ('' == mdl) ? 'http://' + window.location.host : ('/' + mdl);
	}

	var newsId = $('#newsImgPath').attr('newsId');

	$.each($('#newsImgPath img'),function(index){
		var mdl = getMdl();
		var imgPath = $(this).attr('src');
		$(this).attr('src',mdl + '/Public/News/' + newsId + '/' + imgPath);
	});

</script>

</body></html>