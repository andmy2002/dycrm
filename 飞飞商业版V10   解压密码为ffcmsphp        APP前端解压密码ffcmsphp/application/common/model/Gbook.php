<?php
namespace app\common\model;
use think\Db;

class Gbook extends Base {
    // 设置数据表（不含前缀）
    protected $name = 'gbook';

    // 定义时间戳字段名
    protected $createTime = '';
    protected $updateTime = '';

    // 自动完成
    protected $auto       = [];
    protected $insert     = [];
    protected $update     = [];

    public function getGbookStatusTextAttr($val,$data)
    {
        $arr = [0=>'禁用',1=>'启用'];
        return $arr[$data['gbook_status']];
    }

    public function listData($where,$order,$page=1,$limit=20,$start=0)
    {
        if(!is_array($where)){
            $where = json_decode($where,true);
        }
        $limit_str = ($limit * ($page-1) + $start) .",".$limit;
        $total = $this->where($where)->count();
        $list = Db::name('Gbook')->where($where)->order($order)->limit($limit_str)->select();
        foreach ($list as $k=>$v){
            $list[$k]['user_portrait'] = ffcms_get_user_portrait($v['user_id']);
        }
        return ['code'=>1,'msg'=>'数据列表','page'=>$page,'limit'=>$limit,'total'=>$total,'list'=>$list];
    }

    public function listCacheData($lp)
    {
        if (!is_array($lp)) {
            $lp = json_decode($lp, true);
        }

        $order = $lp['order'];
        $by = $lp['by'];
        $paging = $lp['paging'];
        $start = intval(abs($lp['start']));
        $num = intval(abs($lp['num']));
        $rid = intval(abs($lp['rid']));
        $uid = intval(abs($lp['uid']));
        $half = intval(abs($lp['half']));
        $pageurl = $lp['pageurl'];
        $page = 1;
        $where = [];

        if(empty($num)){
            $num = 20;
        }
        if($start>1){
            $start--;
        }
        if (!in_array($paging, ['yes', 'no'])) {
            $paging = 'no';
        }

        if($paging=='yes') {
            $param = ffcms_param_url();
            if(!empty($param['rid'])){
                $rid = $param['rid'];
            }
            if(!empty($param['by'])){
                $by = $param['by'];
            }
            if(!empty($param['order'])){
                $order = $param['order'];
            }
            if(!empty($param['page'])){
                $page = intval($param['page']);
            }

            foreach($param as $k=>$v){
                if(empty($v)){
                    unset($param[$k]);
                }
            }
            if(empty($pageurl)){
                $pageurl = 'gbook/index';
            }
            $param['page'] = 'PAGELINK';
            $pageurl = ffcms_url($pageurl,$param);
        }

        $where['gbook_status'] = ['eq',1];
        if(!empty($rid)){
            $where['gbook_rid'] = ['eq',$rid];
        }
        if(!empty($uid)){
            $where['user_id'] = ['eq',$uid];
        }
        if(!in_array($by, ['id', 'time','reply_time'])) {
            $by = 'time';
        }
        if(!in_array($order, ['asc', 'desc'])) {
            $order = 'desc';
        }
        $order= 'gbook_'.$by .' ' . $order;


        $cach_name = $GLOBALS['config']['app']['cache_flag']. '_' .md5('gbook_listcache_'.join('&',$where).'_'.$order.'_'.$page.'_'.$num.'_'.$start);

        $res = $this->listData($where,$order,$page,$num,$start);
        $res['pageurl'] = $pageurl;
        $res['half'] = $half;
        return $res;

    }

    public function infoData($where,$field='*')
    {
        if(empty($where) || !is_array($where)){
            return ['code'=>1001,'msg'=>'参数错误'];
        }
        $info = $this->field($field)->where($where)->find();

        if(empty($info)){
            return ['code'=>1002,'msg'=>'获取数据失败'];
        }
        $info = $info->toArray();

        return ['code'=>1,'msg'=>'获取成功','info'=>$info];
    }

    public function saveData($data)
    {
        $validate = \think\Loader::validate('Gbook');
        if(!$validate->check($data)){
            return ['code'=>1001,'msg'=>'参数错误：'.$validate->getError() ];
        }


        if(!empty($data['gbook_id'])){
            if(!empty($data['gbook_reply'])){
                $data['gbook_reply_time'] = time();
            }
            $where=[];
            $where['gbook_id'] = ['eq',$data['gbook_id']];
            $res = $this->allowField(true)->where($where)->update($data);
        }
        else{
            $data['gbook_time'] = time();
            $res = $this->allowField(true)->insert($data);
        }
        if(false === $res){
            return ['code'=>1002,'msg'=>'保存失败：'.$this->getError() ];
        }
        return ['code'=>1,'msg'=>'保存成功'];
    }

    public function delData($where)
    {
        $res = $this->where($where)->delete();
        if($res===false){
            return ['code'=>1001,'msg'=>'删除失败：'.$this->getError() ];
        }
        return ['code'=>1,'msg'=>'删除成功'];
    }

    public function fieldData($where,$col,$val)
    {
        if(!isset($col) || !isset($val)){
            return ['code'=>1001,'msg'=>'参数错误'];
        }

        $data = [];
        $data[$col] = $val;
        $res = $this->allowField(true)->where($where)->update($data);
        if($res===false){
            return ['code'=>1001,'msg'=>'设置失败：'.$this->getError() ];
        }
        return ['code'=>1,'msg'=>'设置成功'];
    }


}