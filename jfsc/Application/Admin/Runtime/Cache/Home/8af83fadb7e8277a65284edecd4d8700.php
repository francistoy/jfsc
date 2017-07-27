<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div id="page-wrapper">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="#">订单管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <form action="/jfsc/admin.php/Home/Order/orderindex?" method="get">
                <div class="col-md-3">
                    <div class="input-group" >
                        <input class="form-control" name="order_num" type="text" value="" placeholder="请输入订单号" />
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
                                <th style="text-align: center;">ID号</th>
                                <th style="text-align: center;">订单号</th>
                                <th style="text-align: center;">奖品名称</th>
                                <th style="text-align: center;">兑换日期</th>
                                <th style="text-align: center;">数量</th>
                                <th style="text-align: center;">所需积分</th>
                                <th style="text-align: center;">订单状态</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($resord)): foreach($resord as $key=>$vo): ?><tr style="text-align: center;">
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_id"]); ?></td>
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_num"]); ?></td>
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_proname"]); ?></td>
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_time"]); ?></td>
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_prdnum"]); ?></td>
                                    <td style="vertical-align: middle;"><?php echo ($vo["order_jifen"]); ?></td>
                                    <td style="vertical-align: middle;">（<?php echo (zhuangtai($vo["order_status"])); ?>）</td>
                                    </td>
                                    <td>
                                        <p style="margin-top: 10px;"><a href="/jfsc/admin.php?c=order&a=edit&order_num=<?php echo ($vo["order_num"]); ?>&type_name=<?php echo ($vo["order_proname"]); ?>&uid=<?php echo ($vo["order_uid"]); ?>">查看</a></p>
                                        <?php if($vo[order_status] == 2): ?><p><a href="javascript:void(0);" class="goorder" attr-id="<?php echo ($vo["order_num"]); ?>">发货</a></p><?php endif; ?>
                                        <?php if($vo[order_status] == 4): ?><p><a href="javascript:void(0);" class="deleteorder" attr-id="<?php echo ($vo["order_num"]); ?>">删除订单</a></p><?php endif; ?>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    <div class="row text-center" style="width: 1125px;">
                        <div class="col-lg-12" style="width: 1125px;">
                            <ul class="pagination" style="float:right;">
                                <li >
                                    <a href="javascript:void(0);" style="float:right;margin-left: 5px;" class="pagego">确定</a>
                                   <div style="padding-left:5px;float:right;padding-top: 5px;"><span style="font-size:14px; ">到:</span><input type="text" value="1"  class="yeshu" style=" line-height: 30px;height: 25px;width: 40px;font-size: 14px;text-align: center;"/><span style="font-size:14px; ">&nbsp;页</span> </div>
                                    <a href="/jfsc/admin.php?c=order&a=orderindex&page=<?php echo ($pageres["totalPage"]); ?>&order_num=<?php echo ($order_num); ?>&status=<?php echo ($status); ?>" style="float:right;">尾页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=order&a=orderindex&page=<?php echo ($pageres["pageNext"]); ?>&order_num=<?php echo ($order_num); ?>&status=<?php echo ($status); ?>" style="float:right;">下一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=order&a=orderindex&page=<?php echo ($pageres["pagePrev"]); ?>&order_num=<?php echo ($order_num); ?>&status=<?php echo ($status); ?>" style="float:right;">上一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=order&a=orderindex&page=1&order_num=<?php echo ($order_num); ?>&status=<?php echo ($status); ?>" style="float:right;" >第一页</a>&nbsp;&nbsp;
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
</div>
<input type="hidden" class="status" value="<?php echo ($status); ?>">
<input type="hidden" class="order_num" value="<?php echo ($order_num); ?>">
<script>

    var SCOPE = {
        'add_url' : '/jfsc' +
        '/admin.php?c=product&a=add',
        'delete_url':'/jfsc' +
        '/admin.php?c=product&a=reset',
        'edit_url':'/jfsc' +
        '/admin.php?c=product&a=edit',
        'yeshu_url':'/jfsc' +
        '/admin.php?c=order&a=orderindex',
    }
</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
<script src="/jfsc/Public/index/js/handleorder.js"></script>
</body>