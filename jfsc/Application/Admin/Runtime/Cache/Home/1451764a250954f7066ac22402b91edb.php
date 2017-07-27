<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css//uploadify/bootstrap-switch.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/uploadify/uploadify.css" rel="stylesheet">
    <style>
        #KindEditor_SWFUpload_0
        {
            opacity:0;
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
                        <label for="productname" class="col-sm-2 control-label">商品名称:</label>
                        <div class="col-sm-5">
                            <input type="text" name="p_Name" class="form-control" id="productname" placeholder="请填写商品名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pricee" class="col-sm-2 control-label">价格:</label>
                        <div class="col-sm-5">
                            <input type="text" name="price" class="form-control" id="pricee" placeholder="请填写商品价格">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-sm-2 control-label">数量:</label>
                        <div class="col-sm-5">
                            <input type="text" name="pNum" class="form-control" id="number" placeholder="请填写商品数量">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">图片:</label>
                        <div class="col-sm-5">
                            <input id="file_upload"  type="file" multiple="true">
                            <img  id="upload_org_code_img" src="" width="150" height="150">
                            <input id="file_upload_image" name="pImg" type="hidden" multiple="true" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">分类:</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="type">
                                <?php if(is_array($typei)): $i = 0; $__LIST__ = $typei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value=''>--------<?php echo ($vo["type_name"]); ?>--------</option>
                                    <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><option value='<?php echo ($list["type_id"]); ?>'><?php echo ($list["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editor_lw" class="col-sm-2 control-label">内容:</label>
                        <div class="col-sm-5">
                            <textarea class="input js-editor" id="editor_lw" name="pDesc" rows="20" ></textarea>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label  class="col-sm-2 control-label" >关键字:</label>
                        <div class="col-sm-10" style="width: 900px;">
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"  value="1" >
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"   >
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"  >
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"  >
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"  >
                            <input style="width: 80px;display: inline-block;margin-right: 10px;" type="text" class="form-control keywords"  >
                            <input type="hidden" name="keywords_id" value="" class="keywords_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default" id="jfsc-button-submit">提交</button>
                        </div>
                    </div>
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
    // 6.2
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
        'save_url' : '/jfsc/admin.php?c=Product&a=productAdd',
        'jump_url' : 'javascript:self.location=document.referrer;',
        'edit_url':'/jfsc/admin.php?c=product&a=edit',
        'ajax_upload_image_url' : '/jfsc/admin.php?c=image&a=ajaxuploadimage',
        'ajax_upload_swf' : '/jfsc/Public/Admin/js/uploadify/uploadify.swf',
    };
    window.onload=AddKeyWords();
    function AddKeyWords()
    {
        var keywords = $(".keywords");
        var keywordata="";
        var dot="@";
        for(var i=0;i<=keywords.length-1;i++)
        {
            var keyvalue=$(keywords[i]).val();
            keywords[i].oninput=function()
            {
                AddKeyWords();
            }
            if(keyvalue.length!=0)
            {
                keywordata+=$(keywords[i]).val()+dot;
            }
            if(keyvalue.length==0)
            { }
        }
        $('.keywords_id').val(keywordata);
        console.log($('.keywords_id').val());
    }
</script>
</body>
</html>