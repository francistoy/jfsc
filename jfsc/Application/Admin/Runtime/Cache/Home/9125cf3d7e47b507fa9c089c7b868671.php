<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css//uploadify/bootstrap-switch.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/uploadify/uploadify.css" rel="stylesheet">
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
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="#" onClick="javascript :history.back(-1);">商品管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> 商品添加
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

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

    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_lw',{
            uploadJson : '/jfsc/admin.php?c=image&a=kindupload',
            afterBlur : function(){this.sync();},
            height:"500px",
            width:"800px",
        });
    });
</script>
<script>
    var SCOPE = {
        'save_url' : '/jfsc/admin.php?c=product&a=save',
        'change_url' : '/jfsc/admin.php?c=product&a=proedit',
        'edit_url':'/jfsc/admin.php?c=product&a=edit',
        'jump_url':'javascript:self.location=document.referrer;',
        'ajax_upload_image_url' : '/jfsc/admin.php?c=image&a=ajaxuploadimage',
        'ajax_upload_swf' : '/jfsc/Public/Admin/js/uploadify/uploadify.swf',
    };
</script>
</body>
</html>