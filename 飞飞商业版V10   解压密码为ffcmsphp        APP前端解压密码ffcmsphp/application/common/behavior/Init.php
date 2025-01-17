<?php
namespace app\common\behavior;

use think\Cache;
use think\Exception;

class Init
{
    public function run(&$params)
    {
        $config = config('feifeicms');
        $domain = config('domain');

        $isMobile = 0;
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        $uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|meizu|cldc|midp|iphone|wap|mobile|android)/i";
        if((preg_match($uachar, $ua))) {
            $isMobile = 1;
        }

        $isDomain=0;
        if( is_array($domain) && !empty($domain[$_SERVER['HTTP_HOST']])){
            $config['site'] = array_merge($config['site'],$domain[$_SERVER['HTTP_HOST']]);
            $isDomain=1;
            if(empty($config['site']['mob_Tpl_dir']) || $config['site']['mob_Tpl_dir'] =='no'){
                $config['site']['mob_Tpl_dir'] = $config['site']['Tpl_dir'];
            }
            $config['site']['site_wapurl'] = $config['site']['site_url'];
            $config['site']['mob_html_dir'] = $config['site']['html_dir'];
            $config['site']['mob_ads_dir'] = $config['site']['ads_dir'];
        }
        $TMP_ISWAP = 0;
        $TMP_TEMPLATEDIR = $config['site']['Tpl_dir'];
        $TMP_HTMLDIR = $config['site']['html_dir'];
        $TMP_ADSDIR = $config['site']['ads_dir'];

        if($isMobile){
            if( ($config['site']['mob_status']==2 ) || ($config['site']['mob_status']==1 && $_SERVER['HTTP_HOST']==$config['site']['site_wapurl']) || ($config['site']['mob_status']==1 && $isDomain) ) {
                $TMP_ISWAP = 1;
                $TMP_TEMPLATEDIR = $config['site']['mob_Tpl_dir'];
                $TMP_HTMLDIR = $config['site']['mob_html_dir'];
                $TMP_ADSDIR = $config['site']['mob_ads_dir'];
            }
        }

        define('FFCMS_URL','http://www.feifeicms.top/');
        define('FFCMS_NAME','飞飞CMS');
        define('FFCMS_PATH', $config['site']['install_dir'] .'');
        define('FFCMS_MOB', $TMP_ISWAP);
        define('FFCMS_ROOT_TEMPLATE', ROOT_PATH .'Tpl/'.$TMP_TEMPLATEDIR.'/'. $TMP_HTMLDIR .'/');
        define('FFCMS_PATH_TEMPLATE', FFCMS_PATH.'Tpl/'.$TMP_TEMPLATEDIR.'/');
        define('FFCMS_PATH_TPL', FFCMS_PATH_TEMPLATE. $TMP_HTMLDIR  .'/');
        define('FFCMS_PATH_ADS', FFCMS_PATH_TEMPLATE. $TMP_ADSDIR  .'/');
        define('FFCMS_PAGE_SP', $config['path']['page_sp'] .'');
        define('FFCMS_PLAYER_SORT', $config['app']['player_sort'] );
        //define('ADDON_PATH', ROOT_PATH . 'addons' . DS);

        $GLOBALS['http_type'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';

        if(ENTRANCE=='index'){
            config('dispatch_success_tmpl','public/jump');
            config('dispatch_error_tmpl','public/jump');
        }

        config('Tpl.view_path', 'Tpl/' . $TMP_TEMPLATEDIR .'/' . $TMP_HTMLDIR .'/');

        if(ENTRANCE=='admin'){
            if(!file_exists('./Tpl/' . $TMP_TEMPLATEDIR .'/' . $TMP_HTMLDIR .'/')){
                config('Tpl.view_path','');
            }
        }

        config('url_route_on',$config['rewrite']['route_status']);
        if(empty($config['app']['pathinfo_depr'])){
            $config['app']['pathinfo_depr'] = '/';
        }
        config('pathinfo_depr',$config['app']['pathinfo_depr']);

        if(intval($config['app']['cache_time'])<1){
            $config['app']['cache_time'] = 60;
        }
        config('cache.expire', $config['app']['cache_time'] );


        if(!in_array($config['app']['cache_type'],['file','memcache','memcached','redis'])){
            $config['app']['cache_type'] = 'file';
        }

        config('cache.type', $config['app']['cache_type']);
        config('cache.timeout',1000);
        config('cache.host',$config['app']['cache_host']);
        config('cache.port',$config['app']['cache_port']);
        config('cache.username',$config['app']['cache_username']);
        config('cache.password',$config['app']['cache_password']);
        if($config['app']['cache_type'] != 'file'){
            $opt = config('cache');
            Cache::$handler = null;
        }

        $GLOBALS['config'] = $config;
    }
}