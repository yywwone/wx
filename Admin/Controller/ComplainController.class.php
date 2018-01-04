<?php
namespace Admin\Controller;
use Think\Controller;
class ComplainController extends BaseController {
    public function jibaos(){
        $status = 1;
        $this->ajaxReturn($status);
    }
    public function comment(){
        $pingjia = M('pingjia');
        $fuwu = M('fuwu');
        $fuwushang = M('fuwushang');
        // if(I('post.name')) $where['name'] =array('like','%'.I('post.name').'%');
        $count = $pingjia->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $pingjia ->where()
                         ->alias('g')
                         ->limit($Page->firstRow.','.$Page->listRows)
                         ->join('left join fuwu AS o ON g.f_id=o.id')
                         ->join('left join fuwushang AS d ON g.fws_id=d.id')
                         ->field('pj_name,o.name,d.name as fws_name,pj_nr,o.name as f_name')
                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    // 月报导出
    public function excelyuebao(){
        
        
        // var_dump($where);exit;
        $data = M('yuebaomonth');
        if(IS_POST) {
            $time = date('Y/m/d',time());
           $where['company'] = I('post.company')?I('post.company'):array('NEQ','');
           $startime = I('post.startime')?I('post.startime'):"1970/01/01";
           $overtime = I('post.overtime')?I('post.overtime'):$time;
           $where['create_time'] = array(array('egt',strtotime($startime)),array('elt',strtotime($overtime)));
           // $where['_logic'] = 'or';
         }else{
            $where = ['id' => ['gt',0]];
         }
        $datas = $data->where($where)->field('id,user,create_time',true)->select();
        // echo "<pre>"; 
        // var_dump($datas);exit;
        // $dataResult = array('1','3','4');
        $headTitle = "月报表"; 
        $title = "月报表"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >月报表</th></tr>"; 
        $titlename = "<tr> 
        <th>单位个数</th>
        <th>营业收入</th>
        <th>软件业务收入合计</th>
        <th>软件产品收入</th>
        <th>信息安全产品收入</th>
        <th>工业软件产品收入</th>
        <th>信息技术服务收入</th>
        <th>运营服务收入</th>
        <th>电子商务平台技术服务收入</th>
        <th>集成电路设计收入</th>
        <th>嵌入式系统软件收入</th>
        <th>软件外包服务</th>
        <th>嵌入式软件系统出口</th>
        <th>利润总额</th>
        <th>税金总额</th>
        <th>从业人员工资总额</th>
        <th>从业人员平均人数</th>
        <th>软件业务出口</th>
        <th>软件外包/服务出口</th>
        <th>公司名称</th>
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    public function complain(){
        $tousu = M('tousu');
        $user = M('wx_user');
        if(I('post.name')) $where['name_id|neirong'] =array('like','%'.I('post.name').'%');
        $count = $tousu->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $tousu->alias('g')
	                         ->limit($Page->firstRow.','.$Page->listRows)
	                         ->join('left join wx_user AS o ON g.name_id=o.openid')
	                         ->field('neirong,o.name as u_name')
	                          ->where($where)
	                         ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
    	$this->display();  
    }
    // 用户数据导出
    public function excel(){
        $data = M('wx_user');
        $datas = $data->where()->field('name,add,tel')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "微信用户资料"; 
        $title = "微信用户"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >微信用户名</th> 
                   <th >地址</th> 
                   <th >联系电话</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                
    }
    // 企业信息批量录入
    public function qylrfile(){
       
     if($_FILES['qylr']['name']){
           if($_FILES){       
                $type   = "admin/uploads/baobiao";
                $path   = "../Public/".$type."/";
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('xls');// 设置附件上传类型
                $upload->rootPath  =     './Public/'; // 设置附件上传根目录
                $upload->savePath  =     $type."/"; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          //缩略图
                   $upload->uploadReplace     = true; //是否存在同名文件是否覆盖  
                   $upload->autoSub           = true; //是否使用子目录保存图片  
                   $upload->thumbRemoveOrigin = false; //上传图片后删除原图片 
                          // 上传文件
                   $info   =   $upload->upload();
                   $time   = date("Ymd", time());
                      
                        // img
                        if($info){
                            
                  $filename   = '/Public/'.$info['qylr']['savepath'].$info['qylr']['savename'];
                  $exts = $info['ext'];
                             }
                // 上传成功存入数据库
                 //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
                import("Org.Util.PHPExcel");
                import("Org.Util.PHPExcel.IOFactory");
                //创建PHPExcel对象，注意，不能少了\
                $PHPExcel=new \PHPExcel();
                //如果excel文件后缀名为.xls，导入这个类
                if($exts == 'xls'){
                    import("Org.Util.PHPExcel.Reader.Excel5");
                    $PHPReader=new \PHPExcel_Reader_Excel5();
                }else if($exts == 'xlsx'){
                    import("Org.Util.PHPExcel.Reader.Excel2007");
                    $PHPReader=new \PHPExcel_Reader_Excel2007();
                }

                 }
             }
    }
    //企业信息导出
    public function excelqiye(){
         $data = M('qy_luru');
         //$where['id'] = I('get.id') ? ;
         if(I('get.id')) {
            $where = ['id' => ['eq',I('get.id')]];
         }else{
            $where = ['id' => ['gt',0]];
         }
        $datas = $data->where($where)->field('id,yuan,gs_farenid,gs_yyzz',true)->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "企业信息"; 
        $title = "企业信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
        <th>企业名称</th>
        <th>公司法人</th>
        <th>公司地址</th>
        <th>公司电话</th>
        <th>项目所属行业</th>
        <th>统一社会信用代码</th>
        <th>注册时间</th>
        <th>企业人数</th>
        <th>注册资金</th>
        <th>纳税地</th>
        <th>日常工作联系人</th>
        <th>日常工作联系方式/邮箱</th>
        <th>统计工作联系人</th>
        <th>统计联系方式/邮箱</th>
        <th>公司性质</th>
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    // 企业单条数据导出
    public function exceloneqiye(){
         $data = M('qy_luru');
         //$where['id'] = I('get.id') ? ;
         if(I('get.id')) {
            $where = ['id' => ['eq',I('get.id')]];
         }else{
            $where = ['id' => ['gt',0]];
         }
        $datas = $data->where($where)->field('id,yuan,gs_farenid,gs_yyzz',true)->find(); 

        switch ($datas['qydjzc']) {
            case '1':
                $datas['qydjzc'] = '有限责任';
                break;
            case '2':
                $datas['qydjzc'] = '个人独资';
                break;
            case '3':
                $datas['qydjzc'] = '股份公司';
                break;
            case '4':
                $datas['qydjzc'] = '其他';
                break;
        }
        // echo "<pre>";
        // var_dump($datas);exit;
        // $dataResult = array('1','3','4');
        $headTitle = "企业信息"; 
        $title = "企业信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = '<tr style=";height:67px" class="firstRow">
            <td width="165">
                企业名称
            </td>
            <td colspan="2" width="216" style="border-left: none;">
                '.$datas["gs_name"].'
            </td>
            <td width="159" style="border-left: none;">
                法人代表/联系方式/邮箱
            </td>
            <td width="231" style="border-left: none;">
                '.$datas["gs_faren"].'
            </td>
        </tr>
        <tr style=";height:67px">
            <td width="165">
                统一社会信用代码
            </td>
            <td colspan="2" width="216" style="border-left: none;">
                '.$datas["gs_xydm"].'
            </td>
            <td width="159" style="border-top: none; border-left: none;">
                企业人数
            </td>
            <td width="231" style="border-top: none; border-left: none;">
                '.$datas["gs_people"].'
            </td>
        </tr>
        <tr style=";height:67px">
            <td width="165" style="border-top: none;">
                项目所属行业;
            </td>
            <td colspan="2" width="216" style="border-left: none;">
                '.$datas["gs_yw"].'
            </td>
            <td width="159" style="border-top: none; border-left: none;">
                注册时间
            </td>
            <td width="231" style="border-top: none; border-left: none;">
                '.$datas["gs_time"].'
            </td>
        </tr>
        <tr style=";height:67px">
            <td width="165" style="border-top: none;">
                注册地址
            </td>
            <td colspan="2" width="216" style="border-left: none;">
               
            </td>
            <td width="159" style="border-top: none; border-left: none;">
                注册资金<br/> &nbsp; &nbsp; （万元）
            </td>
            <td width="231" style="border-top: none; border-left: none;">
                '.$datas["gs_maney"].'
            </td>
        </tr>
        <tr style=";height:118px">
            <td width="165" style="border-top: none;">
                纳税地
            </td>
            <td colspan="2" width="216" style="border-left: none;">
             '.$datas["gs_nsd"].'
            </td>
            <td width="159" style="border-top: none; border-left: none;">
                企业登记注册类型
            </td>
            <td width="231" style="border-top: none; border-left: none;">
              '.$datas["qydjzc"].'
            </td>
        </tr>
        <tr style=";height:67px">
            <td width="165" style="border-top: none;">
                日常工作联系人/联系方式/邮箱
            </td>
            <td colspan="2" width="216" style="border-left: none;">
                '.$datas["rc_people"].'/'.$datas["rc_tel"].'
            </td>
            <td width="159" style="border-top: none; border-left: none;">
                统计工作联系人/联系方式/邮箱
            </td>
            <td width="231" style="border-top: none; border-left: none;">
                '.$datas["tj_people"].'/'.$datas["tj_tel"].'
            </td>
        </tr>'; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    // 服务商信息导出
    public function excelfuwushang(){
        $data = M('fuwushang');
        $datas = $data->where()->field('name,fuzeren,tel,add')->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "服务商用户资料"; 
        $title = "服务商信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >用户资料</th></tr>"; 
        $titlename = "<tr> 
                   <th  >服务商名称</th> 
                   <th >负责人</th> 
                   <th >联系电话</th> 
                   <th >地址</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
                    
    }
     // excel表导出
    public function excelData($datas,$titlename,$headtitle,$filename){
         $str = "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\"\r\nxmlns:x=\"urn:schemas-microsoft-com:office:excel\"\r\nxmlns=\"http://www.w3.org/TR/REC-html40\">\r\n<head>\r\n<meta http-equiv=Content-Type content=\"text/html; charset=utf-8\">\r\n</head>\r\n<body>"; 
    $str .="<table border=1><head>".$titlename."</head>"; 
    $str .= $title; 
    foreach ($datas  as $key=> $rt ) 
    { 
        $str .= "<tr>"; 
        foreach ( $rt as $k => $v ) 
        { 
            $str .= "<td>{$v}</td>"; 
        } 
        $str .= "</tr>\n"; 
    } 
    $str .= "</table></body></html>"; 
    header( "Content-Type: application/vnd.ms-excel; name='excel'" ); 
    header( "Content-type: application/octet-stream" ); 
    header( "Content-Disposition: attachment; filename=".$filename ); 
    header( "Cache-Control: must-revalidate, post-check=0, pre-check=0" ); 
    header( "Pragma: no-cache" ); 
    header( "Expires: 0" ); 
    exit( $str ); 
    }
    public function fuwustate(){
        $db = M('dingdan');
        $con = $db->where(array('id'=>I('get.id')))->save(array('zhuangtai'=>'1'));
        if($con){
            $this->redirect('index/widgets');
        }
    }
    public function huodong(){
        $db = M('huodong');
        // 查询
        $this->list = $db->where(array('id'=>I('get.id')))->find();
        if($_POST){
        $where['content'] = I('post.content');
        $where['title'] = I('post.tit');
        $where['orders'] = I('post.order');
        $wheres['id'] = I('post.id');
        // echo "<pre>";
         // var_dump($wheres['id']);exit;
        if($wheres['id']>1){
            $this->con = $db->where(array('id'=>I('post.id')))->save($where);
            $this->redirect('Complain/hdlist');
        }else{
            $this->con = $db->where()->add($where);
            $this->redirect('Complain/hdlist');
        }
        }
        // var_dump(I('post.content'));exit;
        $this->display();
    }
    public function hdajax(){
          $db = M('huodong');
     if(I('post.order')){ 
        $where['orders'] = I('post.order');
        $con = $db->where($where)->find();
        if($con){
            $status    = 1;
            $this->ajaxReturn($status);
        }
    }
}
    public function hdlist(){
         $user = M('huodong');
        if(I('post.name')) $where['title'] =array('like','%'.I('post.name').'%');
        $count = $user->where($where)->count();
        $Page       = new \Think\Page($count,8);
        $show       = $Page->show();// 分页显示输出
        $this->con = $user->alias('g')
                             ->limit($Page->firstRow.','.$Page->listRows)
                              ->where($where)
                              ->order('orders asc')
                             ->select();
                         // echo "<pre>";
                         // var_dump($con);exit;
                         $this->page=$show;
                         $this->count=$count;
        $this->display();
    }
    public function hdcon(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        $this->con = $db->where($where)->find();
        $this->display();
    }
    public function delehuodong(){
        $db = M('huodong');
        $where['id'] = I('get.id');
        if($where['id']){
            $con = $db->where($where)->delete();
            if($con){
                $this->redirect('Complain/hdlist');
            }
        }
    }
    public function qylr(){
          $db = M('qyinfo');
        if(I('get.id')){
            // 停用

            if(I('get.state')=='1'){
                $c=$db->where(array('id'=>I('get.id')))->field('inputstatus')->find();
                if($c['inputstatus']=='1'){
                    $where['inputstatus'] = '0';
                }else{
                    $where['inputstatus'] = '1';
                }
                $con = $db->where(array('id'=>I('get.id')))->save($where);
                if($con){
                    $this->redirect('admin/Complain/addqylr',array('aler'=>'2'));
                }else{
                    $this->redirect('admin/Complain/addqylr',array('aler'=>'3'));
                }
            }
    }
}
    public function addqylr(){
        $db = M('qyinfo');
        $this->con = $db->where()->field('inputname,id,inputstatus')->select();
        if(I('post.name')){
                $where['inputname'] = I('post.name');
                $str = '<tr class="fitr">
                    <td colspan="4">'.I('post.name').'</td>
                    <td colspan="8">
                        <input type="text" name="'.I("post.yunm").'" placeholder="请输入'.I('post.name').'" class="use-inp" >
                    </td>
                </tr>';
                $where['inputcon'] = $str;
                $cons = $db->add($where);
               if($cons){
                mysql_connect('rm-bp1244gtwt8ml35bdo.mysql.rds.aliyuncs.com','root','Buyun1233');
                mysql_select_db('wangxin');
                // $dbs = M('qy_luru');
                $sql = "ALTER TABLE `qy_luru` ADD `".I("post.yunm")."` text";
                mysql_query($sql);
                $this->redirect("Complain/addqylr");
               }

        }
        $this->display();

    }
    public function ajaxacc(){
        $db = M('qyinfo');
        $dbS = M('qy_luru');
     if(I('post.name')){ 
        $where['inputname'] = I('post.name');
        $con = $db->where($where)->find();
        if($con){
            $status    = 1;
        }
         }
        $this->ajaxReturn($status);
    }
    // 报表处理
    public function jibao(){
        $db = M('jibao');
        if(I('post.company')){
            $where['company'] = array('like','%'.I('post.company').'%');
        } 
            $count      = $db->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $jibao        = $db->where($where)
                     ->limit($Page->firstRow.','.$Page->listRows)
                     ->order('id desc')
                     ->select();
        $this->count = $count;
        $this->jibao   = $jibao;
        $this->page  = $show;
        $this->display();
    }
     public function yuebao(){
        $month = M('yuebaomonth');
        if(I('post.company')){
            $where['company'] = array('like','%'.I('post.company').'%');
        } 
            $count      = $month->where($where)->count();
            $Page       = new \Think\Page($count,8);
            $show       = $Page->show();
            $con        = $month->where($where)
                     ->limit($Page->firstRow.','.$Page->listRows)
                     ->order('id desc')
                     ->select();
        $this->count = $count;
        $this->con   = $con;
        $this->page  = $show;
        $this->display();  
    }
    // 季报总表
    public function exceljibao(){
        $data = M('jibao');
           if(IS_POST) {
           $time = date('Y/m/d',time());
           $where['company'] = I('post.company')?I('post.company'):array('NEQ','');
           $startime = I('post.startime')?I('post.startime'):"1970/01/01";
           $overtime = I('post.overtime')?I('post.overtime'):$time;
           $where['create_time'] = array(array('egt',strtotime($startime)),array('elt',strtotime($overtime)));
           // $where['_logic'] = 'or';
         }else{
            $where = ['id' => ['gt',0]];
         }

        $datas = $data->where($where)->field('id,countpatent,ruanzhuzuo,kejizhongxiao,gaoxin,zgjjszc,kzhzdgx,create_time,congye,qiyecg,user',true)->select(); 
        // $dataResult = array('1','3','4');
        $headTitle = "季报信息"; 
        $title = "季报信息"; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >季报信息</th></tr>"; 
        $titlename = "<tr> 
        <th>公司名称</th>
         <th>公司法定代表人</th>
        <th>公司地址</th>
        <th>统计联系人电话</th> 
        <th>主营业务收入</th>
        <th>软件和信息服务业务收入</th>
        <th>研发投入经费</th>
        <th>利润总额</th>
        <th>税金总额</th>
        <th>新产品产值</th>
         <th>主营业务</th> 
         <th>代表业务</th> 
         <th>行业类别</th> 
         <th>新四军创业人员数</th> 
         <th>大学生创业者</th> 
         <th>大企业高管及其他连续创业者</th> 
         <th>科技人员创业者</th> 
         <th>留学归国人员创业者</th>
         <th>国省千人数量</th> 
         <th>硕士人数</th> 
         <th>本科人数</th> 
         <th>专科以及以下</th> 
        <th>科技孵化器</th> 
         <th>众创空间个数</th> 
         <th>众创空间面积</th> 
         <th>双创团队个数</th> 
         <th>创业创新基地建筑面积</th>
        <th>政府补助项目名称</th>
        <th>政府补助项目金额</th> 
        <th>备注说明</th>
         <th>房间号</th>
        <th>缴税地</th> 
               </tr>"; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    // 单个季报导出
    public function pulljibao(){
        $datas = "1"; 
        $db = M('jibao');
        $where['id'] = I('get.id');
        $con = $db->where($where)->find();
        // $dataResult = array('1','3','4');
        $headTitle = $con['company']; 
        $title = $con['company']; 
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >".$con['company']."</th></tr>"; 
        $titlename = '<tr class="firstRow">
            <td class="et2" colspan="7" width="636" style="font-size: 20pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                2017年绿谷信息产业园入园企业主要指标季报表
            </td>
        </tr>
        <tr>
            <td class="et3" colspan="7" width="636" style="font-size: 11pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                日期：'.date("Ymd",$con["create_time"]).'&nbsp;&nbsp;&nbsp;填表人：'.$con["user"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系电话：'.$con["counttel"].'
            </td>
        </tr>
        <tr>
            <td class="et5" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                企业名称
            </td>
            <td class="et6" colspan="3" width="286" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["company"].'</td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                法定代表人
            </td>
            <td class="et6" colspan="2" width="141" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["compeo"].'</td>
        </tr>
        <tr>
            <td class="et5" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                地址
            </td>
            <td class="et6" colspan="3" width="286" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["comform"].'</td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                电话
            </td>
            <td class="et6" colspan="2" width="141" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["counttel"].'</td>
        </tr>
        <tr>
            <td class="et5" rowspan="4" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                从业人数
            </td>
            <td class="et6" rowspan="4" width="99" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["counttel"].'</td>
            <td class="et6" rowspan="4" width="87" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                其中
            </td>
            <td class="et9" width="100" style="font-size: 11pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                硕士以上
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["shuoshi"].'</td>
            <td class="et5" rowspan="2" width="70" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                高新技术企业（是/否）
            </td>
            <td class="et6" rowspan="2" width="65" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr>
            <td class="et9" width="100" style="font-size: 11pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                本科
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["benke"].'</td>
        </tr>
        <tr>
            <td class="et9" width="100" style="font-size: 11pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                专科以下
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["zhuanke"].'</td>
            <td class="et5" rowspan="2" width="70" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                科技型中小企业（是/否）
            </td>
            <td class="et6" rowspan="2" width="65" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr>
            <td class="et10" width="100" style="font-size: 11pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                高中级技术职称人员
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["zgjjszc"].'</td>
        </tr>
        <tr>
            <td class="et5" rowspan="4" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                “新四军”创业人员数
            </td>
            <td class="et6" rowspan="4" width="99" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["xinsijun"].'</td>
            <td class="et6" rowspan="4" width="87" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                其中
            </td>
            <td class="et10" width="100" style="font-size: 11pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                大学生创业者
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["countstuden"].'</td>
            <td class="et11" rowspan="2" width="70" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                专利拥有量
            </td>
            <td class="et12" rowspan="2" width="65" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr>
            <td class="et10" width="100" style="font-size: 11pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                大企业高管及其他连续创业者
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["tostart"].'</td>
        </tr>
        <tr>
            <td class="et10" width="100" style="font-size: 11pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                科技人员创业者
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["kjchuangye"].'</td>
            <td class="et11" rowspan="2" width="70" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                其中：期末有效发明专利数
            </td>
            <td class="et12" rowspan="2" width="65" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr>
            <td class="et10" width="100" style="font-size: 11pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                留学归国人员创业者
            </td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["turtlecy"].'</td>
        </tr>
        <tr>
            <td class="et5" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                软件著作权
            </td>
            <td class="et17" colspan="6" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr>
            <td class="et5" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                从事行业
            </td>
            <td class="et5" colspan="6" rowspan="2" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr></tr>
        <tr>
            <td class="et5" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                主营业务
            </td>
            <td class="et5" colspan="6" rowspan="2" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["imploproduct"].'</td>
        </tr>
        <tr></tr>
        <tr>
            <td class="et5" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                代表业务（产品）
            </td>
            <td class="et5" colspan="6" rowspan="2" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["dbproduct"].'</td>
        </tr>
        <tr></tr>
        <tr>
            <td class="et11" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                2017年新增成果（研发成果、资质认证、荣誉称号等）
            </td>
            <td class="et20" colspan="6" rowspan="2" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
        </tr>
        <tr></tr>
        <tr>
            <td class="et5" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                主要指标（万元）
            </td>
            <td class="et5" width="99" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                营业收入
            </td>
            <td class="et5" width="87" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                软件业务收入
            </td>
            <td class="et5" width="100" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                利润总额
            </td>
            <td class="et5" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                税金总额
            </td>
            <td class="et5" colspan="2" width="141" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                研发经费
            </td>
        </tr>
        <tr>
            <td class="et6" width="99" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["onemaney"].'</td>
            <td class="et6" width="87" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["infomaney"].'</td>
            <td class="et6" width="100" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["countmaney"].'</td>
            <td class="et6" width="90" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["shuijin"].'</td>
            <td class="et6" colspan="2" width="141" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["developmaney"].'</td>
        </tr>
        <tr>
            <td class="et5" rowspan="2" width="93" style="font-size: 11pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                备注
            </td>
            <td class="et6" colspan="6" rowspan="2" width="548" style="font-size: 11pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">'.$con["beizhu"].'</td>
        </tr>
        <tr></tr>
        <tr>
            <td class="et26" colspan="7" rowspan="2" width="636" style="font-size: 11pt; font-weight: 700; vertical-align: middle; white-space: normal; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0);">
                本表格主要指标为1-9月份累计数，填报时若9月份报表数据未出，可报预估数值。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;报表数据仅用于园区产值数值统计，不作他用，请各企业配合上报，未上报企业将不再享受园区优惠政策（包括但不限于税收返还、人才公寓等）。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;纸质一份（需盖企业公章），一份电子版本发邮箱：lgqyfw@qq.com
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="et28" colspan="7" rowspan="25" width="636" style="font-size: 14pt; vertical-align: middle; white-space: normal;">
                <span class="font0">有关指标说明：</span><span class="font2"><br/></span><span class="font0">高新技术企业数：</span><span class="font2">由省级认定机构颁发“高新技术企业证书”，并且证书在有效期之内的企业数。以科技部门核定数为准。<br/></span><span class="font0">科技型中小企业数：</span><span class="font2">由科技部门认定的科技型中小企业个数。<br/></span><span class="font0">“新四军”创业人员数:</span><span class="font2">包括大学生创业者、大企业高管及其他连续创业者、科技人员创业者、留学归国人员创业者等创业人员数。包括个体工商户和企业中有技术、资本入股的人员。<br/></span><span class="font0">大学生创业者：</span><span class="font2">指具有国家承认的大专学历及以上文凭，从事创造新颖的产品、服务或实现其潜在价值的经营活动的组织者或合伙人。<br/></span><span class="font0">大企业高管及其他连续创业者：</span><span class="font2">指曾在年销售收入和资产总额均在5亿元以上的企业或公司，任正、副（总）经理、各职能总师、总监及其他类似公司管理层职务，以及已经连续创业3次以上，从事创造新颖的产品、服务或实现其潜在价值的经营活动的组织者或合伙人。<br/></span><span class="font0">科技人员创业者：</span><span class="font2">指在农、林、电、工、理、医、法、经济等领域具有中级职称以上，从事创造新颖的产品、服务或实现其潜在价值的经营活动的组织者或合伙人。<br/></span><span class="font0">留学归国人员创业者：</span><span class="font2">指具有国家教育部承认的海外留学生资格，从事创造新颖的产品、服务或实现其潜在价值的经营活动的组织者或合伙人。<br/></span><span class="font0">高中级技术职称人员：</span><span class="font2">包括高级技术职称人员和中级技术职称人员。<br/></span><span class="font0">高级技术职称人员：</span><span class="font2">指具有国家规定的高级专业技术职称资格并受聘高级技术职务的人员。包括高级工程师(含一级飞行员、高级船长)，农业推广研究员、高级农艺师，正副研究员，正副主任医师，正副教授、高级讲师、中学高级教师，高级经济师，高级会计师，高级统计师，正副译审，正副研究馆员，正副编审、高级记者、主任记者、高级编辑、主任编辑，一、二级律师、公证员，播音指导、主任播音员，高级工艺美术师，国家级教练、高级教练，一、二级艺术人员，高级政工师。<br/></span><span class="font0">中级技术职称人员：</span><span class="font2">指具有国家规定的中级专业技术职称资格并受聘中级技术职务的人员。包括工程师(含二级飞行员、船长、大副)，农艺师，助理研究员，主治医师，讲师、中学一级教师、小学高级教师，经济师，会计师，统计师，翻译，馆员，编辑、记者、一级校对，三级律师、公证员，一级播音员，工艺美术师，一级教练，三级艺术人员，政工师。<br/></span><span class="font0">专利拥有量：</span><span class="font2">指拥有经国内外知识产权行政部门授权且在有效期内的专利件数。<br/></span><span class="font0">期末有效发明专利数:</span><span class="font2">指报告期末企业作为第一专利权人拥有的、经境内外知识产权行政部门授权且在有效期内的发明专利件数。<br/></span>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>'; 
               $filename = $title.".xls"; 
           $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
    public function pullyuebao(){
         $datas = "1"; 
          $db = M('yuebaomonth');
          $dbs = M('yuebaoyear');
          $dbss = M('yuebaotoyear');
        $where['id'] = I('get.id');
        $c = $db->where($where)->find();
        $a = $dbs->where($where)->find();
        $b = $dbss->where($where)->find();
        // echo "<pre>";
        // var_dump($con);exit;
        // $dataResult = array('1','3','4');
        $headTitle = $a['company']; 
        $title = $a['company'];
        $headtitle= "<tr style='height:50px;border-style:none;><th border=\"0\" style='height:60px;width:270px;font-size:22px;' colspan='11' >".$a['company']."</th></tr>"; 
        $titlename = '<tr>
         <th>指标名称</th>
         <th>计量单位</th>
         <th>代码</th>
         <th>本年本期累计</th>
         <th>去年同期累计</th>
         <th>上月累计</th>
      </tr>
      <tr>
         <td>单位个数</td>
         <td>个</td>
         <td>1000</td>
         <td>'.$a["danwei"].'</td>
         <td>'.$b["danwei"].'</td>
         <td>'.$c["danwei"].'</td>
      </tr>
      <tr>
         <td>营业收入</td>
         <td>万元</td>
         <td>1010</td>
         <td>'.$a["yysr"].'</td>
         <td>'.$b["yysr"].'</td>
         <td>'.$c["yysr"].'</td>
      </tr>
      <tr>
         <td>软件业务收入合计</td>
         <td>万元</td>
         <td>1020</td>
         <td>'.$a["rjywsr"].'</td>
         <td>'.$b["rjywsr"].'</td>
         <td>'.$c["rjywsr"].'</td>
      </tr>
       <tr>
         <td>（一）按业务类型分列</td>
         <td>-</td>
         <td>1020a</td>
        <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>合计中：1.软件产品收入</td>
         <td>万元</td>
         <td>1021</td>
         <td>'.$a["rjcpsr"].'</td>
         <td>'.$b["rjcpsr"].'</td>
         <td>'.$c["rjcpsr"].'</td>
      </tr>
      <tr>
         <td>其中：信息安全产品收入</td>
         <td>万元</td>
         <td>10211</td>
         <td>'.$a["xxaqcp"].'</td>
         <td>'.$b["xxaqcp"].'</td>
         <td>'.$c["xxaqcp"].'</td>
      </tr>
      <tr>
         <td>工业软件件产品收入</td>
         <td>万元</td>
         <td>10212</td>
         <td>'.$a["gyrjcp"].'</td>
         <td>'.$b["gyrjcp"].'</td>
         <td>'.$c["gyrjcp"].'</td>
      </tr>
      <tr>
         <td>2.信息技术服务收入</td>
         <td>万元</td>
         <td>1022</td>
        <td>'.$a["xxjsfw"].'</td>
         <td>'.$b["xxjsfw"].'</td>
         <td>'.$c["xxjsfw"].'</td>
      </tr>
      <tr>
         <td>其中：运营服务收入</td>
         <td>万元</td>
         <td>10221</td>
         <td>'.$a["yyfwsr"].'</td>
         <td>'.$b["yyfwsr"].'</td>
         <td>'.$c["yyfwsr"].'</td>
      </tr>
      <tr>
         <td>电子商务平台技术服务收入</td>
         <td>万元</td>
         <td>10222</td>
         <td>'.$a["jsfwsr"].'</td>
         <td>'.$b["jsfwsr"].'</td>
         <td>'.$c["jsfwsr"].'</td>
      </tr>
      <tr>
         <td>集成电路设计收入</td>
         <td>万元</td>
         <td>10212</td>
         <td>'.$a["jcdlsj"].'</td>
         <td>'.$b["jcdlsj"].'</td>
         <td>'.$c["jcdlsj"].'</td>
      </tr>
      <tr>
         <td>3.嵌入式系统软件收入</td>
         <td>万元</td>
         <td>1023</td>
        <td>'.$a["qrsxtsr"].'</td>
         <td>'.$b["qrsxtsr"].'</td>
         <td>'.$c["qrsxtsr"].'</td>
      </tr>
      <tr>
         <td>(二)按服务模式分列</td>
         <td>-</td>
         <td>1020b</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>其中：软件外包服务收入</td>
         <td>万元</td>
         <td>1030</td>
        <td>'.$a["rjwbfw"].'</td>
         <td>'.$b["rjwbfw"].'</td>
         <td>'.$c["rjwbfw"].'</td>
      </tr>
      <tr>
         <td>(三)按销售地分列</td>
         <td>-</td>
         <td>1020c</td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>其中：软件业务出口</td>
         <td>万美元</td>
         <td>1040</td>
         <td>'.$a["rjywck"].'</td>
         <td>'.$b["rjywck"].'</td>
         <td>'.$c["rjywck"].'</td>
      </tr>
      <tr>
         <td>其中：软件外包服务出口</td>
         <td>万美元</td>
         <td>1041</td>
         <td>'.$a["rjwbfuck"].'</td>
         <td>'.$b["rjwbfuck"].'</td>
         <td>'.$c["rjwbfuck"].'</td>
      </tr>
      <tr>
         <td>嵌入式系统软件出口</td>
         <td>万美元</td>
         <td>1042</td>
         <td>'.$a["qrsxt"].'</td>
         <td>'.$b["qrsxt"].'</td>
         <td>'.$c["qrsxt"].'</td>
      </tr>
      <tr>
         <td>利润总额</td>
         <td>万元</td>
         <td>1050</td>
        <td>'.$a["lrze"].'</td>
         <td>'.$b["lrze"].'</td>
         <td>'.$c["lrze"].'</td>
      </tr>
      <tr>
         <td>税金总额</td>
         <td>万元</td>
         <td>1060</td>
         <td>'.$a["sjze"].'</td>
         <td>'.$b["sjze"].'</td>
         <td>'.$c["sjze"].'</td>
      </tr>
      <tr>
         <td>从业人员工资总额</td>
         <td>万元</td>
         <td>1070</td>
         <td>'.$a["cyrygz"].'</td>
         <td>'.$b["cyrygz"].'</td>
         <td>'.$c["cyrygz"].'</td>
      </tr>
      <tr>
         <td>从业人员平均人数</td>
         <td>人</td>
         <td>1080</td>
         <td>'.$a["cyrypj"].'</td>
         <td>'.$b["cyrypj"].'</td>
         <td>'.$c["cyrypj"].'</td>
      </tr>
'; 
        $filename = $title."月报表.doc"; 
        $this->excelData($datas,$titlename,$headtitle,$filename); 
    }
}