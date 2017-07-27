<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录</title>
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">

</head>

<body>
<style>
    .login {
        width:400px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="login">

        <h2 >积分商城</h2>
        <input type="text"  class="form-control" name="username" placeholder="请填写用户名" >
        <br />
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码">
        <br />
        <div class="form-group has-feedback">
            <input type="text" name="verify" class="form-control" placeholder="验证码" style="width:200px;display: inline-block;" />
            <img class="verify" src="<?php echo U('login/verify');?>" alt="" onClick="this.src=this.src+'?'+'gate=1'" />
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="login.check()">登录</button>

</div>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/login.js"></script>
</body>
</html>