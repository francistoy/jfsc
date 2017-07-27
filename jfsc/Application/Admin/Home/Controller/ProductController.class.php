<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends ProtypeController
{
    public function profenlei()
    {
        if($cid=$_GET['id'])
        {
            $res=D('Protype')->getPidFromId($cid);
            $pagesize=5;
            $respro=$this->selectPage("prd","cid=".$cid.' '."AND status=1","prd_id desc",$pagesize);
            $pageres=$this->requestPage("prd","cid=".$cid.' '."AND status=1",$pagesize);
            $this->assign('id',$cid);
        }
        //根据select的分类名称查询
        if($type=$_GET['type'])
        {
            $typepid = D('Protype')->getNameFromType($type);
            $id = $_GET['cid'];
            $res = D('Protype')->getPidFromId($id);
            $pagesize = 5;
            if ($typepid['type_pid'] == 0)
            {
                $respro = $this->selectPage("prd", "cid=".$id.' '."AND status=1", "prd_id desc", $pagesize);
                $pageres = $this->requestPage("prd", "cid=".$id.' '."AND status=1", $pagesize);
            }
            else
            {
                $respro = $this->selectPage("prd", 'type="'.$type .'"'.' '."AND status=1", "prd_id desc", $pagesize);
                $pageres = $this->requestPage("prd", 'type="'.$type .'"'.' '."AND status=1", $pagesize);
            }
            //模糊查询
            $this->assign('type',$type);
            $this->assign('id',$id);
        }
        if($_GET['p_Name'])
        {
            $cid=$_GET['cid'];
            $res=D('Protype')->getPidFromId($cid);
            $pagesize=5;
            $data['status']=array(eq,1);
            $data['type']=$_GET['type'];
            $data['p_Name']=array('like',"%".$_GET['p_Name']."%");
            $respro = $this->selectPage("prd",$data, "prd_id desc", $pagesize);
            $pageres = $this->requestPage("prd",$data, $pagesize);
            $this->assign('p_Name',$_GET['p_Name']);
        }
        $this->assign('xuanzhong',$typepid['type_id']);
        $this->assign('ptype',$res['ptype'][0]);
        $this->assign('typedata',$res['result']);
        $this->assign('respro',$respro);
        $this->assign('pageres',$pageres);
        $this->display();
    }
    //编辑页面
    public function edit()
    {
        $res=D('Protype')->showtype();
        $resi=$this->CommonType($res);
        if($id=$_GET['prd_id'])
        {
            $product=D('Product')->getProductById($id);
            if($product)
            {

                $keyword_arr=array();
                $keywordata=explode("@",$product['keywords_id']);
                $keywordate=array_filter($keywordata);
                for($i=0;$i<=count($keywordate)-1;$i++)
                {
                    $keywordname=M("prdkeyword")->where("prdkeyword_id=".$keywordate[$i])->find();
                    $keyword_arr[]=$keywordname['prdkeyword_name'];

                }
                $this->assign('product',$product);
                $this->assign('keyword_arr',$keyword_arr);
            }
        }
        $this->assign("typei",$resi);
        $this->display();
    }
    //新增页面
    public function add()
    {
        $res=D('Protype')->showtype();
        $resi=$this->CommonType($res);
        $this->assign("typei",$resi);
        $this->display();
    }
    public function del()
    {
        if($id=$_POST['id'])
        {
            $res=D('Product')->delProductById($id);
            if($res)
            {
                return show("删除成功",1);
            }
        }
    }
    //新增商品
    public function productAdd()
    {
        $data=$this->commonAddEdit();
        $res = D('Product')->getProductByProname($_POST['p_Name']);
        if ($res && $res['status'] != -1)
        {
            return show('商品已经存在',0 );
        }
        $data['status'] = 1;
        $data['keywords_id']=$this->commondokeyword();
        $res = D('Product')->insert($data);
        if ($res)
        {
            return show('新增成功',1 );
        }
    }
    //编辑页面
    public function proedit()
    {
        $data=$this->commonAddEdit();

        $data['keywords_id']=$this->commondokeyword();
        $res=D('Product')->saveProById($_POST['prd_id'],$data);
        if($res)
        {
            return show("保存成功",1);
        }
        else
        {
            return show("保存失败",0);
        }
    }
    public function commonAddEdit()
    {
        //开始
        if ($_POST)
        {
            if (!$_POST['p_Name'] || !isset($_POST['p_Name']))
            {
                return show('请输入商品名称',0);
            }
            if (!$_POST['price'] || !isset($_POST['price']))
            {
                return show('请输入商品价格',0);
            }
            if (!is_numeric($_POST['price']))
            {
                return show('商品价格请输入数字',0);
            }
            if (!$_POST['pNum'] || !isset($_POST['pNum']))
            {
                return show('请输入商品数量',0);
            }
            if (!is_numeric($_POST['pNum']))
            {
                return show('商品数量请输入数字',0);
            }
            if (!$_POST['pImg'] || !isset($_POST['pImg']))
            {
                return show('请输入商品图片',0);
            }
            if (!$_POST['type'] || !isset($_POST['type']))
            {
                return show('请选择商品二级分类',0);
            }
            if (!$_POST['pDesc'] || !isset($_POST['pDesc']))
            {
                return show('请输入商品简介',0);
            }
            if (!$_POST['keywords_id'] || !isset($_POST['keywords_id']))
            {
                return show('请输入商品关键词',0);
            }
            $data = $_POST;
            //通过分类的Id,去获取对应的分类名称与及它的父id
            $tid=$data['type'];
            $getypemess=D('Protype')->getMessFromId($tid);
            $typename=$getypemess[0]['type_name'];
            $typecid=$getypemess[0]['type_pid'];
            $data['type']=$typename;
            $data['cid']=$typecid;
        }
        $nowtime=time();
        $data['creattime'] =date('Y-m-d H-i-s',$nowtime);
        $data['pDesc'] = htmlspecialchars($data['pDesc']);
        //结束。(此段代码为商品和增加共用)
        return $data;
    }
    public function commondokeyword()
    {
        $keywords=$_POST['keywords_id'];
        $keywordata=explode("@",$keywords);
        $newkeyword=array_filter($keywordata);
        $keywords_id="";
        for($i=0;$i<=count($newkeyword)-1;$i++)
        {
            $wordres=array();
            $wordres['prdkeyword_name']=$newkeyword[$i];
            $chaxun=M("prdkeyword")->where($wordres)->find();
            if($chaxun)
            {
                $keywords_id.=$chaxun['prdkeyword_id']."@";
            }
            else
            {
                M('prdkeyword')->add($wordres);
                $chaxun= M("prdkeyword")->where($wordres)->find();
                $keywords_id.=$chaxun['prdkeyword_id']."@";
            }
        }
        return $keywords_id;
    }
}