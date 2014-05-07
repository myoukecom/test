<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>后台管理登陆入口</title>
	<script type='text/javascript' src='http://localhost/test/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/test/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/test/cms';
		WEB = 'http://localhost/test/cms/index.php';
		URL = 'http://localhost/test/cms/index.php/admin/Login/login';
		HDPHP = 'http://localhost/test/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/test/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/test/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/test/hdphp/hdphp/Extend';
		APP = 'http://localhost/test/cms/index.php/Admin';
		CONTROL = 'http://localhost/test/cms/index.php/Admin/Login';
		METH = 'http://localhost/test/cms/index.php/Admin/Login/login';
		GROUP = 'http://localhost/test/cms/Cms';
		TPL = 'http://localhost/test/cms/Cms/App/Admin/Tpl';
		CONTROLTPL = 'http://localhost/test/cms/Cms/App/Admin/Tpl/Login';
		STATIC = 'http://localhost/test/cms/Static';
		PUBLIC = 'http://localhost/test/cms/Cms/App/Admin/Tpl/Public';
		HISTORY = 'http://localhost/test/cms/index.php/Category/Category/index';
		HTTPREFERER = 'http://localhost/test/cms/index.php/Category/Category/index';
</script>
	<link href='http://localhost/test/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js'></script>
                <!--[if lte IE 6]>
                <link rel="stylesheet" type="text/css" href="http://localhost/test/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
                <![endif]-->
                <!--[if lt IE 9]>
                <script src="http://localhost/test/hdphp/hdphp/Extend/Org/bootstrap/js/html5shiv.min.js"></script>
                <script src="http://localhost/test/hdphp/hdphp/Extend/Org/bootstrap/js/respond.min.js"></script>
                <![endif]-->
	<script type="text/javascript" src="http://localhost/test/cms/Cms/App/Admin/Tpl/Login/js/js.js"></script>
</head>
<body style="margin:0px; padding:0px">
<div style="width:auto; height:300px; border:solid 1px #3366FF; position:absolute; margin:50px 50px 50px 50px;">
<h3 style="text-align:center; background:#33CCFF; color:#000;">管理员登陆</h3>
	<form action='http://localhost/test/cms/index.php/Admin/Login/login' method='post' class='hd-form'>
	<table class='table1' style=''>
		<tr>
			<td class='w100'>账号</td>
			<td>
				<input type='text' name='username'/>
			</td>
		</tr>
		<tr>
			<td>密码</td>
			<td>
				<input type='password' name='password'/>
			</td>
		</tr>
		</tr>
		<tr>
			<td>验证码</td>
			<td>
				<input type='text' name='code'/>
				<img src='http://localhost/test/cms/index.php/Admin/Login/code'/>
				<span id='hd_code'></span>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type='submit' value='登陆' class='btn btn-primary'>
			</td>
		</tr>
	</table>
	</form>
    </div>
</body>
</html>