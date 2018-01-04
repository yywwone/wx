<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>企业录入</title>
		<link href="/Public/home/dist/css/reset.css" type="text/css" rel="stylesheet" />
		<link href="/Public/home/dist/css/enter.css" type="text/css" rel="stylesheet" />
	</head>	
	<body>
		<div class="title">
			<p>带*为必填内容</p>
		</div>
		<table  border-collapse: collapse; class="mytable" border="1">
			<form action="<?php echo U('baobiao/enter');?>" method="post" enctype="multipart/form-data">
				<tr class="fitr">
					<td colspan="4">企业名称<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_name" placeholder="企业名称/拟注册企业名称" class="use-inp " >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">法定代表人<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_faren" placeholder="请输入法定代表人姓名" class="use-inp " >
					</td>
				</tr>
				<!-- 法人身份证 -->
				<tr class="fitr">
					<td colspan="4">法定身份证<sup>*</sup></td>
					<td colspan="8">
						<input type="file" name="gs_farenid" class="use-inp" >
					</td>
				</tr>
				<!-- 营业执照 -->
				<tr class="fitr">
					<td colspan="4">营业执照<sup>*</sup></td>
					<td colspan="8">
						<input type="file" name="gs_yyzz" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">注册地址<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_add" placeholder="注册地址/拟注册地" class="use-inp " >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">联系电话<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_tel" placeholder="请输入联系电话" class="use-inp js-tel1" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">统一社会信用代码<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_xydm" placeholder="请输入统一社会信用代码" class="use-inp" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">项目所属行业<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_yw" placeholder="请输入项目所属行业" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">注册时间<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_time" placeholder="年/月/日" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">企业人数<sup>*</sup></td>
					<td colspan="8">
						<input type="text" name="gs_people" placeholder="企业人数" class="use-inp" >
					</td>
				</tr>
				
				<tr class="fitr">
					<td colspan="4">注册资金</td>
					<td colspan="8">
						<input type="text" name="gs_maney" placeholder="**万元" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">纳税地</td>
					<td colspan="8">
						<input type="text" name="gs_nsd" placeholder="请输入纳税地" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">日常工作联系人</td>
					<td colspan="8">
						<input type="text" name="rc_people" placeholder="请输入日常工作联系人" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">日常工作联系方式</td>
					<td colspan="8">
						<input type="text" name="rc_tel" placeholder="请输入日常工作联系方式/邮箱" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">统计工作联系人</td>
					<td colspan="8">
						<input type="text" name="tj_people" placeholder="请输入统计工作联系人" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">统计联系方式</td>
					<td colspan="8">
						<input type="text" name="tj_tel" placeholder="请输入统计联系方式/邮箱" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">企业登记注册类型</td>
					<td colspan="8">
						<select name="qydjzc" id="">
                          <option value="1">有限责任公司</option>
                          <option value="2">个人独资企业</option>
                          <option value="3">股份公司</option>
                          <option value="4">其他。。。</option>
						</select>
					</td>
				</tr>
				<!-- 选择性显示信息 -->
				<!-- <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo htmlspecialchars_decode($v['inputcon']); endforeach; endif; else: echo "" ;endif; ?> -->
				
		</table>
		<input type="submit" class="he-ii" value="确认提交"/>
		<div class="marsk-tips88">用户名不能为空</div>
		</form>
		<script src="/Public/home/dist/js/mobblie.js"></script>
		<script src="/Public/home/dist/js/jquery-1.11.0.min.js"></script>
		<script src="/Public/home/dist/js/enter.js"></script>
	</body>
</html>