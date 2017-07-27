<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/jfsc/Public/Admin/css/bootstrap.css" rel="stylesheet">
    <link href="/jfsc/Public/Admin/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/jfsc/Public/Admin/css/weather-icons.css" rel="stylesheet">
    <link id="beyond-link" href="/jfsc/Public/Admin/css/beyond.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-sidebar" id="sidebar">

    <ul class="nav sidebar-menu">
        <li>
            <a href="/lwxg/admin.php?c=index&a=rightt" target="rightFrame">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">首页  </span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/jfsc/admin.php?c=User" target="rightFrame">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">会员管理  </span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/jfsc/admin.php?c=Protype" target="rightFrame">
                <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">商品分类管理  </span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                商品详情管理                            </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <?php if(is_array($type)): foreach($type as $key=>$vo): ?><a href="/jfsc/admin.php?c=Product&a=profenlei&id=<?php echo ($vo["type_id"]); ?>" target="rightFrame">
                        <span class="menu-text">
                                        <?php echo ($vo["type_name"]); ?>
                        </span>
                        <i class="menu-expand"></i>
                    </a><?php endforeach; endif; ?>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                订单管理                            </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Order/orderindex?status=1');?>" target="rightFrame">
                                    <span class="menu-text">
                                        所有订单                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/orderindex?status=2');?>" target="rightFrame">
                                    <span class="menu-text">
                                        待发货订单                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/orderindex?status=3');?>" target="rightFrame">
                                    <span class="menu-text">
                                        已发货订单                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Order/orderindex?status=4');?>" target="rightFrame">
                                    <span class="menu-text">
                                        已完成订单                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="<?php echo U('Slideshow/index');?>" class="menu-dropdown" target="rightFrame">
                <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                轮播图管理                            </span>
            </a>
        </li>
    </ul>
</div>
<script src="/jfsc/Public/Admin/js/jquery_002.js"></script>
<script src="/jfsc/Public/Admin/js/bootstrap.js"></script>
<script src="/jfsc/Public/Admin/js/jquery.js"></script>
<script src="/jfsc/Public/Admin/js/beyond.js"></script>
</body>
</html>