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

<link href="/Public/home/dist/css/wx_qt_gyslb.css" rel="stylesheet">
    <link href="/Public/home/css/reset.css" rel="stylesheet">
	<style>
	 * {
        box-sizing: border-box;
        }
	.title{
		width: 100%;
		height: 0.4rem;
		background: #fff;
	}
	.title>P{
		color: #000;
		line-height: 0.4rem;
		width: 100%;
		text-align: center;
	    font-size: 0.12rem;
	}
	.main {
		width: 100%;
		height: 1.2rem;
		border-bottom: 1px solid #ccc;
		margin-bottom: 0.05rem;
	}
	.main-border {
		border-top: 1px solid #ccc;
	}
	.main-img img{
		float: left;
		width: 1.15rem;
		height: 1.2rem;
	}
	.main-title {
		font-size: 0.14rem;
		float: left;
		padding-left: 0.1rem;
		padding-top: 0.15rem;
		color: #999;
	}
	.main-title p {
		line-height: 0.25rem;
	}
	.main-title  span {
		display: inline-block;
		background-color: #db4337;
		width: 0.45rem;
		height: 0.2rem;
		line-height: 0.2rem;
		margin-left: 1.3rem;
		color: #fff;
		border-radius: 0.04rem;
		text-align: center;

	}
	.huo-title {
		font-size: 0.2rem;
		color: #000;
	}
	</style>
    
</head>


	<div class="title">
        <p>活动</p>
    </div>
    <div class="main main-border">
    	<div class="main-img">
    		<img src="/Public/home/images/huodong.jpg" alt="">
    	</div>
    	<div class="main-title">
    		<p class="huo-title">妇联冬至请你吃饺子</p>
    		<p>2017-12-16&nbsp;&nbsp;14:00</p>
    		<p>丽水绿谷<a href="<?php echo U('Luntan/huodong');?>"><span>报名</span></a></p>
    		<p>主办单位：杭州辅道管理公司</p>
    	</div>
    </div>
    <div class="main">
    	<div class="main-img">
    		<img src="/Public/home/images/huodong.jpg" alt="">
    	</div>
    	<div class="main-title">
    		<p class="huo-title">妇联冬至请你吃饺子</p>
    		<p>2017-12-16&nbsp;&nbsp;14:00</p>
            <p>丽水绿谷<a href="<?php echo U('Luntan/huodong');?>"><span>报名</span></a></p>
    		<p>主办单位：杭州辅道管理公司</p>
    	</div>
    </div>
    <div class="main">
    	<div class="main-img">
    		<img src="/Public/home/images/huodong.jpg" alt="">
    	</div>
    	<div class="main-title">
    		<p class="huo-title">妇联冬至请你吃饺子</p>
    		<p>2017-12-16&nbsp;&nbsp;14:00</p>
            <p>丽水绿谷<a href="<?php echo U('Luntan/huodong');?>"><span>报名</span></a></p>
    		<p>主办单位：杭州辅道管理公司</p>
    	</div>
    </div>
    <div class="main">
    	<div class="main-img">
    		<img src="/Public/home/images/huodong.jpg" alt="">
    	</div>
    	<div class="main-title">
    		<p class="huo-title">妇联冬至请你吃饺子</p>
    		<p>2017-12-16&nbsp;&nbsp;14:00</p>
            <p>丽水绿谷<a href="<?php echo U('Luntan/huodong');?>"><span>报名</span></a></p>
    		<p>主办单位：杭州辅道管理公司</p>
    	</div>
    </div>
    <div class="main">
    	<div class="main-img">
    		<img src="/Public/home/images/huodong.jpg" alt="">
    	</div>
    	<div class="main-title">
    		<p class="huo-title">妇联冬至请你吃饺子</p>
    		<p>2017-12-16&nbsp;&nbsp;14:00</p>
            <p>丽水绿谷<a href="<?php echo U('Luntan/huodong');?>"><span>报名</span></a></p>
    		<p>主办单位：杭州辅道管理公司</p>
    	</div>
    </div>
    
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


</html>