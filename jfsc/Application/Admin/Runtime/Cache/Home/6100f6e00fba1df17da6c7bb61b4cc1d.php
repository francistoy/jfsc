<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="/jfsc/admin.php?c=protype&a=index">商品分类管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> 添加
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="jfsc-form">
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">下级分类名称:</label>
                            <div class="col-sm-5">
                                <input type="text" name="typename" class="form-control" id="inputname" placeholder="请填写分类名称" >
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo ($typepid); ?>" name="typepid">
                        <!--<div class="form-group">-->
                            <!--<label  class="col-sm-2 control-label">上级分类:</label>-->
                            <!--<div class="col-sm-5">-->
                                <!--<select class="form-control" name="type" >-->
                                    <!--<option value='' <?php if($product[type] == 0): ?>selected="selected"<?php endif; ?>>&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;生活用品&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;</option>-->
                                    <!--<option value="1" <?php if($product[type] == 1): ?>selected="selected"<?php endif; ?>>女友</option>-->
                                    <!--<option value="2" <?php if($product[type] == 2): ?>selected="selected"<?php endif; ?>>男友</option>-->
                                    <!--<option value="3" <?php if($product[type] == 3): ?>selected="selected"<?php endif; ?>>女生</option>-->
                                    <!--<option value="4" <?php if($product[type] == 4): ?>selected="selected"<?php endif; ?>>男生</option>-->
                                <!--</select>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="jfsc-button-submit">添加</button>
                                <button type="button" class="btn btn-default" style="margin-left:20px;" onclick="javascript:self.location=document.referrer;">返回</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var SCOPE = {
        'save_url' : '/jfsc/admin.php?c=protype&a=typeadd',
        'jump_url' : 'javascript:self.location=document.referrer',
    }
</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
</body>
</html>