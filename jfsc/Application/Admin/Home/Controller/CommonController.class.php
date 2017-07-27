<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->getlogin();
    }
    public function getlogin()
    {
        if(!session('User'))
        {
            $this->redirect('/Home/Login/index');
        }
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
}