$(function(){
	/*var img_double,height1,width1,_width,_height;
	

	$(window).load(function(){
		_width = $('.img_box img').width();
		_height = $('.img_box img').height();
		img_size();
	});
	
	
	//if(_width >=500 || _height>=250){
	function img_size(){
		if(0>_height){
			img_double = (_width/500).toFixed(2);
		}else{
			img_double = (_height/250).toFixed(2);
		}
		height1 = Math.ceil(_height/img_double);
		if((height1/2) != 0){
			height1 = height1+1;
		}
		width1 = Math.ceil(_width/img_double);
		if((width1/2) != 0){
			width1 = width1-1;
		}
		$('.img_box img').css({width : width1+'px',height : height1+'px'});
		onimg();
	}
	
	
		

	function onimg(){
		bg_top    = (height1-200)/2;
		bg_left    = (width1-135)/2;
		top_num = (height1-200)/2-25;
		left_num = (width1-135)/2-182;
		
		$('.img_box').css({marginTop : -top_num+'px',marginLeft : -left_num+'px'});
		tpnum    = parseInt($('.img_box').css('top'));
		lfnum     = parseInt($('.img_box').css('left'));
		mtnum    =parseInt($('.img_box').css('marginTop'));
		mlnum    =parseInt($('.img_box').css('marginLeft'));
	 }
	 
	 
	var _move = false;
	var _x,_y;
	$('.img_bg').mousedown(function(e){
		_move = true;
		_x = e.pageX - parseInt($('.img_box').css('left'));
		_y = e.pageY - parseInt($('.img_box').css('top'));
	})
	
	
	bg_top = (height1-200)/2;
	bg_left = (width1-135)/2;
	top_num = (height1-200)/2-25;
	left_num = (width1-135)/2-182;
	
	$(document).mousemove(function(e){
		if(_move == true){
			var x = e.pageX-_x;
			var y = e.pageY-_y;
			var lx = bg_left-x;
			var ly = bg_top-y;
			if(lx > bg_left*2){
				x = -bg_left;
			}
			if(lx < 0){
				x = bg_left;
			}
			if(ly > bg_top*2){
				y = -bg_top;
			}
			if(ly < 0){
				y = bg_top;
			}
			$('.img_box').css({marginTop : -top_num+'px',marginLeft : -left_num+'px'});
			$('.img_box').css({left : x+'px',top : y+'px'});
			$('.img_bg').mouseout(function(){
				_move = false;
			});
		}
	}).mouseup(function(){
		_move = false;
	});
	
	
	
    $('.img_btn1').on('change', function(){ 
			var imgname = $('.img_btn1').val().split('.');
			if(imgname[1]=='png'|| imgname[1]=='jpg'||imgname[1]=='gif'||imgname[1]=='jpeg'){
				$('#hd_upload').submit();
			}else{
				$('#head_title').html('图片上传类型不正确').css({dispaly : 'block',color : '#f00',marginLeft : '200px',marginTop: '20px',marginBottom: '-39px'});
			}
        
    });
	
	function enlarge(){
		if(_width>_height){
			height1 = Math.ceil(_height/img_double);
			if( height1/2 != 0){
				height1 = height1+1;
			}
			width1 = Math.ceil(_width/img_double);
			if((width1/2) != 0){
				width1 = width1-1;
			}
			$('.img_box img').css({width : width1+'px',height : height1+'px'});
		}else{
			height1 = Math.ceil(_height/img_double);
			if((height1/2) != 0){
				height1 = height1+1;
			}
			width1 = Math.ceil(_width/img_double);
			if((width1/2) != 0){
				width1 = width1-1;
			}
			$('.img_box img').css({width : width1+'px',height : height1+'px'});
		}
		onimg();

		
		
	}
	
	$('.enlarge1').on('click',function(){
		img_double = (parseFloat(img_double)-0.1).toFixed(2);
		if(img_double<0.01){
			img_double = 0.01;
		}
		enlarge();
	});
	$('.narrow1').on('click',function(){
		img_double = (parseFloat(img_double)+0.1).toFixed(2);
		if(Math.ceil(_width/img_double) < 135 ){
			img_double = (_width/135).toFixed(2);
		}
		if(Math.ceil(_height/img_double) < 200 ){
			img_double = (_height/200).toFixed(2);
		}
		enlarge();
	});
	$('.enlarge2').on('click',function(){
		img_double = (parseFloat(img_double)-0.01).toFixed(2);
		if(img_double<0.01){
			img_double = 0.01;
		}
		enlarge();
	});
	$('.narrow2').on('click',function(){
		img_double = (parseFloat(img_double)+0.01).toFixed(2);
		if( Math.ceil(_height/img_double) < 200 ){
			img_double = (_height/200).toFixed(2);
		}
		if(Math.ceil(_width/img_double) < 135){
			img_double = (_width/135).toFixed(2);
		}
		enlarge();
	});
	
	
		
	$('.file_inp1').on('change', function(){ 
		var imgname = $('.file_inp1').val().split('.');
		if(imgname[1]=='png'|| imgname[1]=='jpg'||imgname[1]=='gif'||imgname[1]=='jpeg'){
			$('#frameFile1').submit();
		}else{
			$('#imgtwo_title').html('图片上传类型不正确').css({dispaly : 'block',color : '#f00',marginLeft : '13px',marginTop: '20px'});
		}
		

  });
	
	$('.file_inp2').on('change', function(){ 
		var imgname = $('.file_inp2').val().split('.');
		if(imgname[1]=='png'|| imgname[1]=='jpg'||imgname[1]=='gif'||imgname[1]=='jpeg'){
			$('#frameFile2').submit();
		}else{
			$('#imgthr_title').html('图片上传类型不正确').css({dispaly : 'block',color : '#f00',marginLeft : '13px',marginTop: '20px'});
		}
		
  });
		
	$('.word').on('change', function(){ 
		var wordname = $('.word').val().split('.');
		if(wordname[1]=='doc'){
			$('#frameword').submit();
		}else{
			$('#word_title').html('请上传word文档').css({dispaly : 'block',color : '#f00',marginLeft : '20px',marginTop: '20px'});
		}
	});
	
	if($.cookie('savepath')){
		var mdl = getMdl();
		var result;
		$('.one_box').css({display:'none'});
		$('.imgReturn img').attr('src',mdl+'/'+$.cookie('savepath'));
		$('.del').attr('imgpart',$.cookie('savepath'));
		$('.imgReturn').css('display','block');
		$('.del').css('display','block');
		$('#head_title').html('').css({marginLeft : '0px',marginTop: '0px',marginBottom: '0px'});
	}
	$('.del').on({
		click : function(){
			var mdl = getMdl();
			var result = {};
			result.imgpart 			= $('.del').attr('imgpart');
			result.recruitPhone 	= $.cookie('recruitPhone');
			result.delNum 			= 1;
			$.post(mdl + '/index.php/Home/Recruit/imgdel',result,function(data){
				if(data.status == 0){
					$.cookie('savepath', null, {path : '/'});
					location.href = mdl + '/index.php/Home/Recruit/img/'+$.cookie('recruitPhone');
				}
			},'json');
		}
	});
	$('.del1').on({
		click : function(){
			$('#imgtwo').css('display','none');
			var mdl = getMdl();
			var result = {};
			result.imgtwo = 2;
			result.imgpart = $('.del1').attr('imgpart');
			$.post(mdl + '/index.php/Home/Recruit/imgdel',result,function(data){
				if(data.status == 1){
					location.href = mdl + '/index.php/Home/Recruit/hd_imgtwo';
				}
			},'json');
			$('.file_box').css('display','block');
			$('.btn_img2').css('display','block');
		}
	});
	
	$('.del2').on({
		click : function(){
			$('#imgthr').css('display','none');
			var mdl = getMdl();
			var result = {};
			result.imgthr = 3;
			result.imgpart = 'Uploads/'+$('.del2').attr('imgpart');
			$.post(mdl + '/index.php/Home/Recruit/imgdel',result,function(data){
				if(data.status == 1){
					location.href = mdl + '/index.php/Home/Recruit/hd_imgthr';
				}
			},'json');
			$('.file_box').css('display','block');
			$('.btn_img3').css('display','block');
		}
		
	});
	
	$('.del_words').on({
		click : function(){
			$('#word').css('display','none');
			var mdl = getMdl();
			var result = {};
			result.word = 4;
			result.imgpart = 'Uploads/'+$('.del_words').attr('imgpart');
			$.post(mdl + '/index.php/Home/Recruit/imgdel',result,function(data){
				if(data.status == 1){
					location.href = mdl + '/index.php/Home/Recruit/word';
				}
			},'json');
			$('.file_box').css('display','block');
			$('.btn_img3').css('display','block');
		}
		
	});
*/



	$('.img_btn1').on('change', function(){ 
			var imgname = $('.img_btn1').val().split('.');
			if(imgname[1]=='png'|| imgname[1]=='jpg'||imgname[1]=='gif'||imgname[1]=='jpeg'){
				$('#hd_upload').submit();
			}else{
				$('#head_title').html('图片上传类型不正确').css({dispaly : 'block',color : '#f00',marginLeft : '200px',marginTop: '20px',marginBottom: '-39px'});
			}
        
    });
    $('.file_inp1').on('change', function(){ 
		var imgname = $('.file_inp1').val().split('.');
		if(imgname[1]=='png'|| imgname[1]=='jpg'||imgname[1]=='gif'||imgname[1]=='jpeg'){
			$('#frameFile1').submit();
		}else{
			$('#imgtwo_title').html('图片上传类型不正确').css({dispaly : 'block',color : '#f00',marginLeft : '13px',marginTop: '20px'});
		}
		

  	});

	
});