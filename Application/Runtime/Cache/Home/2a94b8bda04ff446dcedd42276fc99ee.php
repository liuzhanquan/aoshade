<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0020)http://www.sdzs.com/ -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

<link rel="stylesheet" href="/Public/Css/Home/Index/animate.min.css" 						/>
<link rel="stylesheet" href="/Public/Css/Home/Index/normalize.css" 							/>
<link rel="stylesheet" href="/Public/Css/Home/Index/index.css" 								/>
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

<div class="box">
	<div class="container">
		<header class="title">
			<h3>精选案例</h3>
			<p>Selecte case</p>
		</header>
		<div class="clearfix caseListBox">
			<!--img src="/Public/Img/Home/img02.jpg" class="pull-left" draggable="false"-->
			<!--div class="hardcover-slider pull-right">
				<div class="pic pull-left">
					<?php if(is_array($rel['recent'])): foreach($rel['recent'] as $key=>$item): ?><a href="<?php echo U('Index/caseDetail');?>/caseId/<?php echo ($item['caseId']); ?>" <?php if($key == 0): ?>display="block"<?php else: ?>display="none"<?php endif; ?> ><img src="/Public/Case/<?php echo ($item["caseId"]); ?>/1.jpg" draggable="false"></a><?php endforeach; endif; ?>
					
					<a href="<?php echo U('Index/caseDetail');?>" style="display: none;"><img src="/Public/Img/Home/thumb (4).jpg" draggable="false"></a>
					<a href="<?php echo U('Index/caseDetail');?>" style="display: none;"><img src="/Public/Img/Home/thumb (3).jpg" draggable="false"></a>
					<a href="<?php echo U('Index/caseDetail');?>" style="display: none;"><img src="/Public/Img/Home/thumb (1).jpg" draggable="false"></a>
				</div>
				<ul class="pull-right list recentTitle">
					<?php if(is_array($rel['caseType'])): foreach($rel['caseType'] as $key=>$item): ?><li class="h0 <?php if(($key) == "0"): ?>active<?php endif; ?>"><?php echo ($item["casetypeText"]); ?></li><?php endforeach; endif; ?>
					
					<li class="h1">铝制门窗</li>
					<li class="h2">医疗医药</li>
					<li class="h3">电子设备</li>
				</ul>
			</div-->
			<?php if(is_array($rel['recent'])): foreach($rel['recent'] as $key=>$item): ?><a href="<?php echo U('Index/caseDetail');?>/caseId/<?php echo ($item['caseId']); ?>" <?php if($key == 0): ?>display="block"<?php else: ?>display="none"<?php endif; ?> style="width:32%;height:200px;display:block;float:left;margin:0.6% 0.6%;position:relative;overflow:hidden;" >
					<img style="width:100%;height:100%;" src="/Public/Case/<?php echo ($item["caseId"]); ?>/1.jpg" draggable="false">
					<div class="caseTitleBox" style="width:100%;height:100%;position:absolute;top:100%;left:0px;z-index:5;color:#fff;text-align:center;">
						<!--div class="caseTitleOne" style="margin-top:70px;font-size:22px;"><?php echo ($item["caseTitle"]); ?></div-->
						<div class="caseTitleOne" style="line-height:200px;font-size:22px;"><?php echo ($item["caseCompany"]); ?></div>
					</div>
					<div class="caseBGColor" style="width:100%;height:100%;background:#000;position:absolute;top:100%;left:0px;opacity:0.7;z-index:4;"></div>
				</a><?php endforeach; endif; ?>
			<!--div class="caseListBox" >
				<img src="" alt="">
			</div>
			<div class="caseListBox" style="width:32%;height:200px;background:#f00;float:left;margin:0.6% 0.6%;"></div>
			<div class="caseListBox" style="width:32%;height:200px;background:#f00;float:left;margin:0.6% 0.6%;"></div>
			<div class="caseListBox" style="width:32%;height:200px;background:#f00;float:left;margin:0.6% 0.6%;"></div-->
		</div>
	</div>
