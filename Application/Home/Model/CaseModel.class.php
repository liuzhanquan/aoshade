<?php
namespace Home\Model;
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
		$caDb = M('casearea');
		$ctDb = M('casetype');
		$csDb = M('casesize');

		if( I('sreach') ){
			$sreach = $ctDb
					->where( "casetypeText like '%".I('sreach')."%'" )
					->find();
			if( !$sreach ){
				$where = "caseTitle like '%".I('sreach')."%' and life = 0";
				$rel  = $this->pagecheck('case','',9,'',$where);
				$rel['caseArea'] = $caDb
									->select();

				$rel['caseType'] = $ctDb
									->select();

				$rel['caseSize'] = $csDb
									->select();

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
		$rel['caseArea'] = $caDb
							->select();

		$rel['caseType'] = $ctDb
							->select();

		$rel['caseSize'] = $csDb
							->select();

		return $rel;

	}

	public function caseDetail(){

		$caseDb = M('case');
		$csDb = M('casesize');


		if(!preg_match('/^\d{1,5}$/',I('caseId'))) redirect('/');

		$caseInfo = $caseDb
						->where('caseId ='.I('caseId'))
						->find();
		$caseInfo['similar'] = $caseDb
								->where('caseType ='.$caseInfo['caseType'])
								->limit(3)
								->select();

		$rel 	= $csDb
					->select();


		foreach( $caseInfo['similar'] as $key=>$item ){
			
			$caseInfo['similar'][$key]['caseSize'] = $rel[$item['caseSize']]['casesizeText'];

		}

		return $caseInfo;

	}

	public function indexList(){

		$caseDb = M('case');
		$ctDb 	= M('casetype');
		$newsDb = M('news');

		$rel['recent'] = $caseDb
						->where('caseRecentshow = 1 and life = 0')
						->limit(9)
						->select();

		$rel['caseType'] 	= $ctDb
					         	->where('caseTypeShow = 1')
								->select();
 		
		$rel['newsOneTitle']  =  $newsDb
									->where('newsType = 4 and  newsShow = 0 and life = 0')
									->find();

		$rel['newsOne']		  =  $newsDb
									->where('newsType = 4 and  newsShow = 0 and life = 0')
									->limit(1,5)
									->select();

		$rel['newsTwoTitle']  =  $newsDb
									->where('newsType = 2 and  newsShow = 0 and life = 0')
									->find();

		$rel['newsTwo']		  =  $newsDb
									->where('newsType = 2 and  newsShow = 0 and life = 0')
									->limit(1,5)
									->select();

		$rel['newsThreeTitle']  =  $newsDb
									->where('newsType = 3 and  newsShow = 0 and life = 0')
									->find();

		$rel['newsThree']		  =  $newsDb
									->where('newsType = 3 and  newsShow = 0 and life = 0')
									->limit(1,5)
									->select();

		
		return $rel;
	}

}



?>