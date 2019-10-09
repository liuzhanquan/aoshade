$(function(){
	$('.BtnUpdata').on('click',function(){
		var result = {},
			mdl    = getMdl();
		result.caseTitle 	= $('.caseTitle').val();
		result.caseCompany 	= $('.caseCompany').val();
		result.caseArea 	= $('.caseArea').val();
		result.caseType	 	= $('.caseType').val();
		result.caseSize		= $('.caseSize').val();
		result.caseSizeNum 	= $('.caseSizeNum').val();
		result.caseShow 	= $('.caseShow').val();

		$.post(mdl + '/Aoshadeadmin/Index/caseUpData', result, function(data){
			if(data.status == 0){

				alert('案例修改成功！');
				location.href = mdl + '/Aoshadeadmin/Index/caseCenter';

			}
		},'json');


	});


	$('.btnBack').on('click',function(){
		var mdl = getMdl();
		location.href = mdl + '/Aoshadeadmin/Index/caseCenter';
	});

})