<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>模板下载</title>
		<link href="/Public/home/dist/css/reset1.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/download.css" type="text/css" rel="stylesheet" />
	</head>	
	<body>
		<div class="title">
			<p>模板下载</p>
        </div>
        <div class="downlist">
            <p class="downColor">月报表下载————<a href="javascript:;">下载地址</a></p>
            <p class="downColor">季报表下载————<a href="javascript:;">下载地址</a></p>
            <p class="downColor">年报表下载————<a href="javascript:;">下载地址</a></p>
        </div>
		<script src="/Public/home/dist/js/mobblie.js"></script>
        <script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
        <script>
            $('.downlist p').click(function () {
                $(this).css("background-color","#1e1c7d").siblings().css("background-color","#ccc");
            })
        </script>
	</body>
</html>