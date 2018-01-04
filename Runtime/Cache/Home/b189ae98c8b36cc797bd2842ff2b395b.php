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

<link href="/Public/home/dist/css/wx_qt_qyfw.css" rel="stylesheet">
<link href="/Public/home/dist/css/wx_qt_zsyz.css" rel="stylesheet">
<style>
	.wx_qyfc_main_box img {
		width: 0.25rem;
		height: 0.25rem;
		vertical-align: center;
		margin-right: 0.15rem;
	}
	.wx_qyfc_main {
		height: 1rem;
		line-height: 0.3rem;
	}
	.wx_qyfc_main_text2 {
		font-size: 0.15rem;
	}
	.zsyz_photo img {
		width: 3.33rem;
		height: 4.82rem;
	}
	.wx_qyfc_main .button {
		color: #fff;
		border: none;
		text-align: center;
		margin:0 auto;
	}
	.wx_qt_zsyz_main_con_box {
		padding-bottom: 2rem;
	}
	/*.wx_qt_zsyz_main_con {
		padding-bottom: 1rem;
	}*/
	.qyfc_size {
		font-size: 0.1rem;
	}
	.wx_qt_zsyz_main_con{
		padding-bottom: 1rem
	}
	.ttt{
		width: 3rem;
		height: 0.4rem;
		margin:0 auto;
		background:#233b83;
		border-radius: 0.05rem;
		text-align: center;
		margin-top: 0.5rem
	}
</style>

</head>


<div class="wx_qyfw_header_img">
	<img src="/Public/admin/uploads/fff.png">
</div>
<div class="wx_qyfw_box">
	<!-- <div class="wx_qyfw_box_tit_box">
		<span class="wx_qyfw_box_tit"><?php echo ($fu["name"]); ?></span>
	</div> -->
	<!-- <div class="wx_qyfw_main_box">
		
			<?php if(is_array($pagintor)): $i = 0; $__LIST__ = $pagintor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if(($pagintor[0]['f_id']) == "20"): ?><div class="wx_qyfw_main">
					<a href="<?php echo U('qyfw2','id='.$item['id']);?>">
						<img src="/Public/admin/uploads/<?php echo ($item["img"]); ?>">
						<p><?php echo ($item["name"]); ?></p>
					</a>
				</div>
			    <?php else: ?>
					<div class="wx_qyfw_main">
						<a href="<?php echo U('xqym','id='.$item['id']);?>">
							<img src="/Public/admin/uploads/<?php echo ($item["img"]); ?>">
							<p><?php echo ($item["name"]); ?></p>
						</a>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		 
	</div>	 -->

	<div class="wx_qt_zsyz_main_box">
	<div class="wx_qt_zsyz_main_tit">
		<ul>
			<li class="wx_qt_zsyz_main_tit_active">入住须知</li>
			<li>入住流程</li>
			<li>表格下载</li>
		</ul>
	</div>
	<div class="wx_qt_zsyz_main_con_box">
	<!-- 入住须知 -->
		<div class="wx_qt_zsyz_main_con">
			<!-- <textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"> -->
				<!--租赁对象和条件-->
				<div class="wx_qyfc_main_box">
					<h4><img src="/Public/home/dist/images/must.png" alt="标识" class="bs1"/>租赁对象和条件</h4>
					<div class="wx_qyfc_main">
						<p class="wx_qyfc_main_text2">申请租住人才公寓的对象为在丽水市区岩泉、紫金、白云、万象、南明山、联城6个街道无住房的绿谷信息产业园入园企业人才，并符合下列条件之一：</p>
						<p>（一）丽水市人才政策确定的高层次人才；</p>
						<p>（二）具有研究生学历或毕业未满三年的全日制普通高校本科毕业生；</p>
						<p>（三）在聘的具有副高级以上专业技术职称的；</p>
						<p>（四）与园区产业定位匹配并具有高级技师技术等级的；</p>
						<p>（五）年缴纳个人所得税超过10万元的；</p>
						<p>（六）奇特紧缺急需的专业技术人才。</p>
					</div>
				</div>
				
			<!-- </textarea> -->
		</div>
		<!--入住流程-->
		<div class="wx_qt_zsyz_main_con zsyz_photo">
			<img src="/Public/home/dist/images/liuc.png" alt="">
		</div>
		<!-- 表格下载 -->
		<div class="wx_qt_zsyz_main_con wx_qyfc_main">
			<!-- <textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["lxwm"]); ?></textarea>	 -->
			<div class="wx_qt_zsyz_main_change">
				<p>按照《绿谷信息产业园人才公寓管理细则》规定，符合条件的人才可申请入住园区人才公寓；其中具有全日制本科及以上学历的应届毕业生可享受园区人才公寓一年免租政策。</p>
				<p>更多详情，请电话联系我们0578-2200217！</p>
			</div>
			<div class="ttt">
			<a class="button" href="<?php echo U('download');?>">公寓租赁表格下载——下载地址</a>
			<div>s
			<p class="qyfc_size">请将填写完成表格发送到wuhaixia@insigma.com.cn邮箱</p>
		</div>

	</div>
</div>
</div>


</div>
<!-- 底部栏显示标识 -->
<div class="wx_qt_dbgdl_active">1</div>

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

<script src="/Public/home/dist/js/flfw.js"></script>
<script src="/Public/home/dist/js/wx_qt_zsyz_tab.js"></script>

</html>