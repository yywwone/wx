<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>会议室租赁</title>
<!-- <link rel="icon" href="images/" type="image/x-icon"/> -->
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<!--本页CSS-->
<link href="/Public/home/dist/css/metting.css" rel="stylesheet">
</head>
<div class="title">
        <p>会议室租赁</p>
</div>
<div class="wx_qyfw_header_img">
	<img src="/Public/home/dist/images/metting.png">
</div>
<div class="metting">
        <form action="<?php echo U('baobiao/metting');?>" method="post" >
    	    <table class="mytable"  border-collapse: collapse;> 
                <tr class="fitr">
                    <td colspan="4">公司名称</td>
                    <td colspan=-"8">
                        <input type="text" placeholder="请输入您的公司名称" name="name" class="use-inp js-cpany" >
                    </td>
                </tr>
                <tr class="fitr">
                    <td colspan="4">会议名称</td>
                    <td colspan="8">
                        <input type="text" placeholder="请输入会议/培训名称" class="use-inp js-man" name="meetingname">
                    </td>
                </tr>
                <tr class="fitr">
                    <td colspan="4">会议人数</td>
                    <td colspan="8">
                        <input type="text" placeholder="请输入会议人数" name="countmetting" class="use-inp js-gps" >
                    </td>
                </tr>
                <tr class="fitr">
                    <td colspan="4">联系人</td>
                    <td colspan="8">
                        <input type="text" placeholder="请输入您的姓名" name="peopel" class="use-inp js-tel1" >
                    </td>
                </tr>
                <tr class="fitr">
                    <td colspan="4">联系电话</td>
                    <td colspan="8">
                        <input type="text" name="tel" placeholder="请选择您的联系电话" class="use-inp js-tel1" >
                    </td>
                </tr>
               <!--  <tr class="fitr">
                    <td colspan="4">会场类型</td>
                    <td colspan="8">
                        <select name="mettingtype" style="width:100px;margin-left:-60px">
                           <option value="1">多功能厅</option>
                           <option value="2">报告厅</option>
                           <option value="3">普通会议室</option>
                           <option value="4">培训室</option>
                        </select>
                    </td>
                </tr> -->
                <tr class="fitr">
                    <td colspan="4">使用日期</td>
                    <td colspan="8">
                        <input type="text" name="needtime" placeholder="请输入使用日期" class="use-inp" >
                    </td>
                </tr>
                <tr class="fitr">
                <td colspan="4">使用时间</td>
                <td colspan="8" class="radio">
                        
                        <span>上午</span><input type="radio" value="1" name="needday">
                        <span>下午</span><input type="radio" value="2" name="needday">
                        <span>全天</span><input type="radio" value="3" name="needday">
                </td>
                </tr>
                <tr class="fitr">
                    <td colspan="4">开票信息</td>
                    <td colspan="10" class="radio">
                        <span class="ticket" style="margin-left:10px">专票口</span><input type="radio" value="1" name="kpxx" class="Pinput">
                        <span>普票口</span><input type="radio" value="2" name="kpxx" class="Pinput">
                    </td>
                </tr>
                <tr class="fitr serverNeed">
                    <td colspan="4">场地选择</td>
                    <td colspan="8">
                        <input type="text" placeholder="点击选择场地类型" class="use-inp js-pep" id="chHtml" >
                    </td>
                </tr>
            </table>
                <!-- 普票 -->
                <table class"ticketPiao puPiao" id="ticketPiao">
                    <tr class="fitr">
                        <td colspan="12" class="puSpan">
                            <span class="span1">取消</span>
                            <span class="span2">普票</span>
                            <span class="span3">确定</span> 
                        </td> 
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">公司名称</td>
                        <td colspan="8">
                            <input type="text" name="companyname" placeholder="请您输入公司名称" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">地址</td>
                        <td colspan="8">
                            <input type="text" name="zpadd" placeholder="请您输入公司地址" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">联系电话</td>
                        <td colspan="8">
                            <input type="text" name="zptel" placeholder="请您输入联系电话" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">纳税人识别码</td>
                        <td colspan="8">
                            <input type="text" name="swdjh" placeholder="请您输入税务登记号" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">开户行账号</td>
                        <td colspan="8">
                            <input type="text" name="khhzh" placeholder="请您输入开户行账号" class="use-inp js-pep" >
                        </td>
                    </tr>
                </table>
                <!-- 专票 -->
                <table class"ticketPiao zhuanPiao" id="zhuanpiao">
                    <tr class="fitr">
                        <td colspan="12" class="puSpan">
                            <span class="span1">取消</span>
                            <span class="span2">专票</span>
                            <span class="span3">确定</span> 
                        </td> 
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">公司名称</td>
                        <td colspan="8">
                            <input type="text" name="companyname" placeholder="请您输入公司名称" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">地址</td>
                        <td colspan="8">
                            <input type="text" name="zpadd" placeholder="请您输入公司地址" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">联系电话</td>
                        <td colspan="8">
                            <input type="text" name="zptel" placeholder="请您输入联系电话" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">税务登记号</td>
                        <td colspan="8">
                            <input type="text" name="swdjh" placeholder="请您输入税务登记号" class="use-inp js-pep" >
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">开户行账号</td>
                        <td colspan="8">
                            <input type="text" name="khhzh" placeholder="请您输入开户行账号" class="use-inp js-pep" >
                        </td>
                    </tr>
                </table>

                <!-- 选择需求 -->
                <table class"ticketPiao zhuanPiao" id="need">
                    <tr class="fitr">
                        <td colspan="12" class="puSpan">
                            <span class="span1 cancle">取消</span>
                            <span class="span3 truest" id="sure">确定</span> 
                        </td> 
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">多功能厅</td>
                        <td colspan="8" class="checkbox" id="can">
                            <span class="ticket need1">园区内企业场地费1000服务费500</span><input type="radio"  value="1" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="1"></td>
                        <td colspan="11" class="checkbox">
                            <span class="ticket need2">个人和园区外企业场地费2200服务费800</span><input type="radio" value="11" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4">报告厅</td>
                        <td colspan="8" class="checkbox">
                            <span class="ticket need3">园区内企业场地费1000服务费500</span><input type="radio" value="2" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4"></td>
                        <td colspan="8" class="checkbox">
                            <span class="ticket need4">个人和园区外企业场地费2200服务费800</span><input type="radio" value="22" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                    <tr class="fitr">
                        <td colspan="4" class="fif">50-70㎡</td>
                        <td colspan="8" class="checkbox yuan">
                            <span class="ticket need5">园区内企业场场地费250服务费100</span><input type="radio" value="3" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                    <!-- 修改处 -->
                    <tr class="fitr">
                        <td colspan="4"></td>
                        <td colspan="8" class="checkbox">
                            <span class="ticket need6">个人和园区外企业场地费500服务费200</span><input type="radio" value="33" name="mettingtype" class="Pinput">
                        </td>
                    </tr>

                     <tr class="fitr">
                        <td colspan="4" class="fif">100-300㎡</td>
                        <td colspan="8" class="checkbox yuan">
                            <span class="ticket need7">园区内企业场场地费300服务费125</span><input type="radio" value="4" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                     <tr class="fitr">
                        <td colspan="4"></td>
                        <td colspan="8" class="checkbox">
                            <span class="ticket need8">个人和园区外企业场地费600服务费250</span><input type="radio" value="44" name="mettingtype" class="Pinput">
                        </td>
                    </tr>
                </table>
                <input type="submit" class="he-ii" value="确认提交预约"/>   
            <div class="marsk-tips88">用户名不能为空</div>
        </form>
<div>
<div class="corver"></div>
<!--通用JS-->
<script src="/Public/home/dist/js/mobblie.js"></script>
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<!--本页JS-->
<script src="/Public/home/dist/js/metting.js"></script>
<script>
$(function(){
        $('#sure').on("click",function(){
            var $checked = $("input[name='mettingtype']:checked").siblings().html()
            console.log($checked);
            $("#chHtml").val($checked);
        });
        
    })

</script>
</html>