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

<link href="/Public/home/dist/css/wx_qt_foot.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_qbfl.css" rel="stylesheet">

<style>
	*{padding: 0;margin: 0;text-decoration:none;list-style: none;font-family: 微软雅黑;outline: none;}
	.xxtx_box{
		width: 95%;
		height: 200px;
		margin:10px auto;

	}
	input{
		width: 100%;
		height: 30px;
		margin-bottom: 15px;
		padding-left: 5px;
		box-sizing: border-box;
	}
	input[type="submit"]{
		width: 50%;
		height: 30px;
	}
</style>

</head>



	<div class="xxtx_box">
		<form action="<?php echo U('index/alter','id='.$item['id']);?>" method="post">
			名字：<input type="text" name="z_name" class="" value="<?php echo ($item["z_name"]); ?>"  required>
			电话：<input type="text" name="tel" class="" value="<?php echo ($item["tel"]); ?>"  required>
			地址：<input type="text" name="add" class="" value="<?php echo ($item["add"]); ?>"  required>
			<input type="submit" class="" value="提交">
		</form>
	</div>	
<script type="text/javascript">
            if(<?php echo I('get.alert');?>=='1'){
            	alert('修改成功');
            }
            if(<?php echo I('get.alert');?>=='2'){
            	alert('修改失败');
            }
		</script>

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


</html>