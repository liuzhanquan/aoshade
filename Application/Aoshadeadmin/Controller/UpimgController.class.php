<?php
namespace Aoshadeadmin\Controller;
use Think\Controller;
class UpimgController extends Controller {
    public function img1(){

        $this->display();
    }

    public function upload(){
        if( !preg_match( '/^\d$/',I('path.3') ) ){
            echo '错误操作';exit;
        }

        $this->uploadImg(I('path.3'),cookie('verification'));

        
    }

    public function uploadImg($page,$verification){
        $uploadType = ['CaseBack'];
        if( cookie('caseId') ){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            //创建文件上传目录
            
            $path              =    C(UPLOADIMG).'/'.$uploadType[$verification].'/'.cookie('caseId').'/';
            $this->MkdirFile($path);
            if( file_exists($path.$page.'.jpg') ){
                unlink($path.$page.'.jpg');
            }
            
            $upload->rootPath  =    './';   // 设置附件上传目录// 上传文件 
            $upload->savePath  =    $path;   // 设置附件上传目录// 上传文件 
            $upload->autoSub   =    false;   // 关闭创建时间文件夹 
            $upload->saveName  =    $page;
            $upload->saveExt   =    'jpg';
            $info              =    $upload->upload();
            if(!$info) {// 上传错误提示错误信息 
                prt($upload->getError());exit;
                $this->error($upload->getError());
            }else{
                $result = array();

                $result['ext']      = $info['photo']['ext'];
                $result['name']     = substr($info['photo']['name'], 0, -4);
                $result['savepath'] = substr($info['photo']['savepath'], 2);
                $result['savename'] = $info['photo']['savename'];
                $result['num'] = $page;
                /*prt($info);exit;
                copy($path.$info[I('path.5')]['savename'],$path.I('path.5').'.jpg');
                unlink($path.$info[I('path.5')]['savename']);
                $image = new \Think\Image(); 
                $image->open($path.I('path.5').'.jpg');
                $image->thumb(100, 100,\Think\Image::IMAGE_THUMB_FIXED)->save($path.I('path.5').'Thumb.jpg');
                $result = $path.I('path.5').'Thumb.jpg';


                prt($result);exit;*/
                cookie($verification.'img'.$page,$page);
                $this->assign('info', $result);
                $this->display('/Upimg/img'.$page);
            }
        }


    }    

    public function MkdirFile($dir){
        if(!file_exists($dir)){
            $Text = explode('/',$dir);
            $content = '';
            for($i = 0; $i < (count($Text)-1) ; $i++){
                $content = $content.'/'.$Text[$i];
            }
            $content = substr($content,1);
            
            $this->MkdirFile($content);
            
            mkdir($dir);
        }
    }


    public function delFile(){
        $case = C(UPLOADIMG).'/'.$type.'/'.cookie('caseId').'/';
        $result['status'] = 1;
        $uploadType = ['CaseBack'];
        $imgType    = ['Case'];
        if( cookie(I('imgType').'img'.I('num')) ){
            if( cookie('caseId') && I('num') ){
               $a = unlink(C(UPLOADIMG).'/'.$uploadType[I('imgType')].'/'.cookie('caseId').'/'.I('num').'.jpg');
                //prt(C(UPLOADIMG).'/'.$uploadType[I('imgType')].'/'.cookie('caseId').'/'.I('num').'.jpg');exit;

               if( $a ){
                    $result['status'] = 0;
               }else{
                    $result['errorText'] = '图片删除失败！';
               }
            }
        }else{
            if( cookie('caseId') && I('num') ){
               $a = unlink(C(UPLOADIMG).'/'.$imgType[I('imgType')].'/'.cookie('caseId').'/'.I('num').'.jpg');
                //prt(C(UPLOADIMG).'/'.$uploadType[I('imgType')].'/'.cookie('caseId').'/'.I('num').'.jpg');exit;

               if( $a ){
                    

                    $caseDb = M('case');
                    $data['caseImg'.I('num')]   = 99;
                    $affect = $caseDb
                                ->where('caseId ='.cookie('caseId'))
                                ->save($data);
                    if( $affect ){
                        $result['status'] = 0;
                    }
               }else{
                    $result['errorText'] = '图片删除失败！';
               }
            }
        }

        $this->ajaxReturn($result);
    }



}