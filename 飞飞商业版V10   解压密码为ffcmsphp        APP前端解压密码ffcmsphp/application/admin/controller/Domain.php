<?php
namespace app\admin\controller;
use think\Db;
use think\Config;
use think\Cache;

class Domain extends Base
{

    public function index()
    {
        if (Request()->isPost()) {
            $config = input();

            $tmp = $config['domain'];
            $domain=[];



            foreach ($tmp['site_url'] as $k=>$v){

                $domain[$v] =[
                   'site_url'=>$v,
                    'site_name'=>$tmp['site_name'][$k],
                    'site_keywords'=>$tmp['site_keywords'][$k],
                    'site_description'=>$tmp['site_description'][$k],
                    'Tpl_dir'=>$tmp['Tpl_dir'][$k],
                    'html_dir'=>$tmp['html_dir'][$k],
                    'ads_dir'=>$tmp['ads_dir'][$k],
                ];

            }


            $res = ffcms_arr2file(APP_PATH . 'extra/domain.php', $domain);
            if ($res === false) {
                return $this->error('保存失败，请重试!');
            }
            return $this->success('保存成功!');
        }


        $Tpls = glob('./Tpl' . '/*', GLOB_ONLYDIR);
        foreach ($Tpls as $k => &$v) {
            $v = str_replace('./Tpl/', '', $v);
        }
        $this->assign('Tpls', $Tpls);

        $config = config('domain');
        $this->assign('domain_list', $config);
        $this->assign('title', '站群参数配置');
        return $this->fetch('admin@domain/index');
    }

    public function del()
    {
        $param = input();
        if(!empty($param['ids'])){
            $list = config('domain');
            unset($list[$param['ids']]);
            $res = ffcms_arr2file( APP_PATH .'extra/domain.php', $list);
            if($res===false){
                return $this->error('删除失败，请重试!');
            }
        }
        return $this->success('删除成功');
    }

    public function export()
    {
        $list = config('domain');
        $html = '';
        foreach($list as $k=>$v){
            $html .= $v['site_url'].'$'.$v['site_name'].'$'.$v['site_keywords'].'$'.$v['site_description'].'$'.$v['Tpl_dir'].'$'.$v['html_dir'].'$'.$v['ads_dir']."\n";
        }

        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=ffcms_domains.txt");
        echo $html;
    }

    public function import()
    {
        $file = $this->request->file('file');
        $info = $file->rule('uniqid')->validate(['size' => 10240000, 'ext' => 'txt']);
        if ($info) {
            $data = file_get_contents($info->getpathName());
            @unlink($info->getpathName());
            if($data){
                $list = explode(chr(10),$data);

                $domain =[];

                foreach($list as $k=>$v){
                    if(!empty($v)) {
                        $one = explode('$', $v);
                        $domain[$one[0]] = [
                            'site_url' => $one[0],
                            'site_name' => $one[1],
                            'site_keywords' => $one[2],
                            'site_description' => $one[3],
                            'Tpl_dir' => $one[4],
                            'html_dir' => $one[5],
                            'ads_dir'=>$one[6],
                        ];
                    }
                }

                $res = ffcms_arr2file( APP_PATH .'extra/domain.php', $domain);
                if($res===false){
                    return $this->error('保存配置文件失败，请重试!');
                }
            }
            return $this->success('导入失败，请检查文件格式');
        }
        else{
            return $this->error($file->getError());
        }
    }
}
