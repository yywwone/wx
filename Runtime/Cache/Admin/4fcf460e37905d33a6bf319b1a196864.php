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
        <link rel="stylesheet" href="/Public/admin/css/page.css" />
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
         <form method="post" action="<?php echo U('index/grid',array('state'=>'1'));?>">
           <li><label class="l_f">服务名称</label><input name="name" type="text"  class="text_add" placeholder="输入服务名称"  style=" width:400px"/></li>
           <!-- <li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li> -->
           <li style="width:120px;"><input type="submit" class="btn_search" value="查询"></input></li>
         </form>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
       <span class="l_f" style="margin-top:10px">
        <?php if(session('type')['quan']=='1'): ?><a href="<?php echo U('index/fuwu');?>" id="member_add" class="btn btn-warning"><i class="icon-plus"></i>添加服务</a>
        <?php else: ?>
        <a href="#" id="member_add" class="btn btn-warning">园区服务</a><?php endif; ?>
        <!-- <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a> -->
       </span>
       <span class="r_f">共：<b><?php echo ($count); ?></b>条</span>
     </div>
     <!---->
     <div class="table_menu_list table_tr_td">
       <table class="table table-striped table-bordered table-hover" id="sample-table" style="text-overflow:hidden">
    <thead>
     <tr>
        <th width="80">服务名称</th>
        <th width="100">服务logo</th>
        <th width="80">服务详情图</th>
        <th>服务介绍</th>
        <th width="150">服务流程</th>
        <th width="">创建时间</th>
        <th width="180">更新时间</th>
        <!-- <th width="180">所属服务</th> -->
        <?php if(session('type')['quan']=='1'): ?><th width="180">操作</th><?php endif; ?>
      </tr>
    </thead>
  <tbody>
    <?php if(is_array($fuwu)): $i = 0; $__LIST__ = $fuwu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
          <td><?php echo ($v['name']); ?></td>
          <td><img src="/Public/admin/uploads/<?php echo ($v[img]); ?>"></td>
          <td><img src="/Public/admin/uploads/<?php echo ($v[image]); ?>"></td>
          <td style="width:150px"><div style="width:150px;height:100px;overflow:hidden"><?php echo ($v['fw_js']); ?></div></td>
          <td style="width:150px"><div style="width:150px;height:100px;overflow:hidden"><?php echo ($v['fw_lc']); ?></div></td>
          <td style="width:120px"><?php echo ($v['create_time']); ?></td>
          <td><?php echo ($v['update_time']); ?></td>
          <!-- <td><?php echo ($v['f_id']); ?></td> -->
            <?php if(session('type')['quan']=='1'): ?><td>
            <a href="<?php echo U('index/fuwu',array('id'=>$v['id']));?>">更新</a>
            <a href="<?php echo U('index/addsfuwu',array('id'=>$v['id'],'state'=>'3'));?>" onclick="if(confirm('确认删除')){return true;}else{return false;}">删除</a>
              </td><?php endif; ?>
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