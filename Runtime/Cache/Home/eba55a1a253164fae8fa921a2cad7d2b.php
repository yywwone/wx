<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    	<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<title>选择登录身份</title>
		<link rel="stylesheet" href="./../../../../Public/home/dist/css/reset.css"  type="text/css"/>
		<style>          
		.bg{
		width: 100%;
		background:url(./../../../../Public/home/dist/images/header-bg_02.png);
		background-size:cover;
		background-position:0 0;
		/*padding-left:0.5rem;*/
		box-sizing: border-box;
		position: relative;
		}
		.login-box{
			width: 100%;
			height: 2.5rem;
			background-color: rgba(255,255,200,0.2);
			border-radius: 0.1rem;
			box-sizing: border-box;
			position: absolute;
			top: 50%;
			left: 50%;
			transform:translateX(-50%) translateY(-50%);
			padding-top: 0.5rem;
			color: #fff;
			font-size: 0.2rem;
			padding-left:1rem ;
		}
		.login-box input {
			margin-bottom: 0.3rem;
			outline-style: none;
			box-sizing: border-box;
			width:2rem;
			height: 0.3rem;
			background: rgba(255,255,255,.1);
			border: 1px solid #ccc;
			color: #fff;
			border-radius: 0.2rem;
			padding-left: 0.1rem;
		}
		::-webkit-input-placeholder { /* WebKit browsers */ 
		color: #fff;
		font-size: 0.12rem; 
		} 
		:-moz-placeholder { /* Mozilla Firefox 4 to 18 */ 
		color: #fff; 
		} 
		::-moz-placeholder { /* Mozilla Firefox 19+ */ 
		color: #999; 
		} 
		:-ms-input-placeholder { /* Internet Explorer 10+ */ 
		color: #999; 
		} 
		.login-box .submit{
			background-color: #ccc;
			color: #666;
		}
		</style>
</head>
<body>
<div class="bg">
	<div class="login-box">
		<form action="<?php echo U('Word/choice');?>" method="post">
			<input type="text" name="accout" placeholder="请输入账号名"></br>
			<input type="password" placeholder="密码" name="pwd">
			<input type="submit" value="登录" class="submit">
		</form>
	</div>

</div>

	<!--通用JS-->
	<script src="./../../../../Public/home/dist/js/jquery-1.11.1.min.js"></script>
	<script src="./../../../../Public/home/dist/js/rem.js"></script>
	<script>
		window.onload = function () {
			var $height = $(window).height()+"px";
			$(".bg").css("height",$height);
		}
	</script>
</body>
</html>