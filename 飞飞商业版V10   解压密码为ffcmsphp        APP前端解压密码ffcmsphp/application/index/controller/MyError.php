<?php
namespace app\index\controller;
use think\Request;

class MyError
{
    public function _empty()
    {
        header("HTTP/1.0 404 Not Found");
        echo  '<script>setTimeout(function (){location.href="'.FFCMS_PATH.'";},'.(2000).');</script>';
        $msg = '页面不存在';
        abort(404,$msg);
        exit;
    }
}