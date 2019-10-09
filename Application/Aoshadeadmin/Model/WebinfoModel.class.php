<?php
namespace Aoshadeadmin\Model;
use Think\Model;
class WebinfoModel extends Model{


	public function allInfo(){
		$webinfoDb = M('webinfo');

		$headinfo = $webinfoDb
                        ->find();

		return $headinfo;

	}

	public function modifyInfo(){

		$result['status'] = 1;

		$data = [
					'wenTitle'		=> I('webTitle'),
					'webKeywords'	=> I('webKeywords'),
					'webDescription'=> I('webDescription'),
					'webFax'		=> I('webFax'),
					'webQQ'			=> I('webQQ'),
					'webEmail'		=> I('webEmail'),
					'webCompanyarea'=> I('webCompanyarea'),
					'webCompanyaddr'=> I('webCompanyaddr'),
					'webComtainer'	=> I('comtainer'),
					'webBeian'		=> I('webBeian')
				];
	
		$web_db = M('webinfo');

		$affect = $web_db
					->where('webinfoId = 1')
					->save($data);

		if( $affect ){
			$result['status'] = 0;
		}

		return $result;

	}

}

?>