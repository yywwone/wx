<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    	<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<title>园区政策-租金政策</title>
		<link rel="stylesheet" href="./../../../../Public/home/dist/css/reset.css"  type="text/css"/>
	<style>
	/* CSS Document */
	.wx_qyfc_header_img img{
		width: 100%;
		height: 100%;
	}
	body{
		background-color: #fff;
	}
	.content {
		/*font-size: 13px;*/
		padding: 1.5rem 1rem;
		height: 0.2rem;
		line-height: 1.5rem;
	}
	ul>li {
		border-bottom: 1px solid #ccc;
	}
	
</style>
</head>
<body>
<div class="wx_qyfc_header_img">
		<img src="./../../../../Public/home/dist/images/banner.png">
	</div>
	<div class="content">
		<ul>
		<?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><h3><a href="<?php echo U('Word/activityDetail',array('id'=>$v['id']));?>"><?php echo ($v['title']); ?></a></h3></li><?php endforeach; endif; else: echo "" ;endif; ?>	
		</ul>
	</div>
	<!--通用JS-->
	<!-- <script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script> -->
	<!-- <script src="/Public/home/dist/js/rem.js"></script> -->
</body>
</html>