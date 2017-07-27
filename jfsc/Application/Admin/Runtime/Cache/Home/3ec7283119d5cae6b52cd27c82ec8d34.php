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
<div id="page-wrapper">

    <div class="container-fluid" >

        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="#">会员管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <form action="/jfsc/admin.php/Home/User/index?" method="get">
                <div class="col-md-3">
                    <div class="input-group" >
                        <input class="form-control" name="user_name" type="text" value="" placeholder="请输入会员名称" />
                <span class="input-group-btn">
                  <button  type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
                    </div>
                </div>
                <input type="hidden" value="<?php echo ($status); ?>" name="status" class="getstatus">
            </form>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover ">
                        <thead>
                        <tr>
                            <th style="text-align: center;">ID号</th>
                            <th style="text-align: center;">会员名</th>
                            <th style="text-align: center;">积分余额</th>
                            <th style="text-align: center;">邮箱</th>
                            <th style="text-align: center;">性别</th>
                            <th style="text-align: center;">注册时间</th>
                            <th style="text-align: center;">登录时间</th>
                            <th style="text-align: center;">登录地址</th>
                            <th style="text-align: center;">状态</th>
                            <th style="text-align: center;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($useres)): foreach($useres as $key=>$vo): ?><tr style="text-align: center;">
                                <td style="vertical-align: middle;"><?php echo ($vo["user_id"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_name"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_jifen"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_email"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_sex"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_registertime"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_logintime"]); ?></td>
                                <td style="vertical-align: middle;"><?php echo ($vo["user_loginplace"]); ?></td>
                                <td><span  attr-status="<?php if($vo[user_status] == 1): ?>0<?php else: ?>1<?php endif; ?>"  attr-id="<?php echo ($vo["user_id"]); ?>" class="jfsc-reset"  ><?php echo (status($vo["user_status"])); ?></span></td>
                                <td>    <a href="javascript:void(0)" attr-id="<?php echo ($vo["user_id"]); ?>" class="jfsc-delete"  attr-a="admin" attr-message="删除"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <div class="row text-center" style="width: 1125px;">
                        <div class="col-lg-12" style="width: 1125px;">
                            <ul class="pagination" style="float:right;">
                                <li >
                                    <a href="javascript:void(0);" style="float:right;margin-left: 5px;" class="pagego">确定</a>
                                    <div style="padding-left:5px;float:right;padding-top: 5px;"><span style="font-size:14px; ">到:</span>
                                        <input type="text" value="1" class="yeshu" style=" line-height: 30px;height: 25px;width: 40px;font-size: 14px;text-align: center;"/><span style="font-size:14px; ">&nbsp;页</span> </div>
                                    <a href="/jfsc/admin.php?c=User&a=index&page=<?php echo ($pageres["totalPage"]); ?>&user_name=<?php echo ($user_name); ?>" style="float:right;">尾页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=User&a=index&page=<?php echo ($pageres["pageNext"]); ?>&user_name=<?php echo ($user_name); ?>" style="float:right;">下一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=User&a=index&page=<?php echo ($pageres["pagePrev"]); ?>&user_name=<?php echo ($user_name); ?>" style="float:right;">上一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=User&a=index&page=1&user_name=<?php echo ($user_name); ?>" style="float:right;" >第一页</a>&nbsp;&nbsp;
                                    <a style="float:right;">    当前&nbsp;<font color=black><?php echo ($pageres["page"]); ?></font>/<font color=black><?php echo ($pageres["totalPage"]); ?></font>&nbsp;页</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" class="user_name" value="<?php echo ($user_name); ?>">
<script>

    var SCOPE = {
        'add_url' : '/jfsc/admin.php?c=User&a=add',
        'delete_url':'/jfsc/admin.php?c=User&a=setstatus',
        'reset_url':'/jfsc/admin.php?c=User&a=reset',
        'yeshu_url':'/jfsc/admin.php?c=User&a=index',
        'jump_url':'',
    }
</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
</body>
</html>