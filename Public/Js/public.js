
$(function(){ 
	
    //设置标签事件
    $('a, button').focus(function(){this.blur()});
	
	var mdl    = getMdl(),
		path   = {},
		result ={};
		
		
		result.info = '';
		
		var abc = new Array(
			'.aaa','.bbb','.ccc'
		);
		
	$.post( mdl + '/Home/Index/path', result, function(data){
		
		for(i = 0; i <= abc.lenght; ++i){
			$(abc[i]).css({background : data.HomeImg+''});
		}
		

			
	}, 'json');
	
	$('.backIcon').on('click',function(){
		$('.computerFix',window.parent.document	).css({display : 'none'});
		$('.HD_holdbox',window.parent.document	).css({display : 'none'});
	});
	
});
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

//刘展全

	function pathList(info){
		var mdl    = getMdl(),
			path   = {},
			result ={};
			
			
			result.info = info;
			
		$.post( mdl + '/Home/Index/path', result, function(data){
			
			wrench(data.Css);
			

				
		}, 'json');
		

	}
	
	//背景图片
	function pathList(path,fn){
			
		var mdl    = getMdl(),
			result ={};
		
		if(fn == 1){
			
			$.post( mdl + '/Home/Index/path', result, function(data){
				$.each(path, function(k, v){
					$(k).attr({
						'src' : mdl + data.HomeImg + '/'+ v
					});
				}); 
					
			}, 'json');
			
		}else{
			
			$.post( mdl + '/Home/Index/path', result, function(data){
				$.each(path, function(k, v){
					$(k).css({
						backgroundImage : 'url(' + mdl + data.HomeImg + '/'+ v +')'
					});
				}); 
					
			}, 'json');
			
		}
	}


	//时间戳转换日期
	function time_str(timeNum){
		var date = new Date(timeNum*1000);
		Y = date.getFullYear() + '-';
		M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
		D = date.getDate() + ' ';
		h = (date.getHours()< 10 ? '0'+ date.getHours() : date.getHours())+ ':';
		m = (date.getMinutes() < 10 ? '0'+ date.getMinutes() : date.getMinutes() ) + ':';
		s = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds(); 
		var string = Y+M+D+h+m+s;
		return string;
	}
