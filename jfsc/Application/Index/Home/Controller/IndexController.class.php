<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {

        if($_SESSION['Hukcuser'])
        {

            $this->assign("Hukcuser",session("Hukcuser"));
        }
        $data=array();
        $data['status']=array(neq,-1);
        $res=M('type')->where("type_pid=0")->order("type_sort asc")->select();
        $lunbo=M('slide')->where("")->select();
        $product=M('prd')->where($data)->order("prd_id desc")->limit(8)->select();
        $producti=M('prd')->where($data)->order("clicknum desc")->limit(8)->select();
        $type=$this->CommonType($res);
        $this->assign('lunbo',$lunbo);
        $this->assign('type',$type);
        $this->assign('product',$product);
        $this->assign('producti',$producti);
        $this->display();
    }
    public function CommonType($res="")
    {
        $count=count($res);
        if($res)
        {
            for($i=0;$i<=$count;$i++)
            {
                $childate = array();
                $pid = $res[$i]['type_id'];
                $child = M('type');
                $childres = $child->where('type_pid='.$pid)->select();
                if ($childres)
                {
                    foreach ($childres as $k => $v)
                    {
                        $childate[] = $childres[$k];

                    }
                    $res[$i]['child'] = $childate;
                }
            }
        }
        return $res;
    }
    //分页功能，从公司class类中整合过来。
    public function selectPage($tbname="",$where="",$order="",$limit="")
    {
        $db=M($tbname);
        $pageArray=$this->requestPage($tbname,$where,$limit);
        $result=$db->where($where)->order($order)->limit(($pageArray['page']-1)*$limit,$limit)->select();
        return $result;
    }
    public function requestPage($tbname="",$where="",$limit="")
    {
        $db=M($tbname);
        $res=$db->where($where)->count();
        $page=$_GET['page'];
        if(empty($page)||$page<1)
        {
            $page=1;
        }
        if(empty($where))
        {
            $where="";
        }
        //总条数
        $totalRow=$res;
        //总页数
        $totalPage=ceil($totalRow/$limit);
        if($page>$totalPage)
        {
            $page=$totalPage;
        }
        $pagePrev=$page-1;
        $pageNext=$page+1;
        if($page==$totalPage)
        {
            $pageNext=$totalPage;
        }
        $result=array("totalRow"=>$totalRow,"totalPage"=>$totalPage,"pagePrev"=>$pagePrev,"pageNext"=>$pageNext,"page"=>$page);
        return $result;
    }
    public function login()
    {
        if($_POST)
        {
            $data=array();
            $data['user_name']=$_POST['username'];
            $data['user_password']=Md5($_POST['password']);
            $user=M('user')->where($data)->find();
            if(!$user)
            {
                return show("账户或密码不正确",0);
            }
            if($user['user_status']==0)
            {
                return show("该用户已被锁定",0);
            }
            if($user['user_status']==1)
            {
                session('Hukcuser',$user);
                //以下两句是为了获取用户的登录地点
//                $Ipaddress=get_ip();
//                $loginplace=taobaoIp($Ipaddress);
                $userdata=array();
                $userdata['user_logintime']=date("Y-m-d H:i:s",time());
//                $userdata['user_loginplace']=$loginplace;
                M('user')->where("user_id=".$_SESSION['Hukcuser']['user_id'])->save($userdata);
                return show("登录成功",1);
            }
            else
            {
                return show("不存在此用户",0);
            }
        }
    }
   public function loginout()
   {
        $_SESSION['Hukcuser']=null;
        $this->redirect('/jfsc/index.php?');
   }
}