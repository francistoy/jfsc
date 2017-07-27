<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController
{
    public function Orderindex()
    {

        //订单状态有3种，不等于1：所有订单。2：待发货订单。3：已发货订单。4：已完成订单。
        //当状态为0时，代表订单已被删除
        if($status=$_GET['status'])
        {
            $data=array();
            $data['order_status']=array(eq,$status);
            if($status==1)
            {
                $data['order_status']=array(neq,$status);
            }
                $pagesize=5;
                $resord=$this->selectPage("record",$data,"order_id desc",$pagesize);
                $pageres=$this->requestPage("record",$data,$pagesize);
        }
        if($_GET['order_num'])
        {
            $data['order_num']=array('like','%'.$_GET['order_num'].'%');
            $resord = $this->selectPage("record",$data, "order_id desc", $pagesize);
            $pageres = $this->requestPage("record",$data, $pagesize);
            $this->assign('order_num',$_GET['order_num']);
        }
        $this->assign('resord',$resord);
        $this->assign('pageres',$pageres);
        $this->assign('status',$status);
        $this->display();
    }
    public function edit()
    {

        if($order_num=$_GET['order_num'])
        {
            $data=array();
            $orderes=M('record')->where('order_num="'.$order_num.'"')->find();
            $data['order_num']=$order_num;
            $data['order_time']=$orderes['order_time'];
            $data['order_prdnum']=$orderes['order_prdnum'];
            $proname=$orderes['order_proname'];
            $prores=M('prd')->where('p_Name="'.$proname.'"')->find();
            $data['pImg']=$prores['pImg'];
            $uid=$orderes['order_uid'];
            //根据该商品的uid去用户表中获取信息
            $useres=M('user')->where("user_id=".$uid)->find();
            $data['user_name']=$useres['user_name'];
            $data['user_phone']=$useres['user_phone'];
            $data['user_place']=$useres['user_place'];
            //根据商品名称查询商品
            $this->assign("data",$data);
        }
        $this->display();
    }
}