<?php
namespace Aoshadeadmin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->display();
    }

    public function info(){

        $info     = D('webinfo');
        $headInfo = $info->allInfo(); 

        $this->assign('info',$headInfo);

        $this->display();
    }

    public function login(){

        $this->display();
    }

    public function pass(){

        $this->display();
    }

    public function page(){

        $this->display();
    }

    public function adv(){

        $this->display();
    }

    public function book(){

        $this->display();
    }

    public function column(){

        $this->display();
    }

    public function modifyInfo(){

        $webinfo = D('webinfo');
        $result  = $webinfo->modifyInfo();

        $this->ajaxReturn($result);

    }

    public function caseCenter(){
        //清楚所有图片保存的cookie
        for( $i = 1; $i < 10; $i++ ){
            cookie('0img'.$i, Null);
        }

        $case = D('case');
        $result  = $case->caseAll();

        $this->assign('result',$result);

        $this->display();
    }

    public function caseDetail(){
        //图片类型  案例展示图片 0
        cookie('verification','0');

        $case = D('case');
        $result  = $case->caseDetail();
        //prt($result);exit;
        $this->assign('result',$result);
        $this->display();
    }

    public function caseUpData(){

        $case  = D('case');
        $result = $case->caseUpData();

        $this->ajaxReturn($result);
    }

}