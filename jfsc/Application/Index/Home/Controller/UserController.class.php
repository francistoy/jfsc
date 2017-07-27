<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
    public function save()
    {
        if($_POST)
        {   $data=array();
            if($_POST['user_password'])
            {
                if (strlen($_POST['user_password']) > 32) {
                    return show('密码位数不得超过32位',0 );
                }
                if ($_POST['user_password'] != $_POST['user_repassword']) {
                    return show('两次输入的密码不一致',0);
                }
                $data['user_password']=Md5($_POST['user_password']);
            }
            if(!$_POST['user_name']||!isset($_POST['user_name']))
            {  return show('请输入姓名',0);}
            $data['user_name']=$_POST['user_name'];
            if(!isset($_POST['user_sex']))
            {  return show('选择性别',0);}
            $data['user_sex']=$_POST['user_sex'];
            if(!$_POST['user_place']||!isset($_POST['user_place']))
            {  return show('请填写地址',0);}
            $data['user_place']=$_POST['user_place'];
            if(!$_POST['user_email']||!isset($_POST['user_email']))
            {  return show('请填写邮箱地址',0);}
            else
            {
                $pattern="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
                if(!preg_match($pattern,$_POST['user_email'])){
                    return  show('邮箱验证不通过',0);
                }
            }
            $data['user_email']=$_POST['user_email'];
            if(!$_POST['user_phone']||!isset($_POST['user_phone']))
            {  return show('请填写电话号码',0);}
            else
            {
                $pattern='/^1[3458][0-9]{9}$/';
                if(!preg_match($pattern,$_POST['user_phone'])){
                    return  show('手机格式不正确',0);
                }
            }
            $data['user_phone']=$_POST['user_phone'];
            $_SESSION['Hukcuser']['user_name']=$_POST['user_name'];
            $res=M('user')->where("user_id=".session('Hukcuser.user_id'))->save($data);
            $user=M('user')->where("user_id=".session('Hukcuser.user_id'))->find();
            session('Hukcuser',$user);
            if($res)
            {

                return show('保存成功',1);
            }
            else
            {
                return show('未进行数据更改',0);
            }
        }
    }
}