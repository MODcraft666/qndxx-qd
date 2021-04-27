<!doctype html>
<html>
<!-- 下边三行代码用于适配不同设备的访问，做出适配与手机的窗口 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />
<head>
<meta charset="utf-8">
<title>打卡系统管理</title>
<!-- 下面的js脚本中,httpPost是用来传递POST的一个函数，openResult是一个生成POST参数的一个函数 -->
<script>
	function httpPost(URL, PARAMS) {
		var temp = document.createElement("form");
		temp.action = URL;
		temp.method = "post";
		temp.style.display = "none";
		for (var x in PARAMS) {
			var opt = document.createElement("textarea");
			opt.name = x;
			opt.value = PARAMS[x];
			//alert(opt.value);
			//alert(opt.name);
			temp.appendChild(opt);
		}
		document.body.appendChild(temp);
		temp.submit();
		return temp;
	}
	function openResult() {
		var r = confirm("请确认删除");
		if (r == true) {
			httpPost('./clear_his.php?class=<?php echo $_GET['class']; ?>',{flag:'yes'});	//此POST信息是为了防止删除文件的php通过网页直接调用而发生误删除而做的一个保险装置
		} else {

		}
	}
</script>
</head>

<body>
<p>打卡系统后台管理(测试)</p>
<p>打卡记录每周会自动清空，请注意！(此操作可恢复)</br>手动删除的打卡记录暂时没有备份，所以删除后无法恢复，请慎重！</p>
<p>
  <a href="./down_his.php?class=<?php echo $_GET['class']; ?>" class="button">查看本周打卡记录</a>
  <a href="./down_none.php?class=<?php echo $_GET['class']; ?>" class="button">查看本周未打卡名单</a>
  <a href="javascript:openResult()" clss="button">清空本周打卡记录(慎重)</a>
</p>
<p>使用有任何问题均可联系李岳洋</p>
<p>版本更新：</br>1、现在IP地址重复检测已经开启，具体可以进入"查看未打卡名单"界面查看</br>2、现在打卡信息转换为由对话框弹出</br>3、主页做了能与手机相适配的窗口</br>4、进行了对清除历史记录功能的安全性维护</br>5、修复了在特定条件下时间访问错误的bug</p>
</body>
</html>
