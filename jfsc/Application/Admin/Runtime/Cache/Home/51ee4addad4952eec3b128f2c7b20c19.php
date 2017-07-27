<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/weather-icons.css" rel="stylesheet">

    <link id="beyond-link" href="/jfsc/Public/Admin/css/beyond.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand" style="font-size: 30px;font-family:微软雅黑;width:224px;text-align: center;height:45px;line-height:35px;">
                    积分商城
                </a>
            </div>
            <div class="navbar-header pull-right">
                <div class="navbar-account" style="height:45px">
                    <span style="font-size: 20px;color: #fff;line-height:45px;">您好,<?php echo ($username); ?>管理员</span>
                    <a href="/jfsc/admin.php?c=login&a=loginout" style="color: #fff;text-decoration: none;font-size: 20px;padding-left: 10px;" target="_top">退出登录</a>
                </div>
            </div>
    </div>
</div>
</body>
</html>