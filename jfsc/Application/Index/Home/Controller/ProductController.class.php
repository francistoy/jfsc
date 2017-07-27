<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends IndexController
{

    public  function  index()
    {
        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        $data=array();
        $data['status']=array(neq,-1);
        $pagesize=5;
        $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
        $pageres=$this->requestPage("prd",$data,$pagesize);
        $typeres=M('type')->where("type_pid=0")->order("type_sort asc")->select();
        $resi=$this->CommonType($typeres);
        if($typename=$_GET['typename'])
        {
            $data['type']=array("like",$typename);
            $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
            $pageres=$this->requestPage("prd",$data,$pagesize);
            $this->assign("typename",$typename);
        }
        //选择积分范围
        if($jifen_fanwei=$_GET['jifen_fanwei'])
        {
            if($jifen_fanwei==1)
            {
                $data['price']=array("between","1,2000");
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            if($jifen_fanwei==2)
            {
                $data['price']=array("between","2001,5000");
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            if($jifen_fanwei==3)
            {
                $data['price']=array("between","5001,10000");
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            if($jifen_fanwei==4)
            {
                $data['price']=array("between","10001,50000");
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            if($jifen_fanwei==5)
            {
                $data['price']=array("between","50000,200000");
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            if($jifen_fanwei==6)
            {
                $data['price']=array("gt",200000);
                $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
                $pageres=$this->requestPage("prd",$data,$pagesize);
            }
            $this->assign("jifen_fanwei",$jifen_fanwei);
        }
        if($p_Name=$_GET['p_Name'])
        {
            $data['p_Name']=array("like","%".$p_Name."%");
            $prores=$this->selectPage("prd",$data,"prd_id desc",$pagesize);
            $pageres=$this->requestPage("prd",$data,$pagesize);
            $this->assign("p_Name",$p_Name);
        }
        $mata=array();
        $mata['status']=array(neq,-1);
        $producti=M('prd')->where($mata)->order("clicknum desc")->limit(8)->select();
        $this->assign('producti',$producti);
        $this->assign("type",$resi);
        $this->assign("pageres",$pageres);
        $this->assign('product',$prores);
        $this->display();
    }
    public function prodetail()
    {
        $typeres=M('type')->where("type_pid=0")->order("type_sort asc")->select();
        $resi=$this->CommonType($typeres);
        $this->assign("type",$resi);
        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        if($prd_id=$_GET['prd_id'])
        {
            $prodetail=M('prd')->where("prd_id=".$prd_id)->find();
            $this->assign("prodetail",$prodetail);
        }
        $data=array();
        $data['status']=array(neq,-1);
        $producti=M('prd')->where($data)->order("clicknum desc")->limit(8)->select();
        $this->assign('producti',$producti);
        $this->display();
    }
    //客户购买商品
    public function jiaoyi()
    {
        if($_POST)
        {
            $user_id=session('Hukcuser.user_id');
            $money=$_POST['money'];
            $prd_id=$_POST['prd_id'];
            $quality=$_POST['quality'];
            $totalmoney=$money*$quality;
            $useres=M("user")->where("user_id=".$user_id)->find();
            $userjifen=$useres['user_jifen'];
                //查看用户积分是否充足
            if(($yue=$userjifen-$totalmoney)>=0)
            {
                $prdres=M('prd')->where("prd_id=".$prd_id)->find();
                $prdata=array();
                //商品数量减去被卖去的数量
                $prdata['pNum']=$prdres['pNum']-$quality;
                //先查看商品剩余数量是否充足
                if( $prdata['pNum']<=0)
                {
                    return show("商品数量不足",0);
                }
                M('prd')->where("prd_id=".$prd_id)->save($prdata);
                $userdata=array();
                //用户现有积分减去消费的积分
                $userdata['user_jifen']=$yue;
                M("user")->where("user_id=".$user_id)->save($userdata);
                $_SESSION['Hukcuser']['user_jifen']=$yue;
                $ordata=array();
                $ordata['order_time']=date("Y-m-d H:i:s");
                $ordata['order_proname']=$prdres['p_Name'];
                $ordata['order_uid']=$user_id;
                $ordata['order_status']=2;
                $ordata['order_prdnum']=$quality;
                $ordata['order_jifen']=$totalmoney;
                $ordata['order_num']=$data['order_num']=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
                M("record")->add($ordata);
                return show("已成功购买",1);
            }
            else
            {
                return show("用户积分不足",0);
            }
        }
    }
    public function Addclick()
    {
        if($_POST)
        {
            $data=array();
            $prd_id=$_POST['prd_id'];
            $prdres=M('prd')->where('prd_id='.$prd_id)->find();
            $clicknum=$prdres['clicknum'];
            $data['clicknum']=$clicknum+1;
            M('prd')->where('prd_id='.$prd_id)->save($data);
        }
    }
    public function searchmessage()
    {
        if($_POST)
        {
            $mata=array();
            $mata['prdkeyword_name']=array(like,"%".$_POST['chaxun']."%");
            $res=M('prdkeyword')->where($mata)->select();
            $keywordname_arr=array();
            foreach($res as $k => $v)
            {
                $keywordname_arr[]=$v['prdkeyword_name'];
            }
            $data=array();
            $data['status']=1;
            $data['chaxun']=$keywordname_arr;
            $this->Ajaxreturn($data);
        }
    }
}