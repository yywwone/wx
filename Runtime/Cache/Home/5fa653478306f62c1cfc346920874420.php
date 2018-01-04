<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>会议室租赁</title>
		<link href="/Public/home/dist/css/reset1.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/meetingTrue.css" type="text/css" rel="stylesheet" />
	</head>	
	<body>
		<div class="title">
			<p>会议室租赁</p>
        </div>
        <div class="content">
            <img src="/Public/home/dist/images/submit.png" alt="">
            <p>您的申请已预定成功</p>
            <p>请您在<span>一个工作日</span>内完成打款工作</p>
            <p> 完成打款后请至绿谷一号楼302办理手续</p>
            <p class="contentP4"> 账户名称：丽水绿谷信息实业有限公司</p>
            <p class="contentP5">账号：7338510182600010567</p> 
            <p class="contentP6">开户行:中信银行丽水分行</p>     
        </div>

		<script src="/Public/home/dist/js/mobblie.js"></script>
        <script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
        <script>
        	// window.onload = function () {
        	// 	setTimeout(function () {
        	// 		location.href="./index.html";
        	// 	},3000)
        	// }
           
//3秒钟之后跳转到指定的页面 
 setTimeout(window.location.href="<?php echo U('index/index');?>",3000); 
</script> 

	</body>
</html>