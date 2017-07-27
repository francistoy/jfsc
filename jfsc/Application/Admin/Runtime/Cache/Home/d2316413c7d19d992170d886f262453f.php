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
                        <i class="fa fa-dashboard"></i>  <a href="/jfsc/admin.php?c=protype&a=index">商品分类管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i>
                    </li>
                </ol>
            </div>
        </div>
        <div>
          <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-plus" ></span>添加 </button>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover ">
                        <thead>
                        <tr >
                            <th style="text-align: center;">排序</th>
                            <th style="text-align: center;">ID号</th>
                            <th style="text-align: center;">商品分类</th>
                            <th style="text-align: center;">下级分类</th>
                            <th style="text-align: center;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="text-align: center;">
                                <td><input type="text" size="4" class="sort" attr-id="<?php echo ($vo["type_id"]); ?>" style="text-align: center" value="<?php echo ($vo["type_sort"]); ?>"> </td>
                                <td style="vertical-align:middle;"><?php echo ($vo["type_id"]); ?></td>
                                <td style="vertical-align:middle;"><?php echo ($vo["type_name"]); ?></td>
                                <td style="vertical-align:middle;word-break:break-all;word-wrap:break-all;" width="31%">
                                 <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><a href="/jfsc/admin.php?c=Protype&a=editnext&typeid=<?php echo ($list["type_id"]); ?>"><?php echo ($list["type_name"]); ?></a><span style="margin-left: 2px;margin-right: 2px;font-size: 16px;">|</span><?php endforeach; endif; else: echo "" ;endif; ?>
                                   </td>
                                <td style="vertical-align:middle;" width="36.4%">
                                    <a href="javascript:void(0)" attr-id="<?php echo ($vo["type_id"]); ?>" class="type-next"   attr-message="下级分类" style="margin-right: 50px" onclick="javascript :window.location.href='/jfsc/admin.php?c=Protype&a=addnext&'+'id='+<?php echo ($vo["type_id"]); ?>;">添加下级分类</a>
                                    <a href="javascript:void(0)" attr-id="<?php echo ($vo["type_id"]); ?>" class="type-edit"   attr-message="编辑" style="margin-right: 60px" onclick="javascript :window.location.href='/jfsc/admin.php?c=Protype&a=edit&'+'id='+<?php echo ($vo["type_id"]); ?>;">编辑</a>
                                    <a href="javascript:void(0)" attr-id="<?php echo ($vo["type_id"]); ?>" class="jfsc-delete"   attr-message="删除">删除</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                    <div class="row text-center" style="width: 1125px;">
                        <div class="col-lg-12" style="width: 1125px;">
                            <ul class="pagination" style="float:right;">
                                <li >
                                    <a href="javascript:void(0);" style="float:right;margin-left: 5px;" class="pagego">确定</a>
                                    <div style="padding-left:5px;float:right;padding-top: 5px;"><span style="font-size:14px; ">到:</span>
                                        <input type="text" value="1" class="yeshu" style=" line-height: 30px;height: 25px;width: 40px;font-size: 14px;text-align: center;"/><span style="font-size:14px; ">&nbsp;页</span> </div>
                                        <a href="/jfsc/admin.php?c=Protype&a=index&page=<?php echo ($pageres["totalPage"]); ?>" style="float:right;">尾页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Protype&a=index&page=<?php echo ($pageres["pageNext"]); ?>" style="float:right;">下一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Protype&a=index&page=<?php echo ($pageres["pagePrev"]); ?>" style="float:right;">上一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Protype&a=index&page=1" style="float:right;" >第一页</a>&nbsp;&nbsp;
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
<input type="hidden" class="realname" value="<?php echo ($username); ?>">
<script>

    var SCOPE = {
        'add_url' : '/jfsc/admin.php?c=Protype&a=add',
        'addnext_url':'/jfsc/admin.php?c=Protype&a=addnext',
        'edit_url':'/jfsc/admin.php?c=Protype&a=edit',
        'delete_url':'/jfsc/admin.php?c=Protype&a=del',
        'jump_url' : '/jfsc/admin.php?c=protype&a=index',
        'yeshu_url':'/jfsc/admin.php?c=protype&a=index',
    }
    window.onload=function()
    {
        var sortinput = $(".sort");
        for (var i = 0; i <= sortinput.length - 1; ++i) {
            sortinput[i].oninput = function () {
                var type_id = $(this).attr("attr-id");
                var type_sort = $(this).val();
                var data={'type_id':type_id,'type_sort':type_sort};
                var url="/jfsc/admin.php?c=Protype&a=typesort";
                $.post(url,data,function()
                {});
            }
        }
    }
</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
</body>
</html>