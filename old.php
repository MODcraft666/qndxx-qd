<!doctype html>
<html>
<!-- 下边三行代码用于适配不同设备的访问，做出适配与手机的窗口 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8">
<meta HTTP-EQUIV="pragma" CONTENT="no-cache"> 
<meta HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate"> 
<title>高一四班青年大学习登记系统(测试)</title>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function sign() {
        $.ajax({
            type: "POST",//方法类型
            dataType: "html",//预期服务器返回的数据类型
            url: "addinfo.php" ,//url
            data: $('#sign').serialize(),
            success: function (result) {
                //提示信息
                alert(result);
            },
            error : function() {
                alert("提交时出现异常!");
            }
        });
    }
</script>
</head>
<body>
    <p style="font-size:20px;color:red">本周青年大学习内容：青年大学习特辑：学习党的十九届五中全会精神</p>
<p>请在下面输入姓名和学号：<br>
注意，姓名与学号必须对应，否则会报错。<br>
打卡成功信息会以对话框形式弹出，请注意查看</p>
<p>每周都有新的学习内容并且学习完成后需在此处签到，注意查看本网站提示</p>
<a target="_blank" href="./down_none.php" class="button">查看本周未打卡名单</a>

<!-- 下面通过form表单提交的方式传递POST -->
<form id="sign">
	<div>
		<label for="name">姓名：</label>
		<input id="name" name="name">
	</div>
	<div>
		<label for="number">学号：</label>
		<input id="number" name="number">
	</div>
	<div>
		<button onclick="sign()" type="button">点击打卡</button>
	</div>
</form>
<p style="font-size:30px;color:red">真正的学习记录在学校后台都有详细记录，如果被学校发现上报已学习却后台显示未学习的同学将会被学校请去喝茶！</p>
<p>在使用过程中有任何问题，请联系李岳洋解决</p>
<p>版本更新：</br>1、现在IP地址重复检测已经正式开启</br>2、现在打卡信息转换为由对话框弹出</br>3、主页做了能与手机相适配的窗口</br>4、进行了对清除历史记录功能的安全性维护</br>5、修复了在特定条件下时间访问错误的bug</p>
</body>
</html>
