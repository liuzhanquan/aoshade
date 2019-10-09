<?php
namespace Home\Model;
use Think\Model;
class WebinfoModel extends Model{


	public function headinfo(){
		$webinfoDb = M('webinfo');

		$headinfo = $webinfoDb
                        ->find();

		return $headinfo;

	}

}

?>