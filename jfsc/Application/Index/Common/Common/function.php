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
function status($status)
{
    switch ($status) {
        case 2:
            return "等待发货";
            break;
        case 3:
            return "正在发货";
            break;
        case 4:
            return "订单完成";
            break;
    }
}
    function get_ip()
    {
        if (isset($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], "unknown"))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], "unknown"))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else if (isset($_SERVER['REMOTE_ADDR']) && isset($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else $ip = "";
        return ($ip);
    }
    function taobaoIP($clientIP)
    {
        $taobaoIP = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$clientIP;
        $IPinfo = json_decode(file_get_contents($taobaoIP));
        $province = $IPinfo->data->region;
        $city = $IPinfo->data->city;
        $data = $province.$city;
        return $data;
    }
