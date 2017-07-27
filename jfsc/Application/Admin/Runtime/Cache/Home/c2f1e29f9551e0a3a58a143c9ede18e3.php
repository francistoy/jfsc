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
                        <i class="fa fa-dashboard"></i>  <a href="#">商品分类</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <form action="/jfsc/admin.php/Home/Product/profenlei?" method="get">
        <div class="input-group col-md-5" style="padding-left: 15px;">
            <span class="input-group-addon">类型</span>
                <select class="form-control" name="type">
                    <option value='<?php echo ($ptype["type_name"]); ?>' >-----<?php echo ($ptype["type_name"]); ?>-----</option>
                    <?php if(is_array($typedata)): foreach($typedata as $key=>$select): ?><option value='<?php echo ($select["type_name"]); ?>' <?php if($select[type_id] == $xuanzhong): ?>selected="selected"<?php endif; ?>> <?php echo ($select["type_name"]); ?></option><?php endforeach; endif; ?>
                </select>
              <span class="input-group-btn">
                  <button  type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
        </div>
        <div class="col-md-3" style="display: inline-block;">
            <div class="input-group" >
                <input class="form-control" name="p_Name" type="text" value="" placeholder="搜索" />
                <span class="input-group-btn">
                  <button  type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
            </div>
        </div>
                <input type="hidden" value="<?php echo ($id); ?>" name="cid" class="getcid">
            </form>
            </div>
        <div style="display: inline-block;">
            <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-plus" ></span>添加 </button>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3></h3>
                <div class="table-responsive">
                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th style="text-align: center;">ID号</th>
                                <th style="text-align: center;">商品名称</th>
                                <th style="text-align: center;">价格</th>
                                <th style="text-align: center;">数量</th>
                                <th style="text-align: center;">浏览次数</th>
                                <th style="text-align: center;">所属分类</th>
                                <th style="text-align: center;">上架时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($respro)): foreach($respro as $key=>$vo): ?><tr style="text-align: center;">
                                    <td><?php echo ($vo["prd_id"]); ?></td>
                                    <td><?php echo ($vo["p_Name"]); ?></td>
                                    <td><?php echo ($vo["price"]); ?></td>
                                    <td><?php echo ($vo["pNum"]); ?></td>
                                    <td><?php echo ($vo["clicknum"]); ?></td>
                                    <td><?php echo ($vo["type"]); ?></td>
                                    <td><?php echo ($vo["creattime"]); ?></td>
                                    <td>
                                        <a href="javascript:void(0)" attr-id="<?php echo ($vo["prd_id"]); ?>" class="pro-search" onclick="javascript:
                                        window.location.href='/jfsc/admin.php?c=Product&a=edit&prd_id=<?php echo ($vo["prd_id"]); ?>';">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                                        <a href="javascript:void(0)" attr-id="<?php echo ($vo["prd_id"]); ?>" class="jfsc-delete" >
                                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                                    </td>
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
                                    <a href="/jfsc/admin.php?c=Product&p_Name=<?php echo ($p_Name); ?>&a=profenlei&type=<?php echo ($type); ?>&cid=<?php echo ($id); ?>&id=<?php echo ($id); ?>&page=<?php echo ($pageres["totalPage"]); ?>" style="float:right;">尾页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Product&p_Name=<?php echo ($p_Name); ?>&a=profenlei&type=<?php echo ($type); ?>&cid=<?php echo ($id); ?>&id=<?php echo ($id); ?>&page=<?php echo ($pageres["pageNext"]); ?>" style="float:right;">下一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Product&p_Name=<?php echo ($p_Name); ?>&a=profenlei&type=<?php echo ($type); ?>&cid=<?php echo ($id); ?>&id=<?php echo ($id); ?>&page=<?php echo ($pageres["pagePrev"]); ?>" style="float:right;">上一页</a>&nbsp;&nbsp;
                                    <a href="/jfsc/admin.php?c=Product&p_Name=<?php echo ($p_Name); ?>&a=profenlei&type=<?php echo ($type); ?>&cid=<?php echo ($id); ?>&id=<?php echo ($id); ?>&page=1" style="float:right;" >第一页</a>&nbsp;&nbsp;
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
<input type="hidden" class="getypename" value="<?php echo ($type); ?>"/>
<input type="hidden" class="p_Name" value="<?php echo ($p_Name); ?>"/>
<script>

    var SCOPE = {
        'add_url' : '/jfsc/admin.php?c=product&a=add',
        'yeshu_url':'/jfsc/admin.php?c=product&a=profenlei',
        'delete_url':'/jfsc/admin.php?c=product&a=del',
        'jump_url':'',
    }

</script>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Js/dialog/layer.js"></script>
<script src="/jfsc/Public/Js/dialog.js"></script>
<script src="/jfsc/Public/Admin/js/common.js"></script>
</body>