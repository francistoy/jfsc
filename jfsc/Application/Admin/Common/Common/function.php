<?php
function show($message="",$status="",$data="")
{
    $result =array(
        "message"=>$message,
        "status"=>$status,
        'data'=>$data
    );
    exit(json_encode($result));
}
function showKind($status=0,$data="")
{
    header('Content-type:application/json;charset=utf8');
    if($status==1)
    exit(json_encode(array('error'=>1,'message'=>'上传失败')));
    else
    {
        exit(json_encode(array('error'=>0,'url'=>$data)));
    }
}
function zhuangtai($status)
{
    switch($status)
    {
        case 2:
            return "等待发货";break;
        case 3:
            return "等待收货";break;
        case 4:
            return "订单完成";break;
    }
}
function status($status)
{
    switch($status)
    {
        case 0:
            return "锁定";break;
        case 1:
            return "正常";break;
    }
}