<?php
/*
'软件名称：飞飞CMS  官方网站：http://www.feifeicms.top/
*/
header('Content-Type:text/html;charset=utf-8');
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.5.0','<'))  die('PHP版本过低，最少需要PHP5.5，请升级PHP版本！');
//超时时间
@ini_set('max_execution_time', '0');
//内存限制 取消内存限制
@ini_set("memory_limit",'-1');
// 定义应用目录
define('ROOT_PATH', __DIR__ . '/');
define('APP_PATH', __DIR__ . '/application/');
define('FFCMS_COMM', __DIR__.'/application/common/common/');
define('FFCMS_HOME_COMM', __DIR__.'/application/index/common/');
define('FFCMS_ADMIN_COMM', __DIR__.'/application/admin/common/');
define('FFCMS_START_TIME', microtime(true) );
define('BIND_MODULE','index');
define('ENTRANCE', 'index');
$in_file = rtrim($_SERVER['SCRIPT_NAME'],'/');
if(substr($in_file,strlen($in_file)-4)!=='.php'){
    $in_file = substr($in_file,0,strpos($in_file,'.php')) .'.php';
}
define('IN_FILE',$in_file);
if(!is_file('./application/data/install/install.lock')) {
    header("Location: ./install.php");
    exit;
}
if (!@mb_check_encoding($_SERVER['PATH_INFO'], 'utf-8')){
    $_SERVER['PATH_INFO']=@mb_convert_encoding($_SERVER['PATH_INFO'], 'UTF-8', 'GBK');
}

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';

