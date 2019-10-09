<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo C('__PUBLICCSSADMIN__');?>/pintuer.css" />
<link rel="stylesheet" type="text/css" href="<?php echo C('__PUBLICCSSADMIN__');?>/admin.css" />
<script type="text/javascript" src="<?php echo C('__PUBLICJS__');?>/jquery.js"></script>
<script type="text/javascript" src="<?php echo C('__PUBLICJS__');?>/public.js"></script>
<script type="text/javascript" src="<?php echo C('__PUBLICJSADMIN__');?>/pintuer.js"></script>
<script type="text/javascript" src="<?php echo C('__PUBLICJSADMIN__');?>/Index/caseDetail.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content"> 
      <div class="form-group">
        <div class="label">
          <label>展览公司标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50 caseTitle" value="<?php echo ($result["caseInfo"]["caseTitle"]); ?>" name="title" data-validate="required:请输入展览公司标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>展览公司名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50 caseCompany" value="<?php echo ($result["caseInfo"]["caseCompany"]); ?>" name="title" data-validate="required:请输入展览公司名称" />
          <div class="tips"></div>
        </div>
      </div>
      <!--div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div-->     
      
        
        <!--div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            首页 <input id="ishome"  type="checkbox" />
            推荐 <input id="isvouch"  type="checkbox" />
            置顶 <input id="istop"  type="checkbox" /> 
         
          </div>
        </div-->
        <div class="form-group">
          <div class="label">
            <label>展会地点：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50 caseArea">
              <option value="" disabled selected>请选择城市</option>
              <?php if(is_array($result['caseArea'])): foreach($result['caseArea'] as $key=>$item): ?><option value="<?php echo ($item["caseareaId"]); ?>" <?php if($item['caseareaId'] == $result['caseInfo']['caseArea']): ?>selected<?php endif; ?> ><?php echo ($item["caseareaText"]); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>展会类型：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50 caseType">
              <option value="" disabled selected>请选择类型</option>
              <?php if(is_array($result['caseType'])): foreach($result['caseType'] as $key=>$item): ?><option value="<?php echo ($item["casetypeId"]); ?>" <?php if($item['casetypeId'] == $result['caseInfo']['caseType']): ?>selected<?php endif; ?> ><?php echo ($item["casetypeText"]); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>展位面积范围：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50 caseSize">
              <option value="" disabled selected>请选择面积范围</option>
              <?php if(is_array($result['caseSize'])): foreach($result['caseSize'] as $key=>$item): ?><option value="<?php echo ($item["casesizeId"]); ?>" <?php if($item['casesizeId'] == $result['caseInfo']['caseSize']): ?>selected<?php endif; ?> ><?php echo ($item["casesizeText"]); ?></option><?php endforeach; endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>展位面积：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50 caseSizeNum" value="<?php echo ($result["caseInfo"]["caseSizeNum"]); ?>" name="title" data-validate="required:请输入展位面积大小" />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>是否显示：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50 caseShow">
              <option value="" disabled selected>请选择状态</option>
              <option <?php if($result['caseInfo']['caseShow'] == 0): ?>selected = "selected"<?php endif; ?> value="0">显示</option>
              <option <?php if($result['caseInfo']['caseShow'] == 1): ?>selected = "selected"<?php endif; ?> value="1">不显示</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      
      <div class="caseImgMain">
        <div class="caseImgTitle"><span style="font-size:18px;">图片展示</span><span>(第一张必须上传)</span></div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img1');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg1"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img2');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg2"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img3');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg3"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img4');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg4"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img5');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg5"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img6');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg6"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img7');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg7"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img8');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg8"]); ?>" frameborder="0"></iframe>
        </div>
        <div class="caseImgBox">
          <iframe src="<?php echo U('Aoshadeadmin/Upimg/img9');?>" caseImgNum="<?php echo ($result["caseInfo"]["caseImg9"]); ?>" frameborder="0"></iframe>
        </div>
      </div>
      <!--div class="form-group">
        <div class="label">
          <label>展位大小：</label>
        </div>
        <div class="field">
          <textarea class="input" name="note" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>关键字标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_title" value="" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容关键字：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_keywords" value=""/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关键字描述：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="s_desc" style="height:80px;"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="0"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="authour" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>点击次数：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="views" value="" data-validate="member:只能为数字"  />
          <div class="tips"></div>
        </div>
      </div-->
      <div class="form-group btnFloat">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o BtnUpdata"> 提交</button>
          <button class="button bg-main icon-check-square-o btnBack" type="submit"> 返回</button>
        </div>
      </div>
  </div>
</div>

</body></html>