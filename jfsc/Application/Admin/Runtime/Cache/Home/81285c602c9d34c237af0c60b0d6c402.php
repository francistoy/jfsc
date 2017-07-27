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
        #SWFUpload_0
        {
            opacity:0;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="#">轮播图管理</a>
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
                            <label  class="col-sm-2 control-label">图片:</label>
                            <div class="col-sm-5">
                                <input id="file_upload"  type="file" multiple="true" >
                                <img  id="upload_org_code_img" src="<?php echo ($slide["SlideImg"]); ?>" width="150" height="150">
                                <input id="file_upload_image" name="SlideImg" type="hidden" multiple="true" value="<?php echo ($slide["SlideImg"]); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="linkaddr" class="col-sm-2 control-label">链接地址</label>
                            <div class="col-sm-5">
                                <input type="text" name="linkaddress" class="form-control" id="linkaddr" placeholder="请填写链接地址" value="<?php echo ($slide["linkaddress"]); ?>"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="jfsc-button-change">保存</button>
                            </div>
                        </div>
                        <input type="hidden" name="slide_id" value="<?php echo ($slide["slide_id"]); ?>" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var SCOPE = {
        'change_url' : '/jfsc/admin.php?c=Slideshow&a=change',
        'jump_url' : 'javascript:self.location=document.referrer;',
        'ajax_upload_image_url' : '/jfsc/admin.php?c=image&a=ajaxuploadimage',
        'ajax_upload_swf' : '/jfsc/Public/Admin/js/uploadify/uploadify.swf',
    }
</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
<script src="/jfsc/Public/Admin/js/uploadify/jquery.uploadify.js"></script>
<script src="/jfsc/Public/Admin/js/image.js"></script>
</body>
</html>