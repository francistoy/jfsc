<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController
{
    public function index()
    {

        $this->display();
    }
    public function left()
    {
        $type=D('Protype')->showtype();
        $this->assign("type",$type);
        $this->display();
    }
}