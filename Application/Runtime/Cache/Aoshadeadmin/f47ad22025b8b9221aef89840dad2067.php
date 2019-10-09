<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>图片上传</title>
	<link rel="stylesheet" type="text/css" href="/Public/Css/public.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Css/Admin/Upimg/hd_img.css" />
	
	<script type="text/javascript" src="/Public/Js/jquery.js"></script>
	<script type="text/javascript" src="/Public/Js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/Public/Js/public.js"></script>
	<script type="text/javascript" src="/Public/Js/Admin/Upimg/img.js"></script>
</head>
<body>
	<div id="imgtwo_title"></div>
	
	<form action="<?php echo U('/Aoshadeadmin/Upimg/upload');?>/page/9" id="frameFile1" method="post"  
					 enctype="multipart/form-data">
			<div id="imgtwo" num="<?php echo ($info["num"]); ?>" style="display:none;">
				<div class="img_box2" id="img_box2">
					<img src="/<?php echo ($info["savepath"]); echo ($info["savename"]); ?>" style="" alt="" />
				</div>
				<div class="del1" imgpart="">删除图片</div>
			</div>
			<label class="file_box">
				<input type="file" name="photo" class="file_inp1" />
			</label>
			<div class="btn_img2">点击上传</div>
	</form>
	
	
	<script type="text/javascript">
			var caseImg = window.parent.$('.caseImgBox iframe').eq(8).attr('caseImgNum'),
				mdl 	= getMdl(),
				newImg  = $.cookie($.cookie('verification')+'img9');
			if( caseImg != 99 && typeof(caseImg) != 'undefined' && typeof(newImg) == 'object' ){
				$('#imgtwo').css('display','block');
				$('.file_box').css('display','none');
				$('.btn_img2').css('display','none');
				$('#imgtwo img').attr('src', mdl + '/Public/Case/' + $.cookie('caseId') + '/' + caseImg + '.jpg' );
			}

			if( typeof(newImg) != 'object' ){
				$('#imgtwo img').attr('src', mdl + '/Public/CaseBack/' + $.cookie('caseId') + '/' + newImg + '.jpg' );
				$('#imgtwo').css('display','block');
				$('.file_box').css('display','none');
				$('.btn_img2').css('display','none');
				$('.del1').attr('imgpart',$('img').attr('src'));
				$('#imgtwo_title').html('').css({display : 'none'});
			}
			if($('#imgtwo').attr('num') > 0 ){
				var mdl = getMdl();
				$('#imgtwo').css('display','block');
				$('.file_box').css('display','none');
				$('.btn_img2').css('display','none');
				$('.del1').attr('imgpart',$('img').attr('src'));
				$('#imgtwo_title').html('').css({display : 'none'});
			}
		  
	</script>
	
	
</body>
</html>