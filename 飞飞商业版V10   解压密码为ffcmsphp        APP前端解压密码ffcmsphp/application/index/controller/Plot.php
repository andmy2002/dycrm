<?php
namespace app\index\controller;
use think\Controller;

class Plot extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->label_fetch('plot/index');
    }

    public function search()
    {
        $param = ffcms_param_url();
        $this->check_search($param);
        $this->assign('param',$param);
        return $this->label_fetch('plot/search');
    }

    public function ajax_search()
    {
        $param = ffcms_param_url();
        $this->check_search($param);
        $this->assign('param',$param);
        return $this->label_fetch('plot/ajax_search');
    }

    public function detail()
    {
        $info = $this->label_vod_detail();
        return $this->label_fetch('plot/detail');
    }

    public function ajax_detail()
    {
        $info = $this->label_vod_detail();
        return $this->label_fetch('plot/ajax_detail');
    }

    public function rss()
    {
        $info = $this->label_vod_detail();
        return $this->label_fetch('plot/rss');
    }

}
