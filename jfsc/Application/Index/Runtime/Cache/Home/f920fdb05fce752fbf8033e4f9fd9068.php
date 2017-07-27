<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css//uploadify/bootstrap-switch.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/uploadify/uploadify.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Custom Theme files -->
    <link href="/jfsc/Public/Index/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="/jfsc/Public/Index/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="/jfsc/Public/Index/css/mystyle.css" type="text/css" rel="stylesheet" media="all">
    <!-- js -->
    <script src="/jfsc/Public/Index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/jfsc/Public/Index/js/bootstrap-3.1.1.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="/jfsc/Public/Index/js/simpleCart.min.js"> </script>
    <!-- cart -->
    <style>
        #KindEditor_SWFUpload_0
        {
            opacity:0;
        }
        .ziti
        {
            line-height: 34px;
            font-size: 14px;
            margin-left: 15px;
        }
    </style>
</head>
<body>
<!--header-->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="navbar-brand"><a  href="index.html">積分商城</a></h1>
            </div>
            <!--navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/jfsc/index.php" class="active">主頁</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">全部商品分類<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-4" >
                            <div class="row">
                                <?php if(is_array($type)): foreach($type as $key=>$vo): ?><div class="col-sm-3 typelist" >
                                        <h4 style="margin-bottom: 10px"><?php echo ($vo["type_name"]); ?></h4>
                                        <ul class="multi-column-dropdown">
                                            <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="typeli"><a class="list" href="/jfsc/index.php?c=product&a=index&typename=<?php echo ($list["type_name"]); ?>"><?php echo ($list["type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div><?php endforeach; endif; ?>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown grid">
                        <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">積分範圍<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-4" style="min-width: 200px;">
                            <div class="row">
                                <div class="col-sm-3" style="min-width: 200px;">
                                    <h4>積分:</h4>
                                    <ul class="multi-column-dropdown">
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=1">1-2000</a></li>
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=2">2001-5000</a></li>
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=3">5001-10000</a></li>
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=4">10001-50000</a></li>
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=5">50001-200000</a></li>
                                        <li><a class="list" href="/jfsc/index.php?c=product&a=index&jifen_fanwei=6">200000以上</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown grid">
                        <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">人氣值排行 <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-4" style="min-width: 200px;">
                            <div class="row">
                                <div class="col-sm-3" style="min-width: 200px;">
                                    <h4>人氣</h4>
                                    <ul class="multi-column-dropdown">
                                        <?php $a=1;?>
                                        <?php if(is_array($producti)): foreach($producti as $key=>$vo): ?><li><a class="list clicknum" attr-id="<?php echo ($vo["prd_id"]); ?>" href="/jfsc/index.php?c=product&a=prodetail&prd_id=<?php echo ($vo["prd_id"]); ?>"><?php echo ($a++); ?>.<?php echo ($vo["p_Name"]); ?></a></li><?php endforeach; endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <!--/.navbar-collapse-->
            </div>
            <!--//navbar-header-->
        </nav>
        <div class="header-info">
            <div class="header-right search-box">
                <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                <div class="search">
                    <form class="navbar-form" action="/jfsc/index.php/Home/product/index" method="get">
                        <input type="text" class="form-control" name="p_Name">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            搜索
                        </button>
                    </form>
                </div>
            </div>
            <div class="header-right login">
                <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                <div id="loginBox">
                    <?php if(empty($Hukcuser)): ?><div id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="username">用戶名</label>
                                    <input type="text" name="username" id="username">
                                </fieldset>
                                <fieldset>
                                    <label for="password">密碼</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="submit" class="login" value="登錄" onclick="login.check()">
                                <label for="check"><input type="checkbox" id="check" style="width: auto;margin: 3px 6px 0 0;float: left;padding: 0;border: 0;"> <i>Remember me</i></label>
                            </fieldset>
                            <p>New User ? <a class="sign" href="account.html">Sign Up</a> <span><a href="#">Forgot your password?</a></span></p>
                        </div>
                        <?php else: ?>
                        <div id="loginForm">
                            <fieldset id="body" >
                                <fieldset>
                                    <label for="username">用戶名</label>
                                    <input type="text" name="user_name" id="usernamee" value="<?php echo ($Hukcuser["user_name"]); ?>">
                                </fieldset>
                                <fieldset>
                                    <label for="password">修改密碼</label>
                                    <input type="text" name="user_password" id="password" >
                                </fieldset>
                                <fieldset>
                                    <label for="password">確認密碼</label>
                                    <input type="text" name="user_repassword" id="repassword" >
                                </fieldset>
                                <fieldset>
                                    <label for="username">郵箱</label>
                                    <input type="text" name="user_email" value="<?php echo ($Hukcuser["user_email"]); ?>">
                                </fieldset>
                                <fieldset>
                                    <label for="username">電話</label>
                                    <input type="text" name="user_phone" value="<?php echo ($Hukcuser["user_phone"]); ?>">
                                </fieldset>
                                <fieldset>
                                    <label for="username">地址</label>
                                    <input type="text" name="user_place" id="user_place" value="<?php echo ($Hukcuser["user_place"]); ?>">
                                </fieldset>
                                <fieldset>
                                    <label>性别</label>
                                    <label  for="boy" style="display: inline-block;vertical-align: middle;">男</label> <input style="width:50px;" id="boy" name="user_sex" type="radio" value="男" <?php if($Hukcuser[user_sex] == '男'): ?>checked="checked"<?php endif; ?> />
                                    <label for="girl" style="display: inline-block;vertical-align: middle;">女</label> <input style="width:50px;" id="girl" name="user_sex" type="radio" value="女"  <?php if($Hukcuser[user_sex] == '女'): ?>checked="checked"<?php endif; ?> />
                                </fieldset>
                                <input  type="submit" class="login" id="jfsc-button-change" value="保存" >
                                <input  type="submit" class="login"  value="退出登錄" style="margin-top: 5px;" onclick="javascript:window.location.href='/jfsc/index.php?c=index&a=loginout';">
                            </fieldset>
                        </div><?php endif; ?>
                </div>
            </div>
            <div class="header-right cart">
                <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                <div class="cart-box">
                    <h4><a href="javascript:void(0);">
                        <span > 積分:  </span> (<span><?php echo ($Hukcuser["user_jifen"]); ?></span>)
                    </a></h4>
                    <p><a href="javascript:void(0);" class="simpleCart_empty islogin" attr-where="1" attr-user="<?php echo ($Hukcuser["user_id"]); ?>">積分明細</a></p>
                    <p><a href="javascript:void(0);" class="simpleCart_empty  islogin" attr-where="2" attr-user="<?php echo ($Hukcuser["user_id"]); ?>">積分記錄</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div id="page-wrapper" >

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6" style="margin-top: 40px;margin-left: 28%;">
                <h4>订单详情</h4>
                <form class="form-horizontal" id="jfsc-form">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">商品图片:</label>
                        <div class="col-sm-5">
                            <img  id="upload_org_code_img" src="<?php echo ($data["pImg"]); ?>" width="150" height="150">
                            <input id="file_upload_image" name="pImg" type="hidden" multiple="true" value="<?php echo ($data["pImg"]); ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">数量:</label>
                        <span class="ziti"><?php echo ($data["order_prdnum"]); ?></span>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">订单号:</label>
                          <span class="ziti"><?php echo ($data["order_num"]); ?></span>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">收货人:</label>
                        <span class="ziti"><?php echo ($data["user_name"]); ?></span>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">手机号:</label>
                        <span class="ziti"><?php echo ($data["user_phone"]); ?></span>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">收货地址:</label>
                        <span class="ziti"><?php echo ($data["user_place"]); ?></span>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">下单时间:</label>
                        <span class="ziti"><?php echo ($data["order_time"]); ?></span>
                    </div>
                    <button type="button" class="btn btn-default" style="margin-left:200px;margin-top: 20px;" onclick="javascript:self.location=document.referrer;">返回</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
<script src="/jfsc/Public/Admin/js/uploadify/jquery.uploadify.js"></script>
<script src="/jfsc/Public/Admin/js/image.js"></script>
<script src="/jfsc/Public/Admin/js/kindeditor/kindeditor-all.js"></script>
<script>
    var SCOPE = {
        'save_url' : '/jfsc/admin.php?c=product&a=save',
        'change_url' : '/jfsc/admin.php?c=product&a=proedit',
        'edit_url':'/jfsc/admin.php?c=product&a=edit',
        'jump_url':'javascript:self.location=document.referrer;',
        'ajax_upload_image_url' : '/jfsc/admin.php?c=image&a=ajaxuploadimage',
        'ajax_upload_swf' : '/jfsc/Public/Admin/js/uploadify/uploadify.swf',
    };
    function msgnotok(msg)
    {
        layer.msg(
                msg, {
                    icon: 2,
                    shade: [0.5, '#000'],
                    time:1000,
                    shadeColse:true
                });
    }
    $('.clicknum').click(function()
    {
        var prd_id = $(this).attr("attr-id");
        var data={};
        data={'prd_id':prd_id};
        var url="/jfsc/index.php?c=Product&a=Addclick";
        $.post(url,data,function()
        { });
    });
    $('.islogin').click(function()
    {
        var user=$(this).attr('attr-user');
        var where=$(this).attr("attr-where");
        if(user.length==0)
        {
            return dialog.error("您还未进行登录");
        }
        if(where==1)
        {
            window.location.href="/jfsc/index.php?c=Jifen&a=jfdetail&user_id="+user;
        }
        if(where==2)
        {
            window.location.href="/jfsc/index.php?c=Jifen&a=jfrecord&user_id="+user;
        }
    });
</script>
</body>
</html>