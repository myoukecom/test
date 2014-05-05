<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>添加文章</title>
</head>
<body>
<form action='http://localhost/test/db.php/News/add' method="post">
    <table>
	<tr>
		<td>标题</td>
		<td>
			<input type="text" name="title"/>
		</td>
	</tr>
		<tr>
		<td>正文</td>
		<td>
			<script charset="utf-8" src="http://localhost/test/hdphp/hdphp/Extend/Org/Keditor/kindeditor-all-min.js"></script>
            <script charset="utf-8" src="http://localhost/test/hdphp/hdphp/Extend/Org/Keditor/lang/zh_CN.js"></script>
        <textarea id="hd_content" name="content"></textarea>
        <script>
        var options_content = {
        filterMode : false
                ,id : "editor_id"
        ,width : "100%"
        ,height:"300px"
                ,formatUploadUrl:false
        ,allowFileManager:false
        ,allowImageUpload:true
        ,afterBlur: function(){this.sync();}
        ,uploadJson : "http://localhost/test/db.php?c=News&m=keditor_upload&g=App&water=1&uploadsize=2000000&maximagewidth=false&maximageheight=false&hd_sid=9niq6vr5h7oe8e1t47cokq9ah1"
        };var hd_content;
        KindEditor.ready(function(K) {
                    hd_content = KindEditor.create("#hd_content",options_content);
        });
        </script>
        
		</td>
	</tr>
	<tr>
		<td colspan=2>
			<input type="submit" value="添加文章"/>
		</td>
	</tr>
    </table>
</form>
</body>
</html>