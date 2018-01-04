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
         <form method="post" action="<?php echo U('Complain/jibao');?>">
           <li><label class="l_f">公司名称</label><input name="company" type="text"  class="text_add" placeholder="输入公司名称"  style=" width:400px"/></li>
           <!-- <li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li> -->
           <li style="width:120px;"><input type="submit" class="btn_search" value="查询"></input></li>
         </form>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
       <div style=" margin-top:10px">
       <form action="<?php echo U('complain/exceljibao');?>" method="post">
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
       <table class="table table-striped table-bordered table-hover table_tr_td" id="sample-table">
    <thead>
     <tr>
        <th>公司名称</th>
        <!-- <th>公司法定代表人</th>
        <th>公司地址</th>
        <th>统计联系人电话</th> -->
        <th>主营业务收入</th>
        <th>软件和信息服务业务收入</th>
        <th>研发投入经费</th>
        <th>利润总额</th>
        <th>税金总额</th>
        <th>新产品产值</th>
        <!-- <th>主营业务</th> -->
        <!-- <th>代表业务</th> -->
        <!-- <th>行业类别</th> -->
        <!-- <th>新四军创业人员数</th> -->
        <!-- <th>大学生创业者</th> -->
        <!-- <th>大学生创业者大企业高管及其他连续创业者</th> -->
        <!-- <th>科技人员创业者</th> -->
        <!-- <th>留学归国人员创业者</th>
        <th>高新技术企业</th> -->
        <!-- <th>国省千人数量</th> -->
        <!-- <th>硕士人数</th> -->
        <!-- <th>本科人数</th> -->
        <!-- <th>专科以及以下</th> -->
        <!-- <th>专科以及以下中高级技术职称人员</th> -->
        <!-- <th>中高级技术职称人员</th> -->
        <!-- <th>开展合作的高校，省级以上研究院及行业协会个数</th>
        <th>企业成果</th>
        <th>科技孵化器</th> -->
        <!-- <th>众创空间个数</th> -->
        <!-- <th>众创空间面积</th> -->
        <!-- <th>双创团队个数</th> -->
        <!-- <th>创业创新基地建筑面积</th>
        <th>政府补助项目名称</th>
        <th>政府补助项目金额</th> -->
        <th>备注说明</th>
        <th>信息导出</th>
        <!-- <th>房间号</th>
        <th>缴税地</th> -->
      </tr>
    </thead>
  <tbody>
    <?php if(is_array($jibao)): $i = 0; $__LIST__ = $jibao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
          <td><?php echo ($v['company']); ?></td>
          <td><?php echo ($v['imploproduct']); ?></td>
          <td><?php echo ($v['infomaney']); ?></td>
         <!--  <td><?php echo ($v['comform']); ?></td>
          <td><?php echo ($v['counttel']); ?></td>
          <td><?php echo ($v['onemaney']); ?></td>
          <td><?php echo ($v['infomaney']); ?></td> -->
          <td><?php echo ($v['developmaney']); ?></td>
          <td><?php echo ($v['countmaney']); ?></td>
          <td><?php echo ($v['shuijin']); ?></td>
          <td><?php echo ($v['newproduct']); ?></td>
        <!--   <td><?php echo ($v['imploproduct']); ?></td>
          <td><?php echo ($v['dbproduct']); ?></td>
          <td><?php echo ($v['tradetype']); ?></td>
          <td><?php echo ($v['xinsijun']); ?></td>
          <td><?php echo ($v['countstuden']); ?></td>
          <td><?php echo ($v['tostart']); ?></td>
          <td><?php echo ($v['kjchuangye']); ?></td>
          <td><?php echo ($v['turtlecy']); ?></td> -->
          <!-- <td><?php echo ($v['countpatent']); ?></td>
          <td><?php echo ($v['ruanzhuzuo']); ?></td>
           -->
<!--           <td><?php echo ($v['gaoxin']); ?></td>
          <td><?php echo ($v['kejizhongxiao']); ?></td>
          <td><?php echo ($v['congye']); ?></td>
          <td><?php echo ($v['guoxingqianren']); ?></td>
          <td><?php echo ($v['shuoshi']); ?></td>
          <td><?php echo ($v['benke']); ?></td>
          <td><?php echo ($v['zhuanke']); ?></td>
          <td><?php echo ($v['zgjjszc']); ?></td>
          <td><?php echo ($v['kzhzdgx']); ?></td>
          <td><?php echo ($v['qiyecg']); ?></td>
          <td><?php echo ($v['fuhuaqi']); ?></td>
          <td><?php echo ($v['zckjgs']); ?></td>
          <td><?php echo ($v['zckjmj']); ?></td>
          <td><?php echo ($v['sctdgs']); ?></td>
          <td><?php echo ($v['cyjdjzmj']); ?></td>
          <td><?php echo ($v['zfbzxm']); ?></td>
          
          <td><?php echo ($v['beizhu']); ?></td>
          <td><?php echo ($v['homenumber']); ?></td>
          <td><?php echo ($v['jiaoshuidi']); ?></td> -->
          <td><?php echo ($v['zfbzje']); ?></td>
          <td><a href="<?php echo U('Complain/pulljibao',array('id'=>$v['id']));?>">报表导出</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
  </table>
  <div class="page"><?php echo ($page); ?></div>
   </div>
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