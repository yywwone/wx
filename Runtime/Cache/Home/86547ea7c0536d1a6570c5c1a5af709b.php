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

	<link href="/Public/home/css/reset.css" rel="stylesheet">
	<style>
	* {
            box-sizing: border-box;
        }
	.title{
		width: 100%;
		height: 0.4rem;
		background:#15204e;
	}
	.title>P{
		color: #fff;
		line-height: 0.4rem;
		width: 100%;
		text-align: center;
	    font-size: 0.12rem; 
	}
	.box {
		font-size: 0.14rem;
	}
	.img {
		width: 100%;
		height: 1.9rem;
	}
	.img img {
		width: 100%;
		height: 1.9rem;
	}
	.content {
		padding-top:0.1rem;
	}
	.detail-title {
		width: 100%;
		border-bottom: 0.07rem solid #f2f2f2;
		padding-bottom: 0.1rem;
		padding-left: 0.2rem;
	}
	.xnum {
		color: #999;
		font-size: 0.13rem;
		display: inline-block;
		margin-top: 0.05rem;
	}
	.range {
		width:0.8rem;
		height: 0.06rem;
		margin-top: 0.1rem;
		margin-left: 0.2rem;
		margin-right:0.1rem;
	}
	.detail-title span {
		font-size: 0.1rem;
		color:#999;
	}
	.details {
		width: 100%;
		height: 0.3rem;
		line-height: 0.3rem;
		font-size: 0.14rem;
		color: #999;
		border-bottom: 0.01rem solid #f2f2f2;
		padding-left: 0.2rem;
	}
	.time {
		width: 100%;
		padding: 0.1rem 0.1rem;
		color:#2b2b2b;
		border-bottom: 0.07rem solid #f2f2f2;
	}
	.time p {
		width: 100%;
		height: 0.18rem;
		line-height: 0.18rem;
		font-size: 0.14rem;
	}
	.logos{
		width: 100%;
		height: 1.1rem;
		border-bottom:1px solid #f2f2f2;
		padding-left: 0.2rem;
		padding-bottom: 0.2rem; 
	}
	.logos img{
		width: 3.4rem;
		height: 1.1rem;
		margin: 0 auto;
	}
	.last {
		width: 100%;
		height: 0.5rem;
		margin-top: 0.2rem;
	}
	.last span {
		display: inline-block;
		width: 49%;
		height: 0.5rem;
		font-size: 0.25rem;
		text-align: center;
		line-height: 0.5rem;
	}
	.last #iphone {
		background: url("./images/phone.jpg") no-repeat;
		background-size: 0.3rem 0.3rem;
		background-position: 0.3rem 0.12rem;
	}
	.baoming {
		background: #15204e;
		color: #fff;
	}
	</style>
	
</head>


	<!-- 整体box -->
		<div class="box">
			<div class="title">
	        	<p>活动详情</p>
	    	</div>
		<!-- 详情图 -->
		  <div class="img">
            <img src="/Public/home/images/detail.jpg" alt="活动详情">
		  </div>
		  <div class="content">
			  <!-- 文字描述 -->
			  <div class="detail-title">
	              <p>妇联冬至请你吃饺子</p>
	              <p class="xnum">限制人数100人</p>
	              <img class="range" src="/Public/home/images/range.jpg" alt="进度条">
	              <span>1人已经报名</span>
			  </div>
			  <!-- 详情 -->
			  <div class="details">详情</div>
			  <div class="time">
	               <p>【报名时间】：12-22 9:00一12-26 17:00</p>
	               <p>【活动时间】：12-22 9:00一12-26 17:00</p>
	               <p>【活动地址】：丽水街道梁都路123号</p>
	               <p>【主办单位】：浙江省杭州市丽水街道政府管理委员会</p>
			  </div>
			  <!-- 报名时间 -->
			  <div class="details">时间</div>
	          <div>
	          <div class="time">
	          	<p>13:00-13:50&nbsp;&nbsp;&nbsp;&nbsp;签到</p>
	          <p>14:00-17:00&nbsp;&nbsp;&nbsp;&nbsp;活动开始进行</p>
	          </div>
	          </div>
	          <!-- 最新报名 -->
	          <div class="details">最新报名</div>
	          <div class="logos">
	          	<img src="/Public/home/images/logos.jpg" alt="">
	          </div>
	          <!-- 底部：电话/立即报名 -->
	          <div class="last">
	               <span id="iphone">电话</span>
	               <span class="baoming">立即报名</span>
	          </div>
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