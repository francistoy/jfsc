<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<frameset rows="45,*" cols="*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo U('Index/topnav');?>" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
    <frameset cols="224,*" frameborder="no" border="0" framespacing="0">
        <frame src="<?php echo U('Index/left');?>" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
        <frame src="<?php echo U('Index/rightt');?>" name="rightFrame" id="rightFrame" title="rightFrame" />
    </frameset>
</frameset>
<noframes><body>
</body></noframes>
</html>