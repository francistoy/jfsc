<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function check()
    {
        if($_POST['username']!="admin")
        {
             return show("用户名不正确",0);
        }
        if($_POST['password']!="huhkadmin")
        {
            return show("密码不正确",0);
        }
        $verify=$_POST['verify'];
        $reverify=$this->check_verify($verify);
        if(!$reverify)
        {
            return show("验证码错误",0);
        }
        session("User",'Admin');
        return show("登录成功",1);
    }
    public function verify()
    {
        $verify=new \Think\Verify();
        $verify->length = 4;
        $verify->fontSize = 14;
        $verify->imageH = 34;
        $verify->userImgBg = true;
        $verify->useNoise = false;
        $verify->entry();
    }
    public function check_verify($checkverify)
    {
        $verify=new \Think\Verify();
        return $verify->check($checkverify);
    }
    public function loginout()
    {
        session('User',null);
        $this->redirect('Home/index/index');
    }

}