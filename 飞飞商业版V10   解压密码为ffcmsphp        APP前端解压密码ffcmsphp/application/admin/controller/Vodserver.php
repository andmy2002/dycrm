<?php
namespace app\admin\controller;
use think\Db;

class VodServer extends Base
{
    var $_pre;
    public function __construct()
    {
        parent::__construct();
        $this->_pre = 'vodserver';

    }

    public function index()
    {
        $list = config($this->_pre);
        $this->assign('list',$list);
        $this->assign('title','服务器组管理');
        return $this->fetch('admin@vodserver/index');
    }

    public function info()
    {
        $param = input();
        $list = config($this->_pre);
        if (Request()->isPost()) {
            unset($param['flag']);
            if(is_numeric($param['from'])){
                $param['from'] .='_';
            }

            $list[$param['from']] = $param;
            $sort=[];
            foreach ($list as $k=>&$v){
                $sort[] = $v['sort'];
            }
            array_multisort($sort, SORT_DESC, SORT_FLAG_CASE , $list);
            $res = ffcms_arr2file( APP_PATH .'extra/'.$this->_pre.'.php', $list);
            if($res===false){
                return $this->error('保存失败，请重试!');
            }
            return $this->success('保存成功!');
        }

        $info = $list[$param['id']];
        $this->assign('info',$info);
        $this->assign('title','信息管理');
        return $this->fetch('admin@vodserver/info');
    }

    public function del()
    {
        $param = input();
        $list = config($this->_pre);
        unset($list[$param['ids']]);
        $res = ffcms_arr2file(APP_PATH. 'extra/'.$this->_pre.'.php', $list);
        if($res===false){
            return $this->error('删除失败，请重试!');
        }
        return $this->success('删除成功!');
    }

    public function field()
    {
        $param = input();
        $ids = $param['ids'];
        $col = $param['col'];
        $val = $param['val'];

        if(!empty($ids) && in_array($col,['parse_status','status'])){
            $list = config($this->_pre);

            foreach($list as $k=>&$v){
                $v[$col] = $val;
            }
            $res = ffcms_arr2file(APP_PATH. 'extra/'.$this->_pre.'.php', $list);
            if($res===false){
                return $this->error('保存失败，请重试!');
            }
            return $this->success('保存成功!');
        }
        return $this->error('参数错误');
    }

}
