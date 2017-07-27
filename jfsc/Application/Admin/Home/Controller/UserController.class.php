<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController
{
    public function index()
    {
        $data=array();
        $data['user_status']=array(neq,-1);
        $pagesize=1;
        $res=$this->selectPage("user",$data,"user_id desc",$pagesize);
        $pageres=$this->requestPage("user",$data,$pagesize);
        if($username=$_GET['user_name'])
        {
            $data=array();
            $data['user_name']=array('like','%'.$username."%");
            $res=$this->selectPage("user",$data,"user_id desc",$pagesize);
            $pageres=$this->requestPage("user",$data,$pagesize);
            $this->assign('user_name',$username);
        }
        $this->assign('pageres',$pageres);
        $this->assign('useres',$res);
        $this->display();
    }
    public function reset()
    {
        //会员状态为-1:删除;0:锁定;1:正常
        if($id=$_POST['id'])
        {
            $data=array();
            $data['user_status']=$_POST['status'];
            $usersetres=D('User')->delUser($id,$data);
            if($usersetres)
            {
                return show("状态更改成功",1);
            }
            else
            {
                return show("状态更改失败",0);
            }
        }
    }
    //删除用户
    public function setstatus()
    {
        $data=array();
        $id=$_POST['id'];
        $data['user_status']=-1;
        $usersetres=D('User')->delUser($id,$data);
        return show("删除成功",1);
    }
}
