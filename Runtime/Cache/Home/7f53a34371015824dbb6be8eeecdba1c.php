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
.per {
    width:100%;
    overflow: hidden;
}
.avatar {
    float:left;
    padding-left:0.1rem;
    
}
.avatar img {
    float: left;
    width: 0.6rem;
    margin-top: 0.2rem;
    margin-right: 0.1rem;
}
.avatar .signature {
    float:right;
}
.signature .name {
    font-size:0.18rem;
}
.signature .sign {
    font-size:0.12rem;
    color:#999;
    margin-top: 0.2rem;
}
.signature {
    padding-top:0.2rem;
}
.date {
    float: right;
    margin-right: 0.12rem;
    padding-top:0.2rem;
}
.date p {
    height:0.1rem;
    font-size:0.17rem;
    color: #999;
}
.comment {
    font-size: 0.15rem;
    margin:0.2rem;
    color:#6e6e6e;
}
.img {
    width: 100%;
}
.img ul {
    width:100%;
    padding-left:0.1rem;
    padding-right:0.1rem;
    overflow: hidden;
    border-bottom:1px solid #ccc;
    padding-bottom: 0.2rem;
}
.img ul>li {
    width:32%;
    float:left;
    margin-left:0.03rem;
    margin-bottom: 0.03rem;
}
.img img {
    width: 100%;
}
.other{
    width: 2.9rem;
    margin:0 auto;
    font-size: 0.2rem;
    overflow: hidden;
}
.other img {
    width: 0.2rem;
    vertical-align: middle;
}
.star {
    float: left;
}
.star li{
    float: left;
}
.zan {
    float: right;
}
.zan li {
    float: right;
}
.last {
    padding-top: 0.1rem;
    padding-bottom: 0.1rem;
    border-bottom: 6px solid #f2f2f2;
}
.num {
    margin-top: 0.03rem;
    margin-left: 0.07rem;
}
.addnews {
    position: fixed;
    bottom:0.7rem;
    right:0.2rem;
    
}
    </style>
  
</head>


    <div class="title">
        <p>浙大新网</p>
    </div>
    <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="main">
        <div class="per">
            <div class="avatar">
                <img src="<?php echo ($v['img']); ?>" alt="">
            <div class="signature">
                    <p class="name"><?php echo ($v['name']); ?></p>
                    <p class="sign">小主还没有签名哦！</p>
            </div>
            </div>
            <div class="date">
                <p><?php echo ($v['create_time']); ?></p>
            </div>
        </div>
        <p class="comment"><?php echo ($v['content']); ?></p>
        <div class="img">
            <ul>
             <?php if(!empty($v['img_1'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_1']); ?>" alt="">
                </li><?php endif; ?>
            <?php if(!empty($v['img_2'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_2']); ?>" alt="">
                </li><?php endif; ?>
            <?php if(!empty($v['img_3'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_3']); ?>" alt="">
                </li><?php endif; ?>
            <?php if(!empty($v['img_4'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_4']); ?>" alt="">
                </li><?php endif; ?>
            <?php if(!empty($v['img_5'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_5']); ?>" alt="">
                </li><?php endif; ?>
            <?php if(!empty($v['img_6'])): ?><li>
                <img src="/Public/home/Upload<?php echo ($v['img_6']); ?>" alt="">
                </li><?php endif; ?>
            </ul>
        </div>
        <div class="last">
            <div class="other">
                <ul class="star">
                    <li><img src="/Public/home/images/star.jpg" alt=""></li>
                    <li class="num">1</li>
                </ul>
                <ul class="zan">
                        <li class="num">1</li>
                        <li><img src="/Public/home/images/zan.jpg" alt=""></li>
                    </ul>
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <a href="<?php echo U('Luntan/addnews');?>" class="addnews"><img src="/Public/home/images/add.png" alt=""></a>
    
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
    
</html>