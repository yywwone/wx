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

		<link href="/Public/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
		<link href="/Public/home/dist/css/personal.css" type="text/css" rel="stylesheet"/>

</head>


		<header class="hello-personal-box">
			<div class="welcoming-speech">
				<!-- <p class="welcoming"><img style="width:50px;height:50px;border-radius:50px" src="<?php echo ($item["img"]); ?>"></p> -->
				<p class="ur-name"><span><?php echo session('qy');?></span></p>
			</div>
		</header>
		<div class="content-box">
			<ul class="nav-bars">
				<li><a href="<?php echo U('index/enter');?>"><span class="icon icon-bridge"></span>企业录入</a></li>
				<!-- yxw add -->
				<li><a href="<?php echo U('baobiao/month');?>"><span class="icon icon-indent"></span>月报在线填写</a></li>
				<li><a href="<?php echo U('baobiao/ji');?>"><span class="icon icon-suggest"></span>季报在线填写</a></li>
				<li><a href="<?php echo U('download');?>"><span class="icon icon-down"></span>模板下载</a></li>
				<!-- yxw end -->
				<!-- <li><a href="<?php echo U('index/oder');?>"><span class="icon icon-indent"></span>服务订单</a></li>
				<li><a href="<?php echo U('index/fwpj');?>"><span class="icon icon-suggest"></span>投诉建议</a></li> -->
				<li><a href="#"><span class="icon icon-alter"></span>修改密码</a></li>
			</ul>
		</div>
		<div class="exit-box">
			<a href="<?php echo U('index/logout');?>">退出登录</a>
		</div>
		<!-- 底部栏显示标识 -->
			<div class="wx_qt_dbgdl_active">3</div>
	
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
		<div class="wx_qt_foot_main_con"><a href="<?php echo U('Word/entry');?>">
			<svg class="wx_qt_foot_icon" aria-hidden="true">
				<use xlink:href="#icon-iconfontyonghu-copy"></use>
			</svg>
			<p>我的</p>
		</a></div>
	</div>
</div>
<!--通用JS-->
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
<script src="/Public/home/dist/js/wx_qt_foot_active.js"></script>
<!--本页JS-->

		<script  src="/Public/home/dist/js/mobblie.js"></script>
		<script src="/Public/home/dist/js/font_440400_waj7qmu35o2yb9.js"></script>
		<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='1'){
            	alert('信息提交成功');
            }
		</script>

</html>