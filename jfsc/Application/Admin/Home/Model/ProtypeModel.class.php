<?php
namespace Home\Model;
use Think\Model;
class ProtypeModel extends Model
{
    private  $_db="";
    public function __construct()
    {
         $this->_db=M('type');
    }
    public function showtype()
    {
        $result=$this->_db->where("type_pid=0")->select();
        return $result;
    }
    public function firstinsert($data=array())
    {
        $result=$this->_db->add($data);
        return $result;
    }
    public function typesave($id="",$data=array())
    {
        $result=$this->_db->where("type_id=".$id)->save($data);
        return $result;
    }
    public function getMessFromId($id="")
    {
        $result=$this->_db->where("type_id=".$id)->select();
        return $result;
    }
    public function getPidFromId($id="")
    {
        $data=array();
        $presult=$this->_db->where("type_id=".$id)->select();
        $result=$this->_db->where("type_pid=".$id)->select();
        $data['ptype']=$presult;
        $data['result']=$result;
        return $data;
    }
    public function getNameFromType($type="")
    {
        return $this->_db->where('type_name="'.$type.'"')->find();
    }
}