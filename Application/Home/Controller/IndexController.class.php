<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $headerStatus = 0;
        

        $case   = D('case');
        $rel    = $case->indexList();

        $this->assign('headerStatus',$headerStatus);
        $this->assign('rel',$rel);

        $this->header();
        $this->footer();

        $this->display();
    }

    public function header(){

        $info     = D('webinfo');
        $headInfo = $info->headinfo(); 
        
        $this->assign('headInfo',$headInfo);

    }

    public function footer(){

        $news = D('news');
        $fNews = $news->footNews(); 

    	$this->assign('fNews',$fNews);
    }

    public function caseAll(){
        $headerStatus = 1;
        
        $getU['caseArea']       = I('caseArea');
        $getU['caseType']       = I('caseType');
        $getU['caseSize']       = I('caseSize');

        $caseAll    =  D('case');
        $case       = $caseAll->caseAll($getU);
        
        if($case['casetypeId']){
            $getU['caseType']       = $case['casetypeId'];
        }

        $this->assign('case',$case);
        $this->assign('headerStatus',$headerStatus);
        $this->assign('getU',$getU);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function caseDetail(){
        $headerStatus = 1;
        
        $case   = D('case');
        $case   = $case->caseDetail();

        $this->assign('headerStatus',$headerStatus);
        $this->assign('case',$case);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function contact(){
        $headerStatus = 3;
        
        $this->assign('headerStatus',$headerStatus);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function designer(){
        $headerStatus = 4;
        
        $this->assign('headerStatus',$headerStatus);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function news(){
        $headerStatus = 2;
        
        $result = D('news')->news();

        $this->assign('headerStatus',$headerStatus);
        $this->assign('result',$result);

        $this->header();
        $this->footer();
    	$this->display();
    }

    public function newsDetail(){
        $headerStatus = 2;
        
        $result = D('news')->newsDetail();
        
        $this->assign('headerStatus',$headerStatus);
        $this->assign('result',$result);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function about(){
        $headerStatus = 5;
        
        $this->assign('headerStatus',$headerStatus);
        $this->header();
        $this->footer();
    	$this->display();
    }

    public function map(){

        $this->display();
    }


}