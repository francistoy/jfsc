<?php
namespace Home\Model;
use Think\Model;
class ProductModel extends Model
{
    private $_db;
    public function __construct()
    {
          parent::__construct();
          $this->_db=M('Prd');
    }
    public function getProductByProname($proname)
    {
        $res =$this->_db->where('p_Name="'.$proname.'"')->find();
        return $res;
    }
    public function delProductById($id)
    {
        $data['status']=-1;
        $res =$this->_db->where('prd_id='.$id)->save($data);
        return $res;
    }
    public function getProductById($id)
    {
        $res = $this->_db->where('prd_id='.$id)->find();
        return $res;
    }
    public function insert($data=array())
    {
        return $this->_db->add($data);

    }
    public function saveProById($id,$data)
    {
        $res=$this->_db->where("prd_id=".$id)->save($data);
        return $res;
    }
}

