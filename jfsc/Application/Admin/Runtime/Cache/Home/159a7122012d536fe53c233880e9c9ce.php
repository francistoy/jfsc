<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div id="wrapper" >
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="#">轮播图管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i>
                        </li>
                    </ol>
                </div>
            </div>
            <div>
                <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-plus" ></span>添加</button>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th style="text-align: center">ID号</th>
                                <th style="text-align: center">图片地址</th>
                                <th style="text-align: center">链接地址</th>
                                <th style="text-align: center">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($slide)): foreach($slide as $key=>$vo): ?><tr style="text-align: center">
                                    <td><?php echo ($vo["slide_id"]); ?></td>
                                    <td><?php echo ($vo["SlideImg"]); ?></td>
                                    <td><?php echo ($vo["linkaddress"]); ?></td>
                                    <td>
                                        <a href="javascript:void(0)"  class="jfsc-search" onclick="javascript :window.location.href='/jfsc/admin.php?c=slideshow&a=edit&id=<?php echo ($vo["slide_id"]); ?>'">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                                        <a href="javascript:void(0)" attr-id="<?php echo ($vo["slide_id"]); ?>" class="jfsc-delete"   attr-message="删除"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var SCOPE={
        'add_url':'/jfsc/admin.php?c=Slideshow&a=add',
        'delete_url':"/jfsc/admin.php?c=Slideshow&a=delete",
        'jump_url':'/jfsc/admin.php?c=Slideshow&a=index',
    }
</script>

<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
</body>
</html>