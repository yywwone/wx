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
          text-align: center;
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
        <form method="post" action="<?php echo U('Complain/yuebao');?>">
         <li><label class="l_f">公司查询</label><input name="company" type="text"  class="text_add" placeholder="输入公司名称"  style=" width:400px"/></li>
         <li style="width:90px;"><input type="submit" class="btn_search" value="查询"></input></li>
       </form>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
       <div style=" margin-top:10px">
       <form action="<?php echo U('complain/excelyuebao');?>" method="post">
       <span style="float:left;text-align:center;margin-left:10px;">
          公司名<input type="text" name="company" placeholder="公司名称">
       </span>
       <span style="float:left;text-align:center;margin-left:10px;">
          开始时间<input type="text" name="startime" placeholder="年/月/日">
        </span>
       <span style="float:left;text-align:center;margin-left:10px;">
          结束时间<input type="text" name="overtime" placeholder="年/月/日">
          </span>
        <span style="float:left;text-align:center;margin-left:10px;">

          <input type="submit" class="btn_search" value="报表导出"></input>
        </span>
      </form>
        <!-- <a href="<?php echo U('index/upfacilitator');?>" id="member_add" class="btn btn-warning"><i class="icon-plus"></i>添加服务商</a> -->
        <!-- <a href="<?php echo U('complain/exceljibao');?>" id="member_add" class="btn btn-warning">季报信息导出</a> -->
        <!-- <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a> -->
       </span>

       <span class="r_f" style="float:right">共：<b><?php echo ($count); ?></b>条</span>
       </div>
     </div>
     <!---->
     <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover qylr" id="sample-table">
    <thead>
     <tr>
        <th width="120">公司名称</th>
        <th width="120">单位个数</th>
        <th width="150">营业收入</th>
        <th width="120">软件业务收入合计</th>
        <th width="180">软件产品收入</th>
        <th width="180">信息安全产品收入</th>
        <th width="180">工业软件产品收入</th>
        <th width="180">信息技术服务收入</th>
        <th width="180">运营服务收入</th>
        <th width="180">电子商务平台技术服务收入</th>
        <th width="180">集成电路设计收入</th>
        <th width="180">嵌入式系统软件收入</th>
        <th width="180">软件外包服务</th>
        <th width="180">嵌入式软件系统出口</th>
        <th width="180">利润总额</th>
        <th width="180">税金总额</th>
        <th width="180">从业人员工资总额</th>
        <th width="180">从业人员平均人数</th>
        <th width="180">软件业务出口</th>
        <th width="180">软件外包/服务出口</th>
        <th width="180">创建时间</th>
        <!-- <th width="180">缴税地址</th> -->
      </tr>
    </thead>
  <tbody>
   <tr>
      <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><!-- <td><div class="qylrs"><?php echo ($v['pici']); ?></td></div> -->
          <td><div class="qylrs"><a title="报表导出" href="<?php echo U('Complain/pullyuebao',array('id'=>$v['id']));?>"><?php echo ($v['company']); ?></a></td></div>
          <td><div class="qylrs"><?php echo ($v['danwei']); ?>/个</td></div>
          <td><div class="qylrs"><?php echo ($v['yysr']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['rjywsr']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['rjcpsr']); ?>/万元</td> </div>
          <td><div class="qylrs"><?php echo ($v['xxaqcp']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['gyrjcp']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['xxjsfw']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['yyfwsr']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['jsfwsr']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['jcdlsj']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['qrsxtsr']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['rjwbfw']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['qrsxt']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['lrze']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['sjze']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['cyrygz']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['cyrypj']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['riywck']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo ($v['rjwbfuck']); ?>/万元</td></div>
          <td><div class="qylrs"><?php echo date('Y/m/d',$v['create_time']);?></td></div>
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