</div>
<!--div class="case box">
	<div class="container">
		<header class="title">
			<h3>案例中心</h3>
			<p>CASE CENTER</p>
		</header>
		<div class="tabnav tab-btn" id="tabNav0">
							<a href="javascript:void(0);" class="btn active" style="color:#FFF">展览</a>
							<a href="javascript:void(0);" class="btn " style="color:#FFF">展厅</a>
							<a href="javascript:void(0);" class="btn " style="color:#FFF">活动</a>
							<!--a href="javascript:void(0);" class="btn " style="color:#FFF">混搭</a>
							<a href="javascript:void(0);" class="btn " style="color:#FFF">美式</a-->
					<!--/div>
		<div class="tabcont" id="tabCont0">
						<div class="site-list">
				<ul class="list clearfix">
															<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (5).jpg"></div>
							<div class="desc">
								<h3>FocalTech照明展方案</h3>
								<p></p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (6).jpg"></div>
							<div class="desc">
								<h3>金色黎明</h3>
								<p>金色黎明</p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (7).jpg"></div>
							<div class="desc">
								<h3>中正零度LED展台</h3>
								<p></p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (8).jpg"></div>
							<div class="desc">
								<h3>格力 2017 AHR</h3>
								<p>格力</p>
							</div>
						</a>
					</li>
																																												</ul>
			</div>
						<div class="site-list" style="display: none;">
				<ul class="list clearfix">
															<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (9).jpg"></div>
							<div class="desc">
								<h3>西安肆腾展台设计</h3>
								<p></p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (10).jpg"></div>
							<div class="desc">
								<h3>英特尔工具展台</h3>
								<p></p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (11).jpg"></div>
							<div class="desc">
								<h3>宝莱特展台搭建</h3>
								<p></p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (12).jpg"></div>
							<div class="desc">
								<h3>宝莱特展台搭建</h3>
								<p></p>
							</div>
						</a>
					</li>
														</ul>
			</div>
						<div class="site-list" style="display: none;">
				<ul class="list clearfix">
															<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (5).jpg"></div>
							<div class="desc">
								<h3>南南铝业 2016 ALUMINIUM</h3>
								<p>南南铝业</p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (8).jpg"></div>
							<div class="desc">
								<h3>忠旺集团 2016 ALUMINIUM</h3>
								<p>忠旺集团</p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (10).jpg"></div>
							<div class="desc">
								<h3>ALUK 2016 中国国际门窗</h3>
								<p>ALUK</p>
							</div>
						</a>
					</li>
																				<li>
						<a href="<?php echo U('Index/caseDetail');?>">
							<div class="pic"><img src="/Public/Img/Home/thumb (12).jpg"></div>
							<div class="desc">
								<h3>北江纺织 2016 中国国际纺织面料及辅料</h3>
								<p>北江纺织</p>
							</div>
						</a>
					</li>
																								</ul>
			</div>
						
	</div>
	</div>
</div>
<!--<div class="box01"></div>
<div class="box02"></div>-->
<div class="info" >
	<div class="container clearfix">
		<div class="pic pull-left wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
			<img src="/Public/Img/Home/logo.png">
		</div>
		<h3 class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;">奥莎德</h3>
		<h4 class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;">&nbsp;&nbsp;&nbsp;Design  Your Idea</h4>
		<h5 class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;">展览主办、展位搭建，展示设计、策划于一身</h5>
		<h6 class="wow slideInRight" style="visibility: visible; animation-name: slideInRight;"><span>奥莎德</span> - 设计你所想~· </h6>
		<ul class="clearfix wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
			<li class="green"><p>专&nbsp;业</p>高标准</li>
			<li class="coffee"><p>品&nbsp;质</p>高品质</li>
			<li class="blue"><p>服&nbsp;务</p>高格调</li>
		</ul>
	</div>
