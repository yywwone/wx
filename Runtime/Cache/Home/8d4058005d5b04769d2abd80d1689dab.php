<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>企业录入</title>
		<link href="/Public/home/dist/css/reset.css" rel="stylesheet">
		<link href="/Public/home/dist/css/enter.css" rel="stylesheet">
		
		<style>
		.content-block>input {
			border: none;
		}
		</style>
	</head>	
	<body>
		<div class="title">
			<p>季报表</p>
		</div>
		<table class="mytable"  border-collapse: collapse;>
						<form action="<?php echo U('baobiao/ji');?>" method="post" enctype="multipart/form-data">
				<tr class="fitr">
					<td colspan="4">公司名称</td>
					<td colspan="8">
						<input type="text" name="company" placeholder="请填写您的公司名称" class="use-inp " >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">法定代表人</td>
					<td colspan="8">
						<input type="text" name="compeo" placeholder="请输入法定代表人姓名" class="use-inp js-cpany" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">办公室楼房</td>
					<td colspan="8">
						<input type="text" name="homenumber" placeholder="请输入办公室楼房号" class="use-inp js-man" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">统计联系人电话</td>
					<td colspan="8">
						<input type="text" name="counttel" placeholder="请输入统计联系人电话" class="use-inp js-gps" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">主营业务收入</td>
					<td colspan="8">
						<input type="text" name="onemaney" placeholder="请输入主营业务收入" class="use-inp js-tel1" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">软件和信息服务业务收入</td>
					<td colspan="8">
						<input type="text" name="infomaney" placeholder="请输入软件和信息服务业务收入" class="use-inp zhu-y" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">研发投入经费</td>
					<td colspan="8">
						<input type="text" name="developmaney" placeholder="请输入公司研发投入经费" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">利润总额</td>
					<td colspan="8">
						<input type="text" name="countmaney" placeholder="请输入公司利润总额" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">税金总额</td>
					<td colspan="8">
					<!-- <textarea  class="txt1 txt3">请输入税金总额</textarea> -->
					<input type="text" name="shuijin" placeholder="请输入税金总额" class="use-inp js-pep" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">新产品产值</td>
					<td colspan="8">
						<input type="text" name="newproduct" placeholder="请输入新产品产值" class="use-inp js-pep" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">主营业务</td>
					<td colspan="8">
						<input type="text" name="imploproduct" placeholder="请输入主营业务（产品）" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">代表业务（产品）</td>
					<td colspan="8">
						<input type="text" name="dbproduct" placeholder="请输入代表业务（产品）" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">行业类别</td>
					<td colspan="8">
						
			        	<input type="text" name="tradetype" placeholder="请输入行业类别" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">“新四军”创业人员数</td>
					<td colspan="8">
						<input type="text" name="xinsijun" placeholder="请输入“新四军”创业人员数" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">大学生创业者</td>
					<td colspan="8">
						<input type="text" name="countstuden" placeholder="请输入大学生创业人数" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">大企业高管及其他连续创业者</td>
					<td colspan="8">
						<input type="text" name="tostart" placeholder="请输入大企业高管及其他连续创业人数" class="use-inp" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">留学归国人员创业者</td>
					<td colspan="8">
						<input type="text" name="turtlecy" placeholder="请输入留学归国人员创业人数" class="use-inp js-cpany" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">拥有专利</td>
					<td colspan="8" class="filebox">
						<!-- <input type="file" multiple  placeholder="需拍照上传软件著作权" class="use-inp js-di camera" > -->
						<textarea  class="txt1 txt3 camera" readonly="readonly">需拍照上传软件著作权
						</textarea>
						<input type="file" name="countpatent" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr" >
					<td colspan="4">软件著作权</td>
					<td colspan="8" class="filebox">
						<!-- <input type="file" multiple  placeholder="请输入您的缴税地" class="use-inp js-dd camera" > -->
