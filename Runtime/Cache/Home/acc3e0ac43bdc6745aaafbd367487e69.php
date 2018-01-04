<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>月报表</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    	<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<link href="/Public/home/dist/css/reset.css" rel="stylesheet">
		<link href="/Public/home/dist/css/yue.css" rel="stylesheet">

		<style>
		.title{
			width: 100%;
			height: 0.34rem;
			background-color: #424040;
		}
		.title>P{
			color: #FFFFFF;
			line-height: 0.34rem;
			margin-right: 0.13rem;
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class="title">
			<p>月报表</p>
		</div>
		<form action="<?php echo U('baobiao/month');?>" method="post">
		<table>
			<tr class="tr-h">
				<td>指示名称</td>
				<td>本年本期累计</td>
				<td>去年同期累计</td>
				<td>上月累计</td>
			</tr>
			<tr class="tr-b">
				<td>单位个数</td>
				<td><input type="text" class="one" name="adanwei"></td>
				<td><input type="text" class="two" name="bdanwei"></td>
				<td><input type="text" class="three" name="cdanwei"></td>
			</tr>
			<tr class="tr-b">
				<td>营业收入</td>
				<td><input type="text" class="one" name="ayysr"></td>
				<td><input type="text" class="two" name="byysr"></td>
				<td><input type="text" class="three" name="cyysr"></td>
			</tr>
			<tr class="tr-b">
				<td>软件业务<br>收入合计</td>
				<td><input type="text" class="one" name="arjywsr"></td>
				<td><input type="text" class="two" name="brjywsr"></td>
				<td><input type="text" class="three" name="crjywsr"></td>
			</tr>
			</table>
			
			
			<table>
			<tr class="tr-h-1 cli">
				<td colspan="4">(一)按业务类型分类</td>
			</tr>
			</table>
			
			<div class="table-a">
			<table>	
			<tr class="tr-b tr-one">
				<td>1、软件产品收入</td>
				<td><input type="text" class="one" name="arjcpsr"></td>
				<td><input type="text" class="two" name="brjcpsr"></td>
				<td><input type="text" class="three" name="crjcpsr"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>信息安全<br>产品收入</td>
				<td><input type="text" class="one" name="axxaqcp"></td>
				<td><input type="text" class="two" name="bxxaqcp"></td>
				<td><input type="text" class="three" name="cxxaqcp"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>工业软件<br>产品收入</td>
				<td><input type="text" class="one" name="agyrjcp"></td>
				<td><input type="text" class="two" name="bgyrjcp"></td>
				<td><input type="text" class="three" name="cgyrjcp"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>2、信息技术服务收入</td>
				<td><input type="text" class="one" name="axxjsfw"></td>
				<td><input type="text" class="two" name="bxxjsfw"></td>
				<td><input type="text" class="three" name="cxxksfw"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>运营服务<br>收入</td>
				<td><input type="text" class="one" name="ayyfwsr"></td>
				<td><input type="text" class="two" name="byyfwsr"></td>
				<td><input type="text" class="three" name="cyyfwsr"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>电子商务平台<br>技术服务收入</td>
				<td><input type="text" class="one" name="ajsfwsr"></td>
				<td><input type="text" class="two" name="bjsfwsr"></td>
				<td><input type="text" class="three" name="cjsfwsr"></td>
			</tr>
			<tr class="tr-b tr-one">
				<td>集成电路<br>设计收入</td>
				<td><input type="text" class="one" name="ajcdlsj"></td>
				<td><input type="text" class="two" name="bjcdlsj"></td>
				<td><input type="text" class="three" name="cjcdlsj"></td>
			</tr>
			<tr class="tr-b tr-one ">
				<td>3、嵌入式系统软件收入</td>
				<td><input type="text" class="one" name="aqrsxtsr"></td>
				<td><input type="text" class="two" name="bqrsxtsr"></td>
				<td><input type="text" class="three" name="cqrsxtsr"></td>
			</tr>
			</table>
			</div>
			
			<table>
				<tr class="tr-h-1 cll">
					<td colspan="4">(二)按服务模式分类</td>
				</tr>
			</table>
			
			<div class="table-b">
				<table>
					<tr class="tr-b tr-two">
						<td>软件外包<br>服务收入</td>
						<td><input type="text" class="one" name="arjwbfw"></td>
						<td><input type="text" class="two" name="brjwbfw"></td>
						<td><input type="text" class="three" name="crjwbfw"></td>
					</tr>
				</table>
			</div>
			
			<table>
				<tr class="tr-h-1 cld">
					<td colspan="4">(三)按销售地分裂</td>
				</tr>
			</table>
			
			<div class="table-c">
				<table>
					<tr class="tr-b">
						<td>软件业务出口</td>
						<td><input type="text" class="one" name="arjywck"></td>
						<td><input type="text" class="two" name="brjywck"></td>
						<td><input type="text" class="three" name="crjywck"></td>
					</tr>
					<tr class="tr-b">
						<td>软件外包<br />服务出口</td>
						<td><input type="text" class="one" name="arjwbfuck"></td>
						<td><input type="text" class="two" name="brjwbfuck"></td>
						<td><input type="text" class="three" name="crjwbfuck"></td>
					</tr>
					<tr class="tr-b">
						<td>嵌入式系统软件出口</td>
						<td><input type="text" class="one" name="aqrsxt"></td>
						<td><input type="text" class="two" name="bqrsxt"></td>
						<td><input type="text" class="three" name="cqrsxt"></td>
					</tr>
					<tr class="tr-b">
						<td>利润总额</td>
						<td><input type="text" class="one" name="alrze"></td>
						<td><input type="text" class="two" name="blrze"></td>
						<td><input type="text" class="three" name="clrze"></td>
					</tr>
					<tr class="tr-b">
						<td>税金总额</td>
						<td><input type="text" class="one" name="asjze"></td>
						<td><input type="text" class="two" name="bsjze"></td>
						<td><input type="text" class="three" name="csjze"></td>
					</tr>
					<tr class="tr-b">
						<td>从业人员<br>工资总额</td>
						<td><input type="text" class="one" name="acyrygz"></td>
						<td><input type="text" class="two" name="bcyrygz"></td>
						<td><input type="text" class="three" name="ccyrygz"></td>
					</tr>
					<tr class="tr-b">
						<td>从业人员<br>平均人数</td>
						<td><input type="text" class="one" name="acyrypj"></td>
						<td><input type="text" class="two" name="bcyrypj"></td>
						<td><input type="text" class="three" name="ccyrypj"></td>					</tr>
				</table>
			</div>
			<input type="submit" class="sub" value="确认递交"/>
		</form>	

		<script src="/Public/home/dist/js/rem.js"></script>
		<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
		<script src="/Public/home/dist/js/yue.js"></script>
	</body>
</html>