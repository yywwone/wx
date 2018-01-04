<?php
namespace Home\Controller;
use Think\Controller;
class WordController extends BaseController{
    public function policy1(){
        $this->display();
    }
    public function policy2(){
        $this->display();
    }
    public function policy3(){
        $this->display();
    }
    public function policy4(){
        $this->display();
    }
    public function policy5(){
        $this->display();
    }
    public function policy6(){
        $this->display();
    }
    public function policy7(){
        $this->display();
    }
    public function policy8(){
        $this->display();
    }
    public function policy9(){
        $this->display();
    }
    public function details(){
        $this->display();
    }
     public function choice(){
        if(IS_POST){
             $db = M('qy_qyzh');
             $where['accout'] = I('post.accout');
             $where['pwd'] = md5(I('post.pwd'));
        $con = $db->where($where)->find();
        if($con){
            session('qy',$con['company']);
            $this->redirect('index/personal');
        }else{
            $this->redirect('Word/choice');
        }
        }
       
        $this->display();
    }
     public function entry(){
        $this->display();
    } public function yp1(){
        $this->display();
    } public function yp2(){
        $this->display();
    } public function yp3(){
        $this->display();
    }
    public function publicSpace(){
        $this->display();
    }
    public function needKnow(){
        $this->display();
    }


    // 活动循环展示页面
    public function activityTitle(){
        $db = M('huodong');
        $this ->con = $db->where()->select();
        $this->display();
    }
    public function activityDetail(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        $this ->con = $db->where($where)->find();
        $this->display();
    }
  }