<!-- 						<textarea  class="txt1 txt3 camera">请输入您的缴税地
						</textarea> -->
						<input type="file" name="ruanzhuzuo" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">高新技术企业</td>
					<td colspan="8" class="filebox">
						<!-- <input type="file" multiple  placeholder="需拍照上传为高薪技术企业的证明" class="use-inp js-dd camera" > -->
						<textarea  class="txt1 txt3 camera" readonly="readonly">需拍照上传为高薪技术企业的证明
						</textarea>
						<input type="file" name="gaoxin" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">科技型中小企业</td>
					<td colspan="8" class="filebox">
						<!-- <input type="file" multiple placeholder="需拍照上传为科技型中小企业的证明" class="use-inp js-dd camera" > -->
						<textarea  class="txt1 txt3 camera" readonly="readonly">需拍照上传为科技型中小企业的证明
						</textarea>
						<input type="file" name="kejizhongxiao" multiple  class="use-inp js-di upfile" >
					</td>
				</tr> 
				<tr class="fitr">
					<td colspan="4">从业人数</td>
					<td colspan="8" class="filebox">
						<!-- <input type="file" multiple placeholder="（需拍照上传凭证）" class="use-inp js-dd camera" > -->
						<textarea  class="txt1 txt3 camera" readonly="readonly">（需拍照上传凭证）
						</textarea>
						<input type="file" name="congye" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">国省千人数量</td>
					<td colspan="8">
						<input type="text" name="guoxinqianren" placeholder="请输入国省千人数量" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">硕士以上</td>
					<td colspan="8">
						<input type="text" name="shuoshi" placeholder="请输入硕士以上人数" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">本科</td>
					<td colspan="8">
						<input type="text" name="benke" placeholder="请输入本科人数" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">专科以下</td>
					<td colspan="8">
						<input type="text" name="zhuanke" placeholder="请输入专科以下的人数" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">中高级技术职称人员</td>
					<td colspan="8">
						<input type="text" name="zgjjszc" placeholder="请输入中高级技术职称人数" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">开展合作的高校、省级以上研究院（所）及行业协会个数</td>
					<td colspan="8" class="filebox">
						<!-- <input type="text" placeholder="（需拍照上传凭证）" class="use-inp js-dd" > -->
						<textarea  class="txt1 txt3 camera">（需拍照上传凭证）
						</textarea>
						<input type="file" name="kzhzdgx" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">企业成果</td>
					<td colspan="8" class="filebox">
						<!-- <input type="text" placeholder="（需拍照上传凭证）" class="use-inp js-dd" > -->
						<textarea  class="txt1 txt3 camera">（需拍照上传凭证）
						</textarea>
						<input type="file" name="qiyecg" multiple  class="use-inp js-di upfile" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">当年是否获得政府补助资金</td>
					<td colspan="8" class="downlist">
						<!-- <input type="text" placeholder="" class="use-inp js-dd" > -->
					</td>
				</tr>
				<tr class="fitr money">
					<td colspan="4">补助项目名称</td>
					<td colspan="8" >
						<input type="text" name="zfbzxm" placeholder="请输入补助项目名称" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr money">
					<td colspan="4">补助项目金额</td>
					<td colspan="8">
						<input type="text" name="zfbzje" placeholder="请输入补助项目金额" class="use-inp js-dd" >
					</td>
				</tr>
				<tr class="fitr">
					<td colspan="4">备注</td>
					<td colspan="8">
						<input type="text" name="beizhu" class="use-inp js-dd" >
					</td>
				</tr>
		</table>
		<input type="submit" class="he-ii" value="确认提交"/>
		<div class="marsk-tips88">用户名不能为空</div>
		</form>
		<script src="/Public/home/dist/js/mobblie.js"></script>
		<script src="/Public/home/dist/js/rem.js"></script>
		<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
		<script src="/Public/home/dist/js/enter.js"></script>
		
	</body>
</html>