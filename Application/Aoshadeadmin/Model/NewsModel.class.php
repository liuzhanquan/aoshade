<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model{

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

	public function news($getU){
		$where = 'life = 0';
		$newsDb = M('news');

		$rel  = $this->pagecheck('news','',9,'',$where);



		return $rel;

	}

	public function newsDetail(){
		$newsDb = M('news');

		$rel['info'] = $newsDb
					->where( 'newsId ='.I('newsId').' and life = 0' )
					->find();
        $sun = $newsDb
                    ->where('life = 0')
                    ->field('newsId')
                    ->select();

        foreach( $sun as $key=>$item ){
            if( $item['newsId'] == I('newsId') ){
                $k = $key;
            }
        }

        if( $rel['info']['newsId'] == $sun[0]['newsId'] ){
            $rel['list'] = $newsDb
                            ->where( 'newsId >='.($sun[1]['newsId']).' and life = 0' )
                            ->limit(1)
                            ->field('newsId,newsTitle,newsTime,newsImgone')
                            ->select();
        
            $rel['listStatus'] = 1;
        }else if( $rel['info']['newsId'] ==  $sun[(count($sun)-1)]['newsId'] ){


            $rel['list'] = $newsDb
                            ->where( 'newsId >='.($sun[(count($sun)-2)]['newsId']).' and life = 0' )
                            ->limit(1)
                            ->field('newsId,newsTitle,newsTime,newsImgone')
                            ->select();
            $rel['listStatus'] = 3;
        }else{

            $rel['list'] = $newsDb
                            ->where( 'newsId >='.($sun[$k-1]['newsId']).' and newsId <= '.($sun[$k+1]['newsId']).' and life = 0' )
                            ->limit(3)
                            ->field('newsId,newsTitle,newsTime,newsImgone')
                            ->select();
            $rel['listStatus'] = 2;
        }
        
        return $rel;
	}
	


    public function footNews(){
        $newsDb = M('news');
        $new[1]    = $newsDb
                    ->where( 'newsType = 1 and life = 0' )
                    ->limit(2)
                    ->field('newsId,newsTitle,newsRelease,newsInfo')
                    ->select();
        $new[2]    = $newsDb
                    ->where( 'newsType = 2 and life = 0' )
                    ->limit(2)
                    ->field('newsId,newsTitle,newsRelease,newsInfo')
                    ->select();
        $new[3]    = $newsDb
                    ->where( 'newsType = 3 and life = 0' )
                    ->limit(2)
                    ->field('newsId,newsTitle,newsRelease,newsInfo')
                    ->select();

        return $new;
    }

}

?>