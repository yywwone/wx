<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> </title>


<link rel="icon" href="/Public/home/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
<!--本页CSS-->

<link href="/Public/home/dist/css/wx_qt_index.css" rel="stylesheet">
<link href="/Public/home/dist/css/animate.min.css" rel="stylesheet">
<style type="text/css">
 .opt{
 	border:1px solid yellow;
 	width: 50px;
 }
</style>

</head>


<!--轮播-->
<div class="wx_qt_header">
		<div class="wx_qt_index_ds">
			<!--地址栏-->
			<!-- <span class="wx_qt_index_ds_dz" style="margin-left:-0.2rem">
				<select  class="opt">
					<?php if(is_array($yuanqu)): $i = 0; $__LIST__ = $yuanqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yuan): $mod = ($i % 2 );++$i;?><option><?php echo ($yuan['yuan']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
		    </span> -->
			<!--搜索栏-->
			<!-- <div class="wx_qt_index_ds_ss">
				<form>
					<input type="text" placeholder="请输入搜索内容" class="wx_qt_index_ds_ss_input">
					<input type="image" src="/Public/admin/dist/images/index_ss.png" class="wx_qt_index_ds_ss_input_img">
				</form>
			</div> -->
			<!-- <a href="<?php echo U('gslb/gslb');?>"><img src="/Public/admin/dist/images/index_yhzx.png" class="wx_qt_index_grzx_img"></a> -->
		</div>
		<!--轮播-->
		<div class="wx_qt_index_slider_box">
			<div class="wx_qt_index_slider_img">
				<img src="/Public/admin/uploads/lb/xinxi.lb_img1.png">
				<img src="/Public/admin/uploads/lb/xinxi.lb_img2.png">
				<img src="/Public/admin/uploads/lb/xinxi.lb_img3.png">
				<img src="/Public/admin/uploads/lb/xinxi.lb_img4.png">
			</div>
			<div class="wx_qt_index_slider_sx">
				<div class="wx_qt_index_slider_sx_pre"></div>
				<div class="wx_qt_index_slider_sx_next"></div>
			</div>
		</div>
	</div>
<div class="wx_qt_index_main_box">
	<!--分类-->
	<div class="wx_qt_fl_box_box">
		<div class="wx_qt_fl_box">
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('yqfc');?>">
				<img src="/Public/admin/dist/images/index_fl4 (2).png">
				<p>园区风采</p>
			</a></div>	
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('zsyz');?>">
				<img src="/Public/admin/dist/images/index_fl3.png">
				<p>企业入园</p>
			</a></div>
			<!-- <div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw','id='.$pagintor['4']['id']);?>">
				<img src="/Public/admin/dist/images/pagintor.4.png">
				<p>场地租赁</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw','id='.$pagintor['0']['id']);?>">
				<img src="/Public/admin/dist/images/pagintor.0.png">
				<p>企业服务</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw','id='.$pagintor['1']['id']);?>">
				<img src="/Public/admin/dist/images/pagintor.1.png">
				<p>物业服务</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw','id='.$pagintor['2']['id']);?>">
				<img src="/Public/admin/dist/images/pagintor.2.png">
				<p>人才公寓</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw','id='.$pagintor['3']['id']);?>">
				<img src="/Public/admin/dist/images/pagintor.3.png">
				<p>活动通知</p>
			</a></div> -->

			<div class="wx_qt_fl_box_main"><a href="<?php echo U('cdzs');?>">
				<img src="/Public/admin/dist/images/aa.png">
				<p>场地租赁</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw2',array('id'=>'20'));?>">
				<img src="/Public/admin/dist/images/xing.png">
				<p>企业服务</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw2',array('id'=>'33'));?>">
				<img src="/Public/admin/dist/images/index_fl5 (2).png">
				<p>物业服务</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qyfw');?>">
				<img src="/Public/admin/dist/images/pagintor2.png">
				<p>人才公寓</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('Word/activityTitle');?>">
				<img src="/Public/admin/dist/images/click.png">
				<p>活动通知</p>
			</a></div>
			<div class="wx_qt_fl_box_main"><a href="<?php echo U('qbfl');?>">
				<img src="/Public/admin/dist/images/index_fl8.png">
				<p>全部分类</p>
			</a></div>	
		</div>
	</div>
	<!--广播-->
	<div class="guangbo">
        <img src="/Public/admin/dist/images/guangbo.png" alt="广播" class="pulse animated infinite">
        <ul class="guangbo_text">
            <ul class="guangbo_text_ul1">
              <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Word/activityDetail','id='.$v['id']);?>"><?php echo ($v['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="guangbo_text_ul2"></ul>

        </ul>

	</div>
	<!--入园企业风采-->
	<div class="wx_qt_fc_box">
		<h1><a href="<?php echo U('gslb');?>">入园企业风采</a></h1>
		<div class="wx_qt_fc_box_main">
			<?php if(is_array($pagintor1)): $i = 0; $__LIST__ = $pagintor1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="wx_qt_fc_box_main_con"><a href="<?php echo U('aboutc','id='.$item['id']);?>">
				<img src="/Public/admin/dist/uploads/<?php echo ($item["img"]); ?>">
				<p><?php echo ($item["name"]); ?></p>
			</a></div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="wx_qt_fc_box_main_con"><a href="<?php echo U('gslb');?>">
				<img src="/Public/admin/dist/images/index_qyfc4.png">
				<p>更多企业&gt;&gt;</p>
			</a></div>
		</div>
	</div>
</div>
<!--底部banner-->
<a href="<?php echo U('Word/details');?>">
<img src="/Public/admin/uploads/<?php echo ($xinxi["db_img"]); ?>" class="wx_qt_index_banner_bt">
</a>
<!-- yxw add  start-->
<p class="wx_fontadd">
	<span>新增总访客量:20212人</span>
	<span>今日访客量:210人</span>
</p>
	

<!-- yxw end -->

<!-- 底部栏显示标识 -->
<div class="wx_qt_dbgdl_active">0</div>

<!--底部-->
<div class="wx_qt_foot_zw"></div>
<div class="wx_qt_foot">
	<div class="wx_qt_foot_top"></div>
	<div class="wx_qt_foot_main_box">
		<div class="wx_qt_foot_main_con wx_qt_foot_main_con_active"><a href="<?php echo U('index');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-shouye-copy"></use>
			</svg>
			<p class="">园区</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="<?php echo U('Luntan/activity');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-fenlei"></use>
			</svg>
			<p>活动</p>
		</a></div>
		<div class="wx_qt_foot_main_con"><a href="<?php echo U('Luntan/community');?>">
            <!--<a href="<?php echo U('zsyz');?>">-->
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-zhaoshang"></use>
			</svg>
			<p>论坛</p>
		</a></div>
		<div class="wx_qt_foot_main_con">
		
		
		<?php if(!session('user')['openid']){ ?>
<a href="<?php echo U('Word/entry');?>">

			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>我的</p>
		</a>
		<?php }else{ ?>
<a href="<?php echo U('Index/per');?>">

			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>我的</p>
		</a>
		<?php } ?>
		
		
		
		
		</div>
	</div>
</div>
<!--通用JS-->
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="/Public/home/dist/js/wx_qt_foot_active.js"></script>
<!--本页JS-->

<script src="/Public/admin/dist/js/index_slider.js"></script>
<script src="/Public/admin/dist/js/hd.js"></script>
<script src="/Public/admin/dist/js/hd_kz.js"></script>
<script src="/Public/home/dist/js/wx_index_text.js"></script>
<script type="text/javascript">
<?php  $statu = I('get.statu'); $alert = I('get.alert'); ?>
          if(<?php echo ($statu); ?>=='1'){
 	          alert('企业信息录入成功');
               };
 </script>

</html>