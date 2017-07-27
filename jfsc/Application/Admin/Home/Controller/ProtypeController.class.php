<?php
namespace Home\Controller;
use Think\Controller;
class ProtypeController extends CommonController
{
     public function index()
     {
         //分页模块开始
         $pagesize=5;
         $res=$this->selectPage("type","type_pid=0","type_sort asc",$pagesize);
         $pageres=$this->requestPage("type","type_pid=0",$pagesize);
         //分页模块结束
         $resi=$this->CommonType($res);
         $this->assign("pageres",$pageres);
         $this->assign("type",$resi);
         $this->display();
     }
     public function add()
     {
         $this->display();
     }
    //添加下级分类页面
    public function addnext()
    {
        $typepid=$_GET['id'];
        $this->assign('typepid',$typepid);
        $this->display();
    }
    public function edit()
    {
        if($id=$_GET['id'])
        {
            $typedb=M('type');
            $res=$typedb->where('type_id='.$id)->select();
            if($res)
            {
                $this->assign("restype",$res[0]);
            }
        }
        $this->display();
    }
    //编辑下级分类页面
    public function editnext()
    {
        if($typeid=$_GET['typeid'])
        {
            $typedb=M('type');
            $res=$typedb->where('type_id="'.$typeid.'"')->select();
            if($res)
            {
                $this->assign("restype",$res[0]);
            }
        }
        $this->display();
    }
    public function del()
    {
        if($id=$_POST['id'])
        {

            $typedb=M('type');
            $res=$typedb->where('type_id='.$id)->delete();
            $typedb->where('type_pid='.$id)->delete();
            return show("删除成功",1);
        }
    }
    public function typeadd()
    {

        if($_POST['typename'])
        {
            $data=array();
            $data['type_name']=$_POST['typename'];
            $iftype=D('Protype')->getNameFromType($data['type_name']);
            if($iftype)
            {
                return show("此分类已经存在",0);
            }
            if($_POST['typepid'])
            {
                $data['type_pid']=$_POST['typepid'];
            }
            else
            {
                $data['type_pid']=0;
            }
            $res=D('Protype')->firstinsert($data);
            if($res)
            {
                return show("分类新增成功",1);
            }
        }
        else
        {
            return show("分类新增失败",0);
        }
    }
    public function typesave()
    {

        if($_POST['typename'])
        {
            $data=array();
            $data['type_name']=$_POST['typename'];
            $iftype=D('Protype')->getNameFromType($data['type_name']);
            if($iftype)
            {
                return show("此分类已经存在",0);
            }
            $id=$_POST['id'];
            $res=D('Protype')->typesave($id,$data);
            return show("分类保存成功",1);
        }
        else
        {
            return show("保存失败",0);
        }
    }
    //获取所有分类的公共函数
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
    public function typesort()
    {
        if($_POST)
        {
            $data=array();
            $data['type_sort']=$_POST["type_sort"];
            $type_id=$_POST["type_id"];
            M('type')->where('type_id='.$type_id)->save($data);
        }
    }
}