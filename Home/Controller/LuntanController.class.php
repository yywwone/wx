<?php
namespace Home\Controller;
use Think\Controller;
class LuntanController extends BaseController{
     public function activity(){
        $this->display();  
    }
    public function community(){
        $db = M('luntan');
        $this->con = $db ->where()
                   ->join('left join wx_user AS o ON luntan.user=o.openid')
                   ->select();
                   // echo "<pre>";
                   // var_dump($con);exit;
        $this->display();  
    }
    public function detail(){
        $this->display();  
    }
    public function huodong(){
        $this->display();  
    }

   public function addly(){
        foreach ($_POST as $k => $v) {
                    $where[$k] = $v;
                }
            if($_FILES){
                $type = "home/Upload/lthd";
                // $path = "./Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize


                   =     53145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg',);// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                $upload->autoSub           = true; //是否使用子目录保存图片  
                $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                $time = date('Ymd',time());
                $where['create_time'] = time();
                $where['user'] = session('user')?session('user')['openid']:1;
                            $info = $upload->upload();
                            if (!$info) {
                                $this->error($upload->getError());
                            } else {
                                for($i=0;$i<count($info);$i++){
                                    $w = "/lthd/".$time."/".$info[$i]['savename'];
                                    $aa[$i] = $w;
                                }
                            }
                        
        }
        // var_dump($info);exit;
              $aa[0]?$where[img_1] = $aa[0]:"";
              $aa[1]?$where[img_2] = $aa[1]:"";
              $aa[2]?$where[img_3] = $aa[2]:"";
              $aa[3]?$where[img_4] = $aa[3]:"";
              $aa[4]?$where[img_5] = $aa[4]:"";
              $aa[5]?$where[img_6] = $aa[5]:"";
              // var_dump($where);exit;
              $db = M('luntan');
              $con = $db->add($where);
              if($con){
                $this->redirect('Luntan/community');
              }
        
   }
   public function addnews(){
    $this->display();
   }
    // // 文件上传
    // public function upload($name, $dir)
    // {
    //     $file=request()->file($name);
    //     if($file) {
    //         $info=$file->move('uploads'. DS .$dir);
    //         if($info) {
    //             $path=$dir.DS.$info->getsavename();
    //             return str_replace('\\', '/', $path);
    //         } else {
    //             $this->error($file->geterror()); 
    //         }
    //     } else {
    //         return false;
    //     }
    // }
}
