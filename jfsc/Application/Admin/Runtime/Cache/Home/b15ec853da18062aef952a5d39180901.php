<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/weather-icons.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-lg-12">

        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="#">管理首页</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i>
            </li>
        </ol>
    </div>
</div>
<div  style="width:450px;height: 50px;margin-top: -20px; border-bottom: solid 1px #999;">
    <h3 style="padding-left: 20px;">网站后台</h3>
</div>
<div style="width:1000px;margin-top:150px;margin-left: auto;margin-right: auto;text-align: center;">
    <h2 style="color: #F05A65;"><?php echo ($username); ?>管理员！欢迎登陆网站后台！</h2>
</div>
</body>
</html>