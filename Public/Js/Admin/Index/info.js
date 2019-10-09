$(function(){
	
	$('#infoBtn').on('click',function(){
		var result 			= {};
			result.webTitle 		= $('.stitle').val();
			result.webKeywords 		= $('.skeywords').val();
			result.webDescription	= $('.sdescription').val();
			result.webFax			= $('.s_fax').val();
			result.webQQ			= $('.s_qq').val();
			result.webEmail			= $('.s_eamil').val();
			result.webCompanyarea	= $('.s_area').val();
			result.webCompanyaddr	= $('.s_addr').val();
			result.webComtainer		= $('.s_comtainer').val();
			result.webBeian			= $('.s_beian').val();

			$.post('/aoshadeadmin/Index/modifyInfo', result, function(data){
				console.log(data);
			}, 'json');

	});


})