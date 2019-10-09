<?php
namespace Aoshadeadmin\Model;
use Think\Model;
class CaseModel extends Model{

	//分页设置
    public function pagecheck($table, $order,$pageSize, $field = '', $where = '',$group='') {
    	//$table    数据库表
    	//$order 	排序方式
    	//$pageSize 查询数目
    	//$field 	查询内容
    	//$where 	查询条件
    	//$group


        $result                = array();

        $ap                    = M($table);
        $listNum       		   = $ap->group($group)->field($field)->where($where)->select();
		$result['count']	   = count($listNum);
        $page                  = new \Think\Page($result['count'], $pageSize);
		
        $result['content']     = $ap->group($group)->field($field)->where($where)->order($order)->limit($page->firstRow . ',' . $page->listRows)->select(); 
        $page->setConfig('header', '<span>共<em>%TOTAL_ROW%</em>条&nbsp;第<em>%NOW_PAGE%</em>页/共<em>%TOTAL_PAGE%</em>页</span>');
        $page->setConfig('prev', '<');
        $page->setConfig('next', '>');
        $page->setConfig('last', '末页');
        $page->setConfig('first', '首页');
        $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->rollPage = 3;
        $page->lastSuffix = false;//最后一页不显示为总页数
		
	
        $result['page']        = $page->show();

        return $result;
    }

	public function caseAll($getU){
		$where = '';
		$caseDb = M('case');

		if( I('sreach') ){
			$sreach = $ctDb
					->where( "casetypeText like '%".I('sreach')."%'" )
					->find();
			if( !$sreach ){
				$where = "caseTitle like '%".I('sreach')."%' and life = 0";
				$rel  = $this->pagecheck('case','',9,'',$where);

				$rel = $this->setCaseType($rel);

				return $rel;
			}

		}

		if( $sreach ){
			$where['caseType'] = $sreach['casetypeId'];
		}
		if( $getU['caseArea'] ){
			$where['caseArea'] = $getU['caseArea'];
		}
		if( $getU['caseType'] ){
			$where['caseType'] = $getU['caseType'];
		}
		if( $getU['caseSize'] ){
			$where['caseSize'] = $getU['caseSize'];
		}
		$where['life'] = '0';
		$rel  = $this->pagecheck('case','',9,'',$where);
		if( $sreach ){
			$rel['casetypeId'] = $sreach['casetypeId'];
		}
		$rel = $this->setCaseType($rel);

		return $rel;

	}

	public function setCaseType( $rel ){
		$caDb = M('casearea');
		$ctDb = M('casetype');
		$csDb = M('casesize');

		$caseArea = $caDb
							->select();

		$caseType = $ctDb
							->select();

		$caseSize = $csDb
							->select();

		foreach( $rel['content'] as $key=>$item ){
			
			$rel['content'][$key]['caseArea'] = $caseArea[$item['caseArea']]['caseareaText'];
			$rel['content'][$key]['caseType'] = $caseType[$item['caseType']]['casetypeText'];
			$rel['content'][$key]['caseSize'] = $caseSize[$item['caseSize']]['casesizeText'];
		}
		
		$rel['caseArea'] = $caseArea;

		$rel['caseType'] = $caseType;

		$rel['caseSize'] = $caseSize;


		return $rel;
	}

	public function caseDetail(){

		$caseDb = M('case');
		$caDb = M('casearea');
		$ctDb = M('casetype');
		$csDb = M('casesize');


		$caseInfo = $caseDb
						->where('caseId ='.cookie('caseId'))
						->find();

		$caseArea = $caDb
							->select();

		$caseType = $ctDb
							->select();

		$caseSize = $csDb
							->select();

		/*$caseInfo['caseArea'] = $caseArea[$caseInfo['caseArea']]['caseareaText'];
		$caseInfo['caseType'] = $caseType[$caseInfo['caseType']]['casetypeText'];
		$caseInfo['caseSize'] = $caseSize[$caseInfo['caseSize']]['casesizeText'];*/

		$result['caseInfo']  = $caseInfo;
		$result['caseArea'] = $caseArea; 
		$result['caseType'] = $caseType; 
		$result['caseSize'] = $caseSize; 
		
		return $result;

	}

	public function indexList(){

		$caseDb = M('case');
		$ctDb 	= M('casetype');

		$rel['caseType'] 	= $ctDb
					         	->where('caseTypeShow = 1')
								->select();
 
		foreach( $rel['caseType'] as $key=>$item ){
			$rel['recent'][$key] = $caseDb
										->where('caseRecentshow = 1 and caseType ='.$item['casetypeId'])
										->find();
		}
		
		return $rel;
	}

	public function caseUpData(){

		$result['status'] = 1;
		$info 			  = 0;

		$data['caseTitle'] 		= I('caseTitle');
		$data['caseCompany'] 	= I('caseCompany');
		$data['caseArea'] 		= I('caseArea');
		$data['caseType'] 		= I('caseType');
		$data['caseSize'] 		= I('caseSize');
		$data['caseSizeNum'] 	= I('caseSizeNum');
		$data['caseShow'] 		= I('caseShow');

		for( $i = 1; $i < 10; $i++ ){
			if( cookie('0img'.$i) < 10 && cookie('0img'.$i) != Null ){
				//prt($i);
				$status = $this->moveImg('Case',$i);
				if( $status ){
					$data['caseImg'.$i]   = $i;
					$info = 1;
				}else{
					$result['errorText'] = '图片'.$i.'修改失败';
					return $result;
				}
			}
		}
		//exit;
		$caseDb = M('case');

		$affect = $caseDb
					->where('caseId ='.cookie('caseId'))
					->save($data);
		if( $affect || $info == 1 ){
			$result['status'] = 0;
		}else{
			$result['errorText'] = '修改案例失败！';
		}

		return $result;

	}

	public function moveImg( $type, $num ){

		$path = C(UPLOADIMG).'/'.$type.'Back/'.cookie('caseId').'/';
		$case = C(UPLOADIMG).'/'.$type.'/'.cookie('caseId').'/';
		unlink($case.$num.'.jpg');
		$a = copy($path.$num.'.jpg',$case.$num.'.jpg');
		if( $a == 1 && file_exists( $case.$num.'.jpg' ) ){
			return 1;
		}else{
			return 0;
		}

	}




}



?>