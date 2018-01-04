<?php
namespace Home\Controller;
use Think\Controller;
class BaobiaoController extends BaseController{
//    功能测试
    public function  ji(){
    	
    	if($_POST){
    		// 图片上传
    		foreach ($_POST as $k => $v) {
    			$where[$k] = $v;
    		}

    		    $type = "home/upload/baobiao";
                $path = "../Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     53145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','tmp');// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                $upload->autoSub           = true; //是否使用子目录保存图片  
                $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                $time = time();
                $where['cteate_time'] = time();
                $where['user'] = session('user')?session('user'):1;
                // var_dump($_FILES);exit;
        foreach ($_FILES as $key => $val) {
            if (!empty($_FILES[$key]['tmp_name'])) {
                $info = $upload->uploadOne($_FILES[$key]);
                if (!$info) {
                    $this->error($upload->getError());
                } else {
                	 $w = "/baobiao/".$time."/".$info['savename'];
                     $where[$key] = $w;
//                    if ($key=="pic"){
//                        $thumb_file      = './Public/pc/img/'.$info['savepath'].$info['savename'];
//                        $save_path       = './Public/pc/img/'.$info['savepath'].mini_.$info['savename'];
//                        $image           = new \Think\Image();
//                        $image->open("$thumb_file");    // 按照原图的比例生成一个最大为600*400的缩略图并保存为thumb.jpg
//                        $image->thumb(600, 400)->save("$save_path");
//                        @unlink("$thumb_file");         //上传生成缩略图以后删除源文件
                  
//                    }
//
                }
            }
        }
        $db = M('jibao')->add($where);
           if($db){
           	$this->redirect('baobiao/ji',array('statu'=>'1'));
           }
    		//
    	}
    	$this->display();
}
// 企业录入
public function enter(){
  if($_POST){
        // 图片上传
        foreach ($_POST as $k => $v) {
          $where[$k] = $v;
        }

            $type = "home/upload/qylr";
                $path = "../Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     53145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','tmp');// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                $upload->autoSub           = true; //是否使用子目录保存图片  
                $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                $time = time();
                $where['cteate_time'] = time();
                $where['user'] = session('user')?session('user'):1;
                // var_dump($_FILES);exit;
        foreach ($_FILES as $key => $val) {
            if (!empty($_FILES[$key]['tmp_name'])) {
                $info = $upload->uploadOne($_FILES[$key]);
                if (!$info) {
                    $this->error($upload->getError());
                } else {
                   $w = "/qylr/".$time."/".$info['savename'];
                     $where[$key] = $w;
//                    if ($key=="pic"){
//                        $thumb_file      = './Public/pc/img/'.$info['savepath'].$info['savename'];
//                        $save_path       = './Public/pc/img/'.$info['savepath'].mini_.$info['savename'];
//                        $image           = new \Think\Image();
//                        $image->open("$thumb_file");    // 按照原图的比例生成一个最大为600*400的缩略图并保存为thumb.jpg
//                        $image->thumb(600, 400)->save("$save_path");
//                        @unlink("$thumb_file");         //上传生成缩略图以后删除源文件
                  
//                    }
//
                }
            }
        }
        // var_dump($where);exit;
        $db = M('qy_luru')->add($where);
           if($db){
            $this->redirect('index/index',array('statu'=>'1'));
           }
}
}
public function month(){
	if(IS_POST){

	$a['danwei'] = I('post.adanwei');$b['danwei'] = I('post.bdanwei');$c['danwei'] = I('post.cdanwei');
	$a['yysr'] = I('post.ayysr');$b['yysr'] = I('post.byysr');$c['yysr'] = I('post.cyysr');
	$a['rjywsr'] = I('post.arjywsr');$b['rjywsr'] = I('post.brjywsr');$c['rjywsr'] = I('post.crjywsr');
	$a['rjcpsr'] = I('post.arjcpsr');$b['rjcpsr'] = I('post.brjcpsr');$c['rjcpsr'] = I('post.crjcpsr');
	$a['xxaqcp'] = I('post.axxaqcp');$b['xxaqcp'] = I('post.bxxaqcp');$c['xxaqcp'] = I('post.cxxaqcp');
	$a['gyrjcp'] = I('post.agyrjcp');$b['gyrjcp'] = I('post.bgyrjcp');$c['gyrjcp'] = I('post.cgyrjcp');
	$a['xxjsfw'] = I('post.axxjsfw');$b['xxjsfw'] = I('post.bxxjsfw');$c['xxjsfw'] = I('post.cxxjsfw');
	$a['yyfwsr'] = I('post.ayyfwsr');$b['yyfwsr'] = I('post.byyfwsr');$c['yyfwsr'] = I('post.cyyfwsr');
	$a['jsfwsr'] = I('post.ajsfwsr');$b['jsfwsr'] = I('post.bjsfwsr');$c['jsfwsr'] = I('post.cjsfwsr');
	$a['jcdlsj'] = I('post.ajcdlsj');$b['jcdlsj'] = I('post.bjcdlsj');$c['jcdlsj'] = I('post.cjcdlsj');
	$a['qrsxtsr'] = I('post.aqrsxtsr');$b['qrsxtsr'] = I('post.bqrsxtsr');$c['qrsxtsr'] = I('post.cqrsxtsr');
	// $a['fwmsfc'] = I('post.afwmsfc');$b['fwmsfc'] = I('post.bfwmsfc');$c['fwmsfc'] = I('post.cfwmsfc');
	$a['rjwbfw'] = I('post.arjwbfw');$b['rjwbfw'] = I('post.brjwbfw');$c['rjwbfw'] = I('post.crjwbfw');
	$a['qrsxt'] = I('post.aqrsxt');$b['qrsxt'] = I('post.bqrsxt');$c['qrsxt'] = I('post.cqrsxt');
	$a['lrze'] = I('post.alrze');$b['lrze'] = I('post.blrze');$c['lrze'] = I('post.clrze');
	$a['sjze'] = I('post.asjze');$b['sjze'] = I('post.bsjze');$c['sjze'] = I('post.csjze');
	$a['rjywck'] = I('post.arjywck');$b['rjywck'] = I('post.brjywck');$c['rjywck'] = I('post.crjywck');
	$a['cyrygz'] = I('post.acyrygz');$b['cyrygz'] = I('post.bcyrygz');$c['cyrygz'] = I('post.ccyrygz');
	$a['cyrypj'] = I('post.acyrypj');$b['cyrypj'] = I('post.bcyrypj');$c['cyrypj'] = I('post.ccyrypj');
	$a['rjwbfuck'] = I('post.arjwbfuck');$b['rjwbfuck'] = I('post.brjwbfuck');$c['rjwbfuck'] = I('post.crjwbfuck');
	$a['create_time'] = time();$b['create_time'] = time();$c['create_time'] = time();
    $a['user'] = session('user');$b['user'] = session('user');$c['user'] = session('user');
    $a['company'] = session('qy');$b['company'] = session('qy');$c['company'] = session('qy');
   $dba = M('yuebaoyear');
   $dba->add($a);
   $dbb = M('yuebaotoyear');
   $dbb->add($b);
   $dbc = M('yuebaomonth');
   $dbc->add($c);
	}
	$this->display();
}
public function metting(){
 $db = M('meeting');
 $con = $db ->add($_POST);

 if($con){
  $this->redirect('index/meetingTrue');
 }
}
public function gym(){
  $this->display();
}
public function space_zu(){
  $this->display();
}

}