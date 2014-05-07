<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>添加栏目</title>
	<script type='text/javascript' src='http://localhost/test/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/test/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/test/cms';
		WEB = 'http://localhost/test/cms/index.php';
		URL = 'http://localhost/test/cms/index.php/Category/Category/add';
		HDPHP = 'http://localhost/test/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/test/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/test/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/test/hdphp/hdphp/Extend';
		APP = 'http://localhost/test/cms/index.php/Category';
		CONTROL = 'http://localhost/test/cms/index.php/Category/Category';
		METH = 'http://localhost/test/cms/index.php/Category/Category/add';
		GROUP = 'http://localhost/test/cms/Cms';
		TPL = 'http://localhost/test/cms/Cms/App/Category/Tpl';
		CONTROLTPL = 'http://localhost/test/cms/Cms/App/Category/Tpl/Category';
		STATIC = 'http://localhost/test/cms/Static';
		PUBLIC = 'http://localhost/test/cms/Cms/App/Category/Tpl/Public';
		HISTORY = 'http://localhost/test/cms/index.php/Category/Category/edit/cid/9';
		HTTPREFERER = 'http://localhost/test/cms/index.php/Category/Category/edit/cid/9';
</script>
	<script type="text/javascript" src="http://localhost/test/cms/Cms/App/Category/Tpl/Category/js/validate.js"></script>
	<script type="text/javascript" src="http://localhost/test/cms/Cms/App/Category/Tpl/Category/js/js.js"></script>
</head>
<body>
<div class="menu_list">
	<ul>
		 <li><a href="<?php echo U('index');?>" > 栏目列表 </a></li>
 　 　 <li><a href="<?php echo U('add');?>" class="action"> 添加栏目 </a></li>
 　 　 <li><a href="javascript:update_cache();"> 更新栏目缓存 </a></li>
	</ul>
</div>
<div class='title-header'>添加栏目</div>
<form method='post'  class='hd-form' onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
	<input type='hidden' name='pid' value='<?php echo _default($_GET['pid'],0);?>'/> 
	<table class='table1'>
		<tr>
			<th class='w100'>栏目名称</th>
			<td>
				<input type='text' name='cname' class='w200'/>
			</td>
		</tr>
		<tr>
			<th class='w100'>关键字</th>
			<td>
				<input type='text' name='keywords' class='w300'/>
			</td>
		</tr>
		<tr>
			<th class='w100'>栏目描述</th>
			<td>
				<textarea name='description' class='w300 h100'></textarea>
			</td>
		</tr>
	</table>
	<div class='position-bottom'>
		<input type='submit' value='确定' class='hd-success'/>
	</div>
</form>
</body>
</html>