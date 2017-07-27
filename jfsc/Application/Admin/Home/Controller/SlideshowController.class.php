<?php
namespace Home\Controller;
use Think\Controller;
class SlideshowController extends CommonController
 {
    public function index()
    {
        $slide=D('Slideshow')->getslide();
        $this->assign("slide",$slide);
        $this->display();
    }
    public function add()
    {
        $this->display();
    }
    public function save()
    {
        if($_POST)
     {
        if(!$_POST['SlideImg']||!isset($_POST['SlideImg']))
        {
            return show('请添加图片',0);
        }
        if(!$_POST['linkaddress']||!isset($_POST['linkaddress']))
        {
            return show('请添加链接地址',0);
        }
        $res=D('Slideshow')->insert($_POST);
        if($res)
        {
            return show('添加成功',1);
        }
        else
        {
            return show('图片失败',0);
        }
     }
     else
       {
        return show('没有提交的数据',0);
       }
    }
    public function edit()
    {  if($_REQUEST)
      {
        $slideId=$_REQUEST['id'];
        $slide=D('Slideshow')->getSlideById($slideId);
        if($slide)
        {
            $this->assign('slide',$slide);
        }
        else
        {
            return show('找不到此轮播图片信息信息',0);
        }
     }
        $this->display();
    }
    public function change()
    {
        if ($_POST)
        {
            if (!$_POST['SlideImg'] || !isset($_POST['SlideImg']))
            {
                return show('请添加图片',0);
            }
            if (!$_POST['linkaddress'] || !isset($_POST['linkaddress']))
            {
                return show('请添加链接地址',0);
            }
            $res = D('Slideshow')->SaveSlideBySliId($_POST['slide_id'], $_POST);
            if ($res)
            {
                return show('保存成功',1);
            }
            else
            {
                return show('保存失败',0);
            }
        }
    }
    public function delete()
    {
        if($_POST)
        {
            $data=array();
            $data['id']=$_POST['id'];
            $data['status']=$_POST['status'];
            $res=D('Slideshow')->updateSlideById($data['id'],$data['status']);
            if($res)
            {
                return show('删除成功',1);
            }
        }
        else
        {
            return show("删除失败",0);
        }
    }
 }