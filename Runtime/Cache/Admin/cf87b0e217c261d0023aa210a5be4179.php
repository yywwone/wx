<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">

<head>

<title>网新后台</title>

<meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/admin/css/style.css"/>       
        <link href="/Public/admin/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/admin/css/ace.min.css" />
        <link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" />
        <style type="text/css">
        .qylr tr td{
          width: 50px;height:100px;
        }
        .qylrs{
          width: 50px;height:100px;
          overflow: hidden;
        }
      </style>
    <script src="/Public/admin/js/jquery.min.js"></script>
    <script type="text/javascript">
      window.jQuery || document.write("<script src='/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>
    <script type="text/javascript">
      if("ontouchend" in document) document.write("<script src='/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="/Public/admin/js/bootstrap.min.js"></script>
    <script src="/Public/admin/js/typeahead-bs2.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="/Public/admin/js/jquery.dataTables.min.js"></script>
    <script src="/Public/admin/js/jquery.dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="/Public/admin/js/H-ui.js"></script> 
        <script type="text/javascript" src="/Public/admin/js/H-ui.admin.js"></script> 
        <script src="/Public/admin/layer/layer.js" type="text/javascript" ></script>
        <script src="/Public/admin/laydate/laydate.js" type="text/javascript"></script>
  
<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css" />

<link rel="stylesheet" href="/Public/admin/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="/Public/admin/css/fullcalendar.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-style.css" />

<link rel="stylesheet" href="/Public/admin/css/matrix-media.css" />

<link href="/Public/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="/Public/admin/css/jquery.gritter.css" />
<link rel="stylesheet" href="/Public/admin/css/page.css" />
<style type="text/css">
 .table_tr_td tr td{
  width:120px;height:150px;
 }
</style>
</head>

<body>



<!--Header-part-->

<div id="header">
  <div style="width:100px;height:30px"></div>
<b><a href="<?php echo U('index/index');?>" style="color:green;font-size:30px;margin-left:30px" ><?php echo session('type')['name'];?></a></b>

</div>
<div id="search">
  <!-- <input type="text" placeholder="Search here..."/> -->
 <div style="width:20px;height:4px"></div>
 <!-- <a href="http://www.buy297.com" style="font-size:13px;margin-right:30px;" target="view_frame">站点首页</a> -->
  <a href="<?php echo U('index/uplogin');?>" style="font-size:13px;margin-right:20px">退出登录</a>
</div>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> one</a>

  <ul>

      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>网站管理</span></a> </li>
      <?php if(session('type')['quan']=='1'): ?><li> <a href="<?php echo U('index/accout');?>"><i class="icon icon-signal"></i> <span>账号管理</span></a> </li><?php endif; ?>
    <li> <a href="<?php echo U('index/widgets');?>"><i class="icon icon-inbox"></i> <span>订单管理</span></a> </li>

    <li><a href="<?php echo U('index/tables');?>"><i class="icon icon-th-list"></i> <span>用户管理</span></a></li>
    <li><a href="<?php echo U('index/facilitator');?>"><i class="icon icon-th"></i> <span>服务商管理</span></a></li>

    <li><a href="<?php echo U('index/qylr');?>"><i class="icon icon-calendar"></i> <span>企业录入信息</span></a></li>
    <li><a href="<?php echo U('index/grid');?>"><i class="icon icon-fullscreen"></i> <span>服务管理</span></a></li>
     <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>报表</span><!--  <span class="label label-important">3</span> --></a>
      <ul>
        <li><a href="<?php echo U('complain/jibao');?>">季报</a></li>
        <li><a href="<?php echo U('complain/yuebao');?>">月报</a></li>
        <!-- <li><a href="<?php echo U('complain/hdlist');?>">活动</a></li> -->
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>投诉&评论&活动</span><!--  <span class="label label-important">3</span> --></a>
      <ul>
        <li><a href="<?php echo U('complain/complain');?>">投诉</a></li>
        <li><a href="<?php echo U('complain/comment');?>">评论</a></li>
        <li><a href="<?php echo U('complain/hdlist');?>">活动</a></li>
      </ul>
    </li>
  </ul>

</div>

<!--sidebar-menu-->


<!--main-container-part-->

<div id="content">

<!--breadcrumbs-->

  <div id="content-header">

    <div id="breadcrumb"> <a href="<?php echo U('index/index');?> 
      " title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>

  </div>

<!--End-breadcrumbs-->



<!--Action boxes-->

  <div class="page-content clearfix">
    <div id="Member_Ratings">
      <div class="d_Confirm_Order_style">
    <div class="search_style">
      <div class="title_names">搜索查询</div>
      <ul class="search_content clearfix">
        <form method="post" action=<?php echo U('index/widgets');?>>
         <li><label class="l_f">订单用户</label><input name="name" type="text"  class="text_add" placeholder="输入公司名称"  style=" width:400px"/></li>
         <li style="width:90px;"><input type="submit" class="btn_search"></input></li>
       </form>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
      <span class="l_f" style="margin-top:10px">
        <a href="<?php echo U('complain/excelqiye');?>" id="member_add" class="btn btn-warning">企业录入信息导出</a>
        <a href="#" style="border-radius:10px;margin-left:10px" id="member_add" class="btn btn-warning">企业录入信息导入</a> -->
    <div style="margin-left:10px; float:right;border:1px solid #ccc;border-radius:10px;width:400px;text-align:center">
        <!-- 模板导入 -->
    <form method="post" action="<?php echo U('Exceladd/qylrfile');?>" name="theForm" id="uploadForm" enctype="multipart/form-data" >
    <div style="position:relative;width:300px;height: 50px;display:inline;box-sizing:border-box;margin-right: 100px;padding-left:30px;
 ">
     <p style="width:100px;height:30px;line-height:30px;margin-left:-10px;margin-top:5px;display:inline-block;background: #3b98d6;border-radius: 5px;color:#fff;">选择文件</p>
          <input type="file" class="se2" name="qylr" id="file" size="45" onchange="checkField(this.value)" style="height: 41px; width: 100px;opacity:0;position:absolute;left:1rem;top:-0.7rem;border:1px solid blue;"/>
           </div>  
              <input class="se1" type="submit" value="导入" style="background: #3b98d6;border-radius: 5px;color:#fff;border:none;height:30px;width:50px;"/>
         
   </form>
   </div>
       </span>
       <span class="l_f">
       </span>
       <span class="r_f" >共：<b><?php echo ($count); ?></b>条</span>
     </div>
     <!---->
     <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover qylr" id="sample-table">
    <thead>
     <tr>
        <!-- <th width="80">批次</th> -->
        <th width="80">企业名称</th>
        <th width="120">公司法人</th>
        <th width="150">公司地址</th>
        <th width="">公司电话</th>
        <th width="180">项目所属行业</th>
        <th width="180">统一社会信用代码</th>
        <th width="180">注册时间</th>
        <th width="180">企业人数</th>
        <th width="180">注册资金</th>
        <th width="180">纳税地</th>
        <th width="180">日常工作联系人</th>
        <th width="180">日常工作联系方式/邮箱</th>
        <th width="180">统计工作联系人</th>
        <th width="180">统计联系方式/邮箱</th>
        <th width="180">公司性质</th>
        <th width="180">操作</th>
        <!-- <th width="180">缴税地址</th> -->
      </tr>
    </thead>
  <tbody>
   <tr>
      <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!-- <td><div class="qylrs"><?php echo ($v['pici']); ?></td></div> -->
          <td><div class="qylrs"><?php echo ($v['gs_name']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_faren']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_add']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_tel']); ?></td> </div>
          <td><div class="qylrs"><?php echo ($v['gs_yw']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_xydm']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_time']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_people']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_maney']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['gs_nsd']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['rc_people']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['rc_tel']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['tj_people']); ?></td></div>
          <td><div class="qylrs"><?php echo ($v['tj_tel']); ?></td></div>
          <td><div class="qylrs">
          <?php switch($v['qydjzc']): case "1": ?>有限责任公司<?php break;?>
            <?php case "2": ?>个人独资<?php break;?>
            <?php case "3": ?>股份公司<?php break;?>
            <?php case "4": ?>其他<?php break;?>
            <?php default: endswitch;?>
          </td></div>
          <td><div class="qylrs"><a href="<?php echo U('complain/exceloneqiye',array('id'=>$v['id']));?>">导出本条数据</a></div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>       
      </tbody>
  </table>
   </div>
   <div class="page"><?php echo ($page); ?></div>
  </div>
 </div>
