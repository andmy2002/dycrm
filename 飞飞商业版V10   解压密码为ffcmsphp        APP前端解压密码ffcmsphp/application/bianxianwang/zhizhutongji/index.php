<?php
use think\Db;

$shezhi = ffcms_read_file( APP_PATH.'data/config/bianxianwangzhizhushezhi.txt');
		$shezhi=json_decode($shezhi,true);
		if($shezhi['kaiqi']==''){
			$shezhi['kaiqi']='1';
		}
		if($shezhi['tongjixiangqing']==''){
			$shezhi['tongjixiangqing']='1';
		}		

if($shezhi['kaiqi']=='1'){

$slhttp = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
$url = $slhttp.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$ua = $_SERVER['HTTP_USER_AGENT'];

$zzxyt = "Baiduspide";
if(strpos($ua,$zzxyt)){
	$name="百度";
	$name1="baidu";
}
$zzxyt = "Googlebot";
if(strpos($ua,$zzxyt)){
	$name="谷歌";
	$name1="guge";
}
$zzxyt = "360Spider";
if(strpos($ua,$zzxyt)){
	$name="360";
	$name1="haosou";
}
$zzxyt = "www.sogou.com";
if(strpos($ua,$zzxyt)){
	$name="搜狗";
	$name1="sougou";
}
$zzxyt = "YisouSpide";
if(strpos($ua,$zzxyt)){
	$name="神马";
	$name1="sm";
}
$zzxyt = "www.bing.com";
if(strpos($ua,$zzxyt)){
	$name="必应";
	$name1="biying";
}
$zzxyt = "YoudaoBot";
if(strpos($ua,$zzxyt)){
	$name="有道";
	$name1="youdao";
}
$zzxyt = "soso.com";
if(strpos($ua,$zzxyt)){
	$name="搜搜";
	$name1="soso";
}
$zzxyt = "soso.com";
if(strpos($ua,$zzxyt)){
	$name="搜搜";
	$name1="soso";
}
$zzxyt = "yahoo.com";
if(strpos($ua,$zzxyt)){
	$name="雅虎";
	$name1="yahu";
}
	// $name="雅虎";
	// $name1="yahu";
if(!empty($name)){
	if($shezhi['tongjixiangqing']=='1'){
		zhizhu($name,$url);
	}
	zhizhu_tj($name1);
}

}

function zhizhu($name,$url)
{
	$urlid = urlid($url);
	if(0 >= $urlid){ return 0;}
	
	$time = date('Ymd',time());
	$time1 = time();
	$ip = getIP();
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$ua = '';
	$state = '';
	
	$data = ['urlid' => $urlid,'time' => $time,'time1' => $time1,'name' => $name,'ip' => $ip,'ua' => $ua,'state' => $state];
	$jg = Db::table('bianxian_wang_zhizhu')->insert($data);
	
	return $jg ;
}
 
function urlid($url)
{
	$jg = Db::table('bianxian_wang_zhizhu_url')->where('url', $url)->find();
	if(empty($jg[url_id])){
		$data = ['url' => $url];
		$jg = Db::table('bianxian_wang_zhizhu_url')->insert($data);
		$jg = Db::table('bianxian_wang_zhizhu_url')->where('url', $url)->find();
		if(!empty($jg[url_id])){
			return $jg[url_id];
		}
		
	}else{
		return $jg[url_id];
	}
}


function zhizhu_tj($name)
{
    $jg = Db::table('bianxian_wang_zhizhu_tj')->where('time', date('Ymd', time()))->find();
    $cunzai = 1;
    if (empty($jg['time'])) {
        $data = ['time' => date('Ymd', time())];
        $jg = Db::table('bianxian_wang_zhizhu_tj')->insert($data);
        $cunzai = $jg;
    }
    if ($cunzai) {
        Db::table('bianxian_wang_zhizhu_tj')->where('time', date('Ymd', time()))->setInc($name);
    }
	
}
function getIP() {
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    }
    elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    }
    elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');

    }
    elseif (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    }
    else {
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
    }
    
    return $ip;
}

	
	?>