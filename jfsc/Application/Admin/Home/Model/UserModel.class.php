<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    private $_db;
   public function __construct()
   {
       $this->_db=M('user');
   }
    public function getAllUser()
    {
        $data['user_id']=array(neq,0);
        $res=$this->_db->where($data)->select();
        return $res;
    }
    public function delUser($id="",$data=array())
    {
        $res=$this->_db->where('user_id='.$id)->save($data);
        return $res;
    }
}