</div>

  
  </div>

</div>



<!--end-main-container-part-->



<!--Footer-part-->



<div class="row-fluid">

  <div id="footer" class="span12"><a href="http://themedesigner.in/"></a> </div>

</div>



<!--end-Footer-part-->



<script src="/Public/admin/js/excanvas.min.js"></script> 

<script src="/Public/admin/js/jquery.min.js"></script> 

<script src="/Public/admin/js/jquery.ui.custom.js"></script> 

<script src="/Public/admin/js/bootstrap.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.min.js"></script> 

<script src="/Public/admin/js/jquery.flot.resize.min.js"></script> 

<script src="/Public/admin/js/jquery.peity.min.js"></script> 

<script src="/Public/admin/js/fullcalendar.min.js"></script> 

<script src="/Public/admin/js/matrix.js"></script> 

<script src="/Public/admin/js/matrix.dashboard.js"></script> 

<script src="/Public/admin/js/jquery.gritter.min.js"></script> 

<script src="/Public/admin/js/matrix.interface.js"></script> 

<script src="/Public/admin/js/matrix.chat.js"></script> 

<script src="/Public/admin/js/jquery.validate.js"></script> 

<script src="/Public/admin/js/matrix.form_validation.js"></script> 

<script src="/Public/admin/js/jquery.wizard.js"></script> 

<script src="/Public/admin/js/jquery.uniform.js"></script> 

<script src="/Public/admin/js/select2.min.js"></script> 

<script src="/Public/admin/js/matrix.popover.js"></script> 

<script src="/Public/admin/js/jquery.dataTables.min.js"></script> 

<script src="/Public/admin/js/matrix.tables.js"></script> 
<script>
<?php  $db = M('jibao'); $count = $db->count(); ?>
$(function(){
        
          a = $count;
           $.ajax({
            type:"post",
            url:'<?php echo U("/Admin/Complain/jibaos");?>',
            data:"id="+a,
            success:function(status){
                if(status==1){
                alert('新消息');
                }else{
                   alert('no');
                }
            },
            error:function(res){
               alert('系统错误');
            }
        });
        })
</script>

  <script type="text/javascript">
   if(<?php echo I('get.state');?>=='1'){
              alert('录入成功');
            }
  </script>


<!-- <script type="text/javascript">

  // This function is called from the pop-up menus to transfer to

  // a different page. Ignore if the value returned is a null string:

  function goPage (newURL) {



      // if url is empty, skip the menu dividers and reset the menu selection to default

      if (newURL != "") {

      

          // if url is "-", it is this page -- reset the menu:

          if (newURL == "-" ) {

              resetMenu();            

          } 

          // else, send page to designated URL            

          else {  

            document.location.href = newURL;

          }

      }

  }



// resets the menu selection upon entry to this page:

function resetMenu() {

   document.gomenu.selector.selectedIndex = 2;

}

</script> -->

</body>

</html>