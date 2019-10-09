<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0030)http://www.sdzs.com/?m=contact -->
<html><head lang="zh-CN"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HCQcSn4qNmsu0dKvnhoYM8ST"></script>
<style>
	#allmap {width: 652px;height: 287px;overflow: hidden;margin:0;font-family:"微软雅黑";}
</style>
<div class="main">
					<div id="allmap"></div>
				

<script type="text/javascript">
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(113.322544,23.126025);
	map.centerAndZoom(point,12);
	// 创建地址解析器实例
	var myGeo = new BMap.Geocoder();

	//map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	//map.enableContinuousZoom(false);    //启用地图惯性拖拽，默认禁用
	// 将地址解析结果显示在地图上,并调整地图视野
	myGeo.getPoint("广州市天河区珠江新城花城大道皇朝阁", function(point){
		if (point) {
			map.centerAndZoom(point, 19);
			map.addOverlay(new BMap.Marker(point));
		}else{
			alert("您选择地址没有解析到结果!");
		}
	}, "广州市");
	//关闭惯性拖拽
	//map.disableDragging();
	//开启滚轮缩放
	map.enableScrollWheelZoom();
	//开启惯性拖拽
	map.enableInertialDragging();
	//关闭滚轮缩放
	//map.disableScrollWheelZoom();
</script>

</body></html>