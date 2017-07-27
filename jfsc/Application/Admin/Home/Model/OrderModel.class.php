<?php
namespace Home\Model;
use Think\Model;
class OrderModel extends Model
{
    private $_db;
    public function __construct()
    {
        $this->_db=M('record');
    }
    public function getRecordByStatus($status="")
    {
        $res=$this->_db->where("order_status=".$status)->select();
        return $res;
    }
}