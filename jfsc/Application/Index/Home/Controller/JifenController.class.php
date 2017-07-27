<?php
namespace Home\Controller;
use Think\Controller;
class jifenController extends IndexController
{
    public function jfdetail()
    {
        //到时搜索积分的条件需要加上jf_uid
        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        $data=array();
        $mata=array();
        if($_GET['user_id'])
        {
            $mata['jf_uid']=$_GET['user_id'];
        }
        $res=M('type')->where("type_pid=0")->order("type_sort asc")->select();
        $type=$this->CommonType($res);
        $producti=M('prd')->where($data)->order("clicknum desc")->limit(8)->select();
        $pagesize=6;
        $detailres=$this->selectPage("detail",$mata,"jf_id desc",$pagesize);
        $pageres=$this->requestPage("detail",$mata,$pagesize);
        $this->assign('detailres',$detailres);
        $this->assign('producti',$producti);
        $this->assign("pageres",$pageres);
        $this->assign('type',$type);
        $this->assign("user_id",$_GET['user_id']);
        $this->display();
    }
    public function jfrecord()
    {
        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        $data=array();
        $res=M('type')->where("type_pid=0")->order("type_sort asc")->select();
        $type=$this->CommonType($res);
        $producti=M('prd')->where($data)->order("clicknum desc")->limit(8)->select();
        $pagesize=6;
        $mata=array();
        if($_GET['user_id'])
        {
            $mata['order_uid']=$_GET['user_id'];
        }
        $mata['order_status']=array(neq,-1);
        $orderes=$this->selectPage("record",$mata,"order_id desc",$pagesize);
        $pageres=$this->requestPage("record",$mata,$pagesize);
        $this->assign('orderes',$orderes);
        $this->assign('producti',$producti);
        $this->assign("pageres",$pageres);
        $this->assign('type',$type);
        $this->assign("user_id",$_GET['user_id']);
        $this->display();
    }
    public function handleord()
    {
        if($_POST)
        {
            $status=$_GET['status'];
            $data=array();
            $data['order_status']=$status;
            $order_num=$_POST['order_num'];
            $res=M('record')->where('order_num='.$order_num)->save($data);
            $aja=array();
            $aja['status']=1;
            $this->ajaxReturn($aja);
        }
    }
    public function orderdetail()
    {
        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        $data=array();
        $res=M('type')->where("type_pid=0")->select();
        $type=$this->CommonType($res);
        $producti=M('prd')->where($data)->order("clicknum desc")->limit(8)->select();
        $this->assign('producti',$producti);
        $this->assign('type',$type);
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