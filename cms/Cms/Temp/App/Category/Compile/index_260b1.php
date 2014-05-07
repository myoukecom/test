<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>栏目列表</title>
	<script type='text/javascript' src='http://localhost/test/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/test/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/test/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/test/cms';
		WEB = 'http://localhost/test/cms/index.php';
		URL = 'http://localhost/test/cms/index.php/Category/Category/index';
		HDPHP = 'http://localhost/test/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/test/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/test/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/test/hdphp/hdphp/Extend';
		APP = 'http://localhost/test/cms/index.php/Category';
		CONTROL = 'http://localhost/test/cms/index.php/Category/Category';
		METH = 'http://localhost/test/cms/index.php/Category/Category/index';
		GROUP = 'http://localhost/test/cms/Cms';
		TPL = 'http://localhost/test/cms/Cms/App/Category/Tpl';
		CONTROLTPL = 'http://localhost/test/cms/Cms/App/Category/Tpl/Category';
		STATIC = 'http://localhost/test/cms/Static';
		PUBLIC = 'http://localhost/test/cms/Cms/App/Category/Tpl/Public';
		HISTORY = 'http://localhost/test/cms/index.php/Admin/Index/index';
		HTTPREFERER = 'http://localhost/test/cms/index.php/Admin/Index/index';
</script>
</head>
<body>
<div class="menu_list">
 <ul>
 　 　 <li><a href="<?php echo U('index');?>" class="action"> 栏目列表 </a></li>
 　 　 <li><a href="<?php echo U('add');?>" > 添加顶级栏目</a></li>
 　 　 <li><a href="javascript:update_cache();"> 更新栏目缓存 </a></li>
 </ul>
 </div>
 <div>
 	<table class='table2'>
 		<thead>
 		<tr>
 			<td class='w50'>CID</td>
 			<td>栏目名称</td>
 			<td class='w150'>操作</td>
 		</tr>
 	</thead>
 	<tr>
 	<?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

 			<td><?php echo $c['cid'];?></td>
 			<td><?php echo $c['_name'];?></td>
 			<td>
 				<a href="http://localhost/test/cms/index.php/Category/Category&m=add&pid=<?php echo $c['cid'];?>">添加子栏目</a>
 				<a href="<?php echo U(edit,array('cid'=>$c['cid']));?>">编辑</a>
 				<a href="#">删除</a>
 			</td>
 		</tr>
 	<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
 	</table>
 </div>
</body>
</html>