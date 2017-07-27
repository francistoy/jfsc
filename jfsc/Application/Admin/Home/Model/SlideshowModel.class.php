<?php
namespace Home\Model;
use Think\Model;

class SlideshowModel extends Model
{
    private $_db = '';

    public function __construct()
    {
        $this->_db = M('slide');
    }
    public function insert($data)
    {
        if(!$data)
        {
            return 0;
        }
        $data['status']=1;
        return $this->_db->add($data);
    }
    public function getslide()
    {
        $data=array();
        $data['status']=array('neq',-1);
        $slide=$this->_db->where($data)->select();
        return $slide;
    }
    public function  getSlideById($slideId)
    {
        if(!is_numeric($slideId)||!$slideId)
        {
            throw_exception('ID不合法');
        }
        return $this->_db->where('slide_id='.$slideId)->find();
    }
    public function updateSlideById($slideId)
    {
        return $this->_db->where('slide_id='.$slideId)->delete();

    }
    public function SaveSlideBySliId($slideId,$data=array())
    {
        $res=$this->_db->where('slide_id="'.$slideId.'"')->save($data);
        return $res;
    }
}