</div>
<!--div class="advantage">
	<img src="/Public/Img/Home/index02.png" class="pic">
	<ul class="list active">
		<li class="a0"><p>按套收费报价清晰</p></li>
		<li class="a1"><p>国际主材环保安心</p></li>
		<li class="a2"><p>名师设计理想家居</p></li>
		<li class="a3"><p>自有施工随时监控</p></li>
		<li class="a4"><p>预算清晰拒绝增项</p></li>
		<li class="a5"><p>品质保证安住无忧</p></li>
	</ul>
	<a href="Index/about" class="btn"></a>
</div>
<div class="team box">
	<div class="container">
		<header class="title">
			<h3>设计团队</h3>
			<p>DESIGN TEAM</p>
		</header>
		<div class="designer-list">
			<ul class="list clearfix">
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=6">	<div class="pic"><img src="/Public/Img/Home/1484376588666261.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=6">章芸</a><span>首席设计师</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>个性没有定式，品质高于一切...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=7">	<div class="pic"><img src="/Public/Img/Home/1484377088974540.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=7">梁思思</a><span>首席设计师</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>把实用与审美相结合。充分...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=15">	<div class="pic"><img src="/Public/Img/Home/1483335954579336.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=15">顾屹 </a><span>导师设计师</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>设计以人为本，理性与灵性的...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=16">	<div class="pic"><img src="/Public/Img/Home/1484295701713036.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=16">李晶晶</a><span>设计导师</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>装饰家，不需要脸谱化；生活，拒...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=18">	<div class="pic"><img src="/Public/Img/Home/1484298080101197.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=18">童文奇</a><span>设计导师</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>设计源于生活，生活诠释自我...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=19">	<div class="pic"><img src="/Public/Img/Home/1484371048206294.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=19">戴希文</a><span>设计总监</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>室内设计是设计师与客户共...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=25">	<div class="pic"><img src="/Public/Img/Home/1484372583107063.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=25">黄永林</a><span>设计总监</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>设计的核心是一种创造行为...</p>
						</div>
					</li>
									<li>
						<a href="http://www.sdzs.com/?m=designer_detail&id=26">	<div class="pic"><img src="/Public/Img/Home/1484372038781586.jpg"></div></a>
						<div class="desc clearfix">
							<h3><a href="http://www.sdzs.com/?m=designer_detail&id=26">金晨星</a><span>设计总监</span></h3>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" class="btn pull-right">在线咨询</a>
							<p>人为的设计生活方式，是为了...</p>
						</div>
					</li>
								
			</ul>
		</div>
		<!---</div>-->
	<!--/div>
</div-->
<!--div class="site box">
	<div class="container">
		<header class="title white-title">
			<h3>在建工地</h3>
			<p>CONSTRUCTION SITE</p>
		</header>
		<div class="site-list site-list3">
			<ul class="list clearfix">
								<li class="show">
					<a href="http://www.sdzs.com/?m=site_detail&id=16">
							<div class="pic"><img src="/Public/Img/Home/1483604697323857.jpg"></div>
						<div class="desc">
							<h3>当前阶段：水电阶段</h3>
							<p>田园牧歌 催先生 水电验收</p>
						</div>
					</a>
				</li>
								<li class="show">
					<a href="http://www.sdzs.com/?m=site_detail&id=17">
							<div class="pic"><img src="/Public/Img/Home/1483604882262924.jpg"></div>
						<div class="desc">
							<h3>当前阶段：收尾阶段</h3>
							<p>西溪海小海 89方 现代风即将完工</p>
						</div>
					</a>
				</li>
								<li class="show">
					<a href="http://www.sdzs.com/?m=site_detail&id=14">
							<div class="pic"><img src="/Public/Img/Home/1481793685807749.jpg"></div>
						<div class="desc">
							<h3>当前阶段：水电阶段</h3>
							<p>绿城西子.田园牧歌</p>
						</div>
					</a>
				</li>
							</ul>
		</div>
	</div>
