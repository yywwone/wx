<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="__PUBLIC/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="__PUBLIC/home/dist/css/login.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header class="hello-login-box">
			<div class="welcoming-speech1">
				<p >Hi,欢迎回来</p>
			</div>
		</header>
		<div class="login-content-box">
			<form name="myform-login">
				<div class="tel-content">
					<span class="icon-man js-icon2"></span>
					<input type="text" class="worn-tel" placeholder="手机号码/用户名"/>				
				</div>
		</div>
		<div class="login-content-box">
				<div class="tel-content">
					<span class="icon-man js-icon3"></span>
					<input type="password" class="worn-tel js-password" placeholder="密码"/>				
				</div>
		</div>
		<p class="forget"><a href="#">忘记密码</a></p>
		<div class="login-content-box">
				<div class="tel-content">
					<input type="submit" class="btn-sub" value="登&nbsp&nbsp&nbsp录"/>				
				</div>
			</form>
		</div>
		<p class="login-new-id"><a href="sign.html">新用户注册</a></p>
		<div class="third-party-box">
			<p class="third-wire"></p>
			<p class="third-login-main">微信方式登录</p>
			<span class="icon-weacht"></span>
		</div>
		<div class="marsk-tips">用户名不能为空</div>
		<script src="__PUBLIC/home/__/dist/js/mobblie.js"></script>
		<script src="__PUBLIC/home/__/dist/js/jquery-1.11.0.min.js"></script>
		<script src="__PUBLIC/home/__/dist/js/login.js"></script>
	</body>
</html>