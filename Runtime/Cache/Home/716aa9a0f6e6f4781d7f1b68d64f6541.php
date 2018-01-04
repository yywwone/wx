<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>场地租售</title>
<link rel="icon" href="/Public/home/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<!--本页CSS-->
<link href="/Public/home/dist/css/wx_qt_qyfw.css" rel="stylesheet">
</head>
<div class="wx_qyfw_header_img">
	<img src="/Public/home/dist/images/qyfw_bg.png">
</div>
<div class="wx_qyfw_box">
	<div class="wx_qyfw_box_tit_box">
		<span class="wx_qyfw_box_tit">场地租赁</span>
	</div>
	
	<div class="wx_qyfw_main_box">
		<div class="wx_qyfw_main"><a href="<?php echo U('index/metting');?>">
			<img src="/Public/home/dist/images/cdzs1.png">
			<p>会议室租赁</p>
		</a></div>
		<div class="wx_qyfw_main"><a href="<?php echo U('index/sport_zu');?>">
			<img src="/Public/home/dist/images/cdzs2.png">
			<p>运动场地租赁</p>
		</a></div>
		<div class="wx_qyfw_main"><a href="<?php echo U('baobiao/space_zu');?>">
			<img src="/Public/home/dist/images/cdzs3.png">
			<p>公共空间租赁</p>
		</a></div>
		<div class="wx_qyfw_main"><a href="<?php echo U('baobiao/gym');?>">
			<img src="/Public/home/dist/images/cdzs4.png">
			<p>健身房预约</p>
		</a></div>
	</div>	
</div>
<!--通用JS-->
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<!--本页JS-->
<script src="/Public/home/dist/js/flfw.js"></script>
</html>