</div>
<div class="progress box">
	<div class="container">
		<header class="title">
			<h3>装修流程</h3>
			<p>RENOVATION PROCESS</p>
		</header>
		<div class="progress-list">
			<ul class="list clearfix">
				<li class="p0">
					<div class="pic"><img src="/Public/Img/Home/progress01.png" draggable="false"></div>
					<h3>在线沟通/了解需求</h3>
					<p>ONLINE CHATING</p>
				</li>
				<li class="p1">
					<div class="pic"><img src="/Public/Img/Home/progress02.png" draggable="false"></div>
					<h3>量房勘测/配置方案</h3>
					<p>MEASURING</p>
				</li>
				<li class="p2">
					<div class="pic"><img src="/Public/Img/Home/progress03.png" draggable="false"></div>
					<h3>合同签订/出施工图</h3>
					<p>SIGNING THE CONTRACT</p>
				</li>
				<li class="p3">
					<div class="pic"><img src="/Public/Img/Home/progress04.png" draggable="false"></div>
					<h3>展厅选材/开工大吉</h3>
					<p>CHOOSE MATERIAL</p>
				</li>
			</ul>
		</div>
		<footer>
			<h3>咨询热线</h3>
			<a href="javascript:;">400-0571-800</a>
		</footer>
	</div>
</div-->
<div class="about box" style="background-size:100%;">
	<div class="container clearfix">
		<!--ul class="list clearfix">
			<li><img src="/Public/Img/Home/about01.png"></li>
			<li><img src="/Public/Img/Home/about02.png"></li>
			<li><img src="/Public/Img/Home/about03.png"></li>
			<li><img src="/Public/Img/Home/about04.png"></li>
		</ul-->
		<div class="pic pull-left"><img src="/Public/Img/Home/img07.jpg" draggable="false"></div>
		<div class="desc">
			<h3>走进奥莎德</h3>
			<h4>　　　ABOUT OSD</h4>
			<p>	广州奥莎德展览服务有限公司是集展览主办、展示设计、展览建造、展示策划等于一身。设计实力雄厚，承建能力非凡，多年来成功地在广州、深圳、上海、北京、香港、美国、德国及日本等境内外地区和国家承建过大批展览特装工程和主场策划设计与服务，形成了一整套系统的展览服务体系。奥莎德展览以设计...</p>
			<a href="<?php echo U('Index/about');?>" class="btn"></a>
		</div>
	</div>
</div>
<!--div class="box">
	<div class="container">
		<header class="title">
			<h3>奥莎德印记</h3>
			<p> OSD MARKING</p>
		</header>
		<div class="mark-list">
			<ul class="list clearfix">
							<li>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/1">
					<div class="pic"><img src="/Public/Img/Home/1483605468616301.png"></div></a>
					<h3>奥莎德文化季</h3>
					<time>2016/10/28</time>
				</li>
							<li>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/1">
					<div class="pic"><img src="/Public/Img/Home/1483605870132761.png"></div></a>
					<h3>以热情荡起激情 托梦想共创辉煌</h3>
					<time>2017/01/15</time>
				</li>
							<li>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/1">
					<div class="pic"><img src="/Public/Img/Home/1483606340240977.png"></div></a>
					<h3>奥莎德健康精装体验</h3>
					<time>2017/01/05</time>
				</li>
							<li>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/1">
					<div class="pic"><img src="/Public/Img/Home/1483606501699610.png"></div></a>
					<h3>交流促合作 | 奥莎德海外体验</h3>
					<time>2017/01/05</time>
				</li>
						</ul>
		</div>
	</div>
</div-->
<!--<div class="video_div"><span>圣都宣传片</span>
<p><img src="/views/default/images/closeBtn.png"/></p>
<embed id="div_1" type="application/x-shockwave-flash" width="480" height="360" wmode="opaque" allowfullscreen="true" allowscriptaccess="always" src="/views/default/images/player.swf" flashvars="image=http://www.ckplayer.com/down/pic6.4.jpg&file=http://movie.ks.js.cn/flv/other/2014/06/20-2.flv"></embed>
</div>
<div class="video_div1" style="display:none">
圣都宣传片<br/>>>
</div>-->

