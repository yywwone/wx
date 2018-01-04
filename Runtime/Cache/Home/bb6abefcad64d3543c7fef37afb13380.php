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
        .box {
            width: 100%;
            padding:0.05rem;
            border-bottom: 1px solid #ccc;
            marfin-bottom: 0.1rem;
        }
        textarea {
            width:100%;
            height:1.6rem;
            border:none;
            resize:none;
            outline:none;
        }

        .upfile {
            position: relative;
            width:1rem;
            height:1rem;
            border:1px solid #ccc;
            margin-top: 0.2rem;
            margin-left:0.05rem;
            padding-top: 0.25rem;
            text-align: center;
            float:left;
        }
        .addimg {
            display: block;
            margin-left: 0.25rem;
            margin-bottom: 0.1rem;
        }
        .file{
            position: absolute;
            top:0;
            left:0;
            opacity:0;
            width: 1rem;
            height: 1rem;
        }
        .submit {
            position:fixed;
            bottom:50px;
            left:0;
            width: 100%;
            height: 0.4rem;
            background-color: #115A88;
            color:#fff;
            border:none;
        }
        /*#photo-box {*/
            /*float:left;*/
            /*margin-top:0.2rem;*/
            /*padding-left: 0.08rem;*/
        /*}*/
        #photo-box div{
            float: left;
            width: 31%;
            height: 1rem;
            margin-top:0.2rem;
            margin-left:0.08rem;
        }
    </style>
    
</head>


    <form action="<?php echo U('Luntan/addly');?>" method="post" enctype="multipart/form-data">
        <div class="box">
            <textarea name="content" id="" cols="" rows=""
            placeholder="分享新鲜事..."></textarea>
        </div>
        <div id="photo-box">
            <!--<img src="./images/img1.jpg" alt="">-->
        </div>
        <div class="upfile">
            <img class="addimg" src="/Public/home/images/addimg.png" alt="">
            <span>上传照片</span>
            <input type="file" name="img[]" multiple="multiple" class="file" id="upfile">
        </div>
         <input type="submit" class="submit" value="确认发布">
    </form>
    
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

    <script src="/Public/home/js/mobblie.js"></script>
    <!-- <script src="./js/rem.js"></script> -->
    <!-- <script src="./js/jquery-1.11.1.min.js"></script> -->
    <script>
        document.getElementById("upfile").addEventListener("change",function(){
            var files = this.files;
            var oUL = document.getElementById("photo-box");
            oUL.innerHTML = "";
            for(var i = 0;i < files.length;i++){
                oUL.innerHTML += '<div><img id="img'+i+'" /></div>'
                var imgList = document.getElementById("img"+i);
                imgList.style.height = "100%";
                imgList.style.width = "100%";
                imgList.src = window.URL.createObjectURL(files[i]);
            }
        });
    </script>

</html>