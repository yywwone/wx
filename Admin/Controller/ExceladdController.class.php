<?php
namespace Admin\Controller;
use Think\Controller;
class ExceladdController extends Controller{
   
         // 企业信息批量录入
    public function qylrfile(){
        // var_dump($_FILES);exit;
      if($_FILES['qylr']['name']){
           if($_FILES){       
                $type   = "admin/uploads/baobiao/";
                $ROOT = 'Public/';
                $path   = $type;
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('xls','xlsx');// 设置附件上传类型
                $upload->rootPath  =     $ROOT; // 设置附件上传根目录
                $upload->savePath  =     $path; // 设置附件上传（子）目录
                $upload->subName   =     array('date','Ymd');
                          // 上传文件
                          // echo '<pre>';
                          // echo '<pre>';
                   // print_r($upload);die;
                   $info   =   $upload->upload();
                   // echo '<pre>';
                   // print_r($upload);
                   $time   = date("Ymd", time());
                        // img
                        if($info){
		                  $filename   = $ROOT.$info['qylr']['savepath'].$info['qylr']['savename'];
		                  $exts = $info['qylr']['ext'];
                         }
                         // print_r($filename);exit;
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
                }elseif(is_null($exts)){
                     die("<script>alert('导入出错，请重试！');history.back(-1);</script>");
                }
                    // 处理
                    $PHPExcel = $PHPReader->load($filename);    // 载入文件
                    $currentSheet = $PHPExcel->getSheet(0);        // 获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
                    $allColumn = $currentSheet->getHighestColumn();   // 获取总列数
                    $allRow = $currentSheet->getHighestRow();              // 获取总行数
                    for ($currentRow = 0; $currentRow <= $allRow; $currentRow++) {// 循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
                        for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn++) {// 从哪列开始，A表示第一列
                            $address = $currentColumn . $currentRow;             // 数据坐标
                            $ExlData[$currentRow][$currentColumn] = $currentSheet->getCell($address)->getValue();// 读取到的数据，保存到数组$ExlData中
                        }
                    }
                    unset($ExlData[0]);//清楚数组0的空值,这一组没有数据
                    unset($ExlData[1]);//excel表头，第一行
                    // unset($ExlData[2]);//excel表头，第一行
                    ini_set('max_execution_time', '500');//设置导入最大时长。
                    $arr = array_values($ExlData);//重新排序数组键名
                    foreach($arr as $k=>$v){
                        if($v["A"] != null){//不导入空值
                            //处理时间格式错误
                            import("Org.Util.PHPExcel.Shared.Date");
                            $shared = new \PHPExcel_Shared_Date();
                            // if(trim($v["J"])=="通过"){$zt = 2;}else{$zt = 1;}
                            // if(trim($v["L"])=="流标"){$zb = 0;}else{$zb = 1;}
                            // if($v["C"] !=null){$c = date("Y-m-d",$shared ->ExcelToPHP($v["C"]));}else{$c=null;}
                            // if($v["D"] !=null){$d = date("Y-m-d",$shared ->ExcelToPHP($v["D"]));}else{$d=null;}
                            // $data['pici'] = $v["A"];
                            $data['gs_name'] = $v["A"];
                            $data['gs_faren'] =$v["B"];
                            $data['gs_add'] =$v["C"];
                            $data['gs_tel'] = $v["D"];
                            $data['gs_yw'] = $v["E"];
                            $data['gs_cpdb'] = $v["F"];//客户联系方式
                            $data['gs_xzcg'] = $v["J"];
                            $data['gs_zyzb'] = $v["H"];//完成情况
                            $data['gs_people'] = $v["I"];//状态，是否审核
                            $data['gs_cyrs'] = $v["J"];
                            $data['gs_jszc'] = $v["K"];
                            $data['gx_gsqy'] = $v["L"];
                            $data['gs_kjqy'] = $v["M"];
                            $data['gs_zlsl'] = $v["N"];
                            $data['gs_yxzl'] = $v["O"];
                            $data['gs_rjzzq'] = $v["P"];
                            $data['zcdz'] = $v["K"];
                            $data['jsdz'] = $v["L"];
                            // $data['a_zb'] =$zb;
                           
                            $re = M("qy_luru")->add($data);//导入数据库
                           
                        }else{
                            // die("<script>alert('设计师列不能为空！');history.back(-1);</script>");
                        }
                   
             }
           }
      }
        if($re){
                                $this->redirect("Index/qylr",array('state'=>'1'));
                            }else{
                                die("<script>alert('导入出错，请重试！');history.back(-1);</script>");
                            }
    }
    
}