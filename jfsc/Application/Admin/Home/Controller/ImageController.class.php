<?php
namespace Home\Controller;
use Think\Controller;
class ImageController extends Controller
{
    public function ajaxuploadimage()
    {
        $upload = new \Home\Model\UploadImageModel();
        $res = $upload->imageUpload();
        if($res==false)
        {
            return show('上传失败',0,'');
        }
        else
        {
            return show('上传成功',1,$res);
        }

    }
    public function kindupload()
    {
        $upload = D("Home/UploadImage");
        $res = $upload->upload();
        if($res === false)
        {
            return showKind(1,'上传失败');
        }
        return showKind(0,$res);
    }

}