<div class="wrap fadeInUp wow animated" id="lzimg" style="overflow: hidden; margin-top: 50px; visibility: visible; animation-name: fadeInUp;">
	<header class="title">
			<h3>新闻中心</h3>
			<p>News Center</p>
		</header>
		<div class="box_news bjxw_news">
		<div class="news_tit">
		<a href="<?php echo U('Index/news');?>" title="奥莎德新闻">查看更多</a>
			展会排期
		</div>
		<div class="news_img">
		<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($rel["newsOneTitle"]["newsId"]); ?>" title="<?php echo ($rel["newsOneTitle"]["newsTitle"]); ?>">
		<img src="/Public/News/<?php echo ($rel["newsOneTitle"]["newsId"]); ?>/1.jpg" style="width:375px;height:187px;"  alt="<?php echo ($rel["newsOneTitle"]["newsTitle"]); ?>">
		<p> <em><?php echo ($rel["newsOneTitle"]["newsTitle"]); ?></em>
		</p>
		</a>
		</div>
		<ul>
			<?php if(is_array($rel['newsOne'])): foreach($rel['newsOne'] as $key=>$item): ?><li>
					<font><?php echo ($item["newsRelease"]); ?></font>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>" title="<?php echo ($item["newsTitle"]); ?>"><?php echo (mb_substr($item["newsTitle"],0,15,'utf-8')); ?></a>
				</li><?php endforeach; endif; ?>
		<!--li>
		<font>2017-03-31</font>
		<a href="" title="请给空巢青年第二个家@boss">请给空巢青年第二个家@boss</a>
		</li>
		<li>
		<font>2017-03-29</font>
		<a href="" title="中山人才节主场搭建，奥莎德工艺震撼上线">中山人才节主场搭建，工艺震撼...</a>
		</li>
		<li>
		<font>2017-03-22</font>
		<a href="" title="想你，想带你去汗汗家具展">想你，想带你去汗汗家具展</a>
		</li>
		<li>
		<font>2017-03-17</font>
		<a href="" title="奥莎德展览成为中国教育装备展示会推荐搭建商">展览成为中国教育装备展示会推...</a>
		</li>
		<li>
		<font>2017-03-17</font>
		<a href="" title="要脸的，看这里">要脸的，看这里</a>
		</li-->
		</ul>
		</div>
		<div class="box_news ztbk_news">
		<div class="news_tit">
		<a href="<?php echo U('Index/news');?>" title="展台百科">查看更多</a>
		展台百科
		</div>
		<div class="news_img">
		<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($rel["newsTwoTitle"]["newsId"]); ?>" title="<?php echo ($rel["newsTwoTitle"]["newsTitle"]); ?>">
		<img  src="/Public/News/<?php echo ($rel["newsTwoTitle"]["newsId"]); ?>/1.jpg" style="width:375px;height:187px;"  alt="<?php echo ($rel["newsTwoTitle"]["newsTitle"]); ?>">
		<p> <em><?php echo ($rel["newsTwoTitle"]["newsTitle"]); ?></em>
		</p>
		</a>
		</div>
		<ul>
			<?php if(is_array($rel['newsTwo'])): foreach($rel['newsTwo'] as $key=>$item): ?><li>
					<font><?php echo ($item["newsRelease"]); ?></font>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>" title="<?php echo ($item["newsTitle"]); ?>"><?php echo (mb_substr($item["newsTitle"],0,15,'utf-8')); ?></a>
				</li><?php endforeach; endif; ?>
		<!--li>
		<font>2017-02-08</font>
		<a href="" title="展台制作应遵循的质量标准">展台制作应遵循的质量标准</a>
		</li>
		<li>
		<font>2017-02-07</font>
		<a href="" title="展台的标准和分类">展台的标准和分类</a>
		</li>
		<li>
		<font>2017-02-06</font>
		<a href="" title="奥莎德展览：展台标准及展位分类规范">展览：展台标准及展位分类规范</a>
		</li>
		<li>
		<font>2016-07-14</font>
		<a href="" title="展厅设计知识普及——如何搞定施工图">展厅设计知识普及——如何搞定施工...</a>
		</li>
		<li>
		<font>2016-05-18</font>
		<a href="" title="细数展台设计搭建中常见且十分耐用的木材">细数展台设计搭建中常见且十分耐用...</a>
		</li-->
		</ul>
		</div>
		<div class="box_news cjxw_news">
		<div class="news_tit">
		<a href="<?php echo U('Index/news');?>" title="常见问题">查看更多</a>
		常见问题
		</div>
		<div class="news_img">
		<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($rel["newsThreeTitle"]["newsId"]); ?>" title="2016年广交会前应该注意什么？">
		<img src="/Public/News/<?php echo ($rel["newsThreeTitle"]["newsId"]); ?>/1.jpg" style="width:375px;height:187px;"  alt="2016年广交会前应该注意什么？">
		<p>
		<em>2016年广交会前应该注意什么？</em>
		</p>
		</a>
		</div>
		<ul>
			<?php if(is_array($rel['newsThree'])): foreach($rel['newsThree'] as $key=>$item): ?><li>
					<font><?php echo ($item["newsRelease"]); ?></font>
					<a href="<?php echo U('Index/newsDetail');?>/newsId/<?php echo ($item["newsId"]); ?>" title="<?php echo ($item["newsTitle"]); ?>"><?php echo (mb_substr($item["newsTitle"],0,15,'utf-8')); ?></a>
				</li><?php endforeach; endif; ?>
		<!--li>
		<font>2016-05-16</font>
		<a href="" title="展台搭建商告诉您：参展商展会上如何提问与倾听客户">展台搭建商告诉您：参展商展会上如...</a>
		</li>
		<li>
		<font>2016-04-14</font>
		<a href="" title="展台搭建色彩要怎么搭配才吸引人？">展台搭建色彩要怎么搭配才吸引人？</a>
		</li>
		<li>
		<font>2016-04-13</font>
		<a href="" title="展台搭建使用灯光的疑难问题">展台搭建使用灯光的疑难问题</a>
		</li>
		<li>
		<font>2015-08-28</font>
		<a href="" title="佛山展会摊位装修为何不能马虎？">佛山展会摊位装修为何不能马虎？</a>
		</li>
		<li>
		<font>2015-03-23</font>
		<a href="" title="还不知道广交会搭建多少钱？奥莎德展览带您去探究">还不知道广交会搭建多少钱？展...</a>
		</li-->
		</ul>
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
<script src="/Public/Js/Home/Index/hm(1).js">
</script><script src="/Public/Js/Home/Index/jquery.min.js"></script>
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
<script src="/Public/Js/Home/Index/wow.min.js"></script>
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
	$(".video_div p").on('click',function(){
		$("#div_1").hide();
		$(this).hide();
		$('.video_div span').hide();
		$(".video_div1").show();
	})
	$(".video_div1").on('click',function(){
		$('.video_div').show();
		$("#div_1").show();
		$(".video_div p").show();
		$('.video_div span').show();
		$(".video_div1").hide();
	})
	
</script>
<script>
$('.sreachSubmit').on('click',function(){
	mdl = $(this).attr('lin')
	$sreachText = $('.sreachText').val();
	location.href = mdl + '/sreach/' +$sreachText;
});

$.each($('.caseListBox>a'),function(ind){
	$(this).hover(function(){
		$('.caseTitleBox',this).stop(true,true).animate({top : '0px'},250);
		$('.caseBGColor',this).stop(true,true).animate({top : '0px'},250);
	},function(){
		$('.caseTitleBox',this).animate({top : '100%'},200);
		$('.caseBGColor',this).animate({top : '100%'},200);
	});
});

</script>
</body></html>