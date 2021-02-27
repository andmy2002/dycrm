<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"D:\phpstudy_pro\WWW/application/admin\view\index\welcome.html";i:1590982274;s:59:"D:\phpstudy_pro\WWW\application\admin\view\public\head.html";i:1590503895;s:59:"D:\phpstudy_pro\WWW\application\admin\view\public\foot.html";i:1552223571;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> -内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1024">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1024">
    <script type="text/javascript" src="/static/js/jquery.js?v=1024"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1024"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", FFCMS_VERSION='v10';
    </script>
</head>
<body>
<script language="JavaScript">
$(document).ready(function(){
	$('#xmltip').hide();
	$('#xmllist').show();
});
var jumpurl = '<?php echo $jumpurl; ?>';
</script>
</head>
  <thead>
<div class="page-container">

<div id="xmllist" style="display:none"><script language="JavaScript" charset="utf-8" type="text/javascript" src="http://www.feifeicms.top/v10guangao.js?<?php echo $rand; ?>"></script>
</div>
     </thead>
<script>
    var FFCMS_VERSION='<?php echo $version['code']; ?>',PHP_VERSION='<?php echo PHP_VERSION ?>',THINK_VERSION='<?php echo THINK_VERSION ?>';
</script>
<div class="page-container">

    <?php $pass="<strong class='green'>√</strong>";$error="<strong class='red'>×</strong>";?>
	 <table class="layui-table" >

   <tr>
            <th colspan="4" scope="col"><font style="color:#00CD00;font-size:18px;">公告：欢迎使用飞飞Cms影视系统，本程序仅供内部学习和交流使用，没有内置任何数据和采集资源，添加任何数据均是个人行为！请在遵守法律的前提下使用程序，否则后果自负！请大家支持正版，保护版权人人有责！请认准飞飞CMS官方网站:www.FeiFeiCms.top 请勿使用倒卖/盗版系统程序，有后门，源码被加密，没有售后保障及程序后续更新升级服务，想要认真做站请务必购买正版系统！！！</font></font>
			</th>
        </tr>
       

        <tbody>

        <tr>
        <tbody>
        <tr>
		            <td width="15%">官方网站</td>
            <td width="30%"><a href="http://www.FeiFeiCms.top" target="_blank"> www.FeiFeiCms.top</a></td>
			<td width="15%">官方销售客服</td>
            <td width="30%"><a href="http://www.FeiFeiCms.top" target="_blank">QQ:1306428988 </a></td>
            
        </tr>

				        <tr>
		<td width="15%">技术支持</td>
            <td width="30%"><a href="http://www.FeiFeiCms.top" target="_blank">加售后群（退出售后群即视为放弃更新与使用）</a></td>
            <td width="15%">服务器当前日期</td>
            <td width="30%"><?php echo date('Y-m-d'); ?></td>


		        <tr>
		<td width="15%">操作系统</td>
            <td width="30%"><?php echo PHP_OS ?></td>
            <td width="15%">脚本解释引擎</td>
            <td width="30%"><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>


        <tr>
            <td>安装目录</td>
            <td><?php echo $_SERVER['DOCUMENT_ROOT'] ?></td>
            <td>服务器IP/端口</td>
            <td><?php echo $_SERVER['HTTP_HOST'] ?></td>
        </tr>

        <tr>
            <td>PHP版本</td>
            <td><?php echo PHP_VERSION ?></td>
            <td>最大上传文件</td>
            <td><?php echo get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : $error;?></td>
        </tr>

        <tr>
            <td>CURL支持</td>
            <td><?php $curl = @curl_version();echo $curl['version'] ? $curl['version'] : $error; ?></td>
            <td>GD图形版本</td>
            <td><?php $gd = @gd_info(); echo $gd['GD Version'] ? $gd['GD Version'] : $error;?></td>
        </tr>  

        <tr>
            <td>ThinkPHP版本</td>
            <td><?php echo THINK_VERSION; ?></td>
            <td>脚本超时时间</td>
            <td><?php $t = ini_get("max_execution_time"); echo $t;?>秒</td>
        </tr>
 <tr>
            <th colspan="4" scope="col"><font color="#EE1289">登录次数：<?php echo $info['admin_login_num']; ?>  上次登录IP：<?php echo long2ip($info['admin_last_login_ip']); ?>  上次登录时间：<?php echo ffcms_day($info['admin_last_login_time']); ?></font></th>
        </tr>

 <tr>
   <th colspan="4" scope="col"> 程序最新版本检测：<script>var version="{%feifeicms_version}";</script><script type="text/javascript" src="http://www.feifeicms.top/versionsybv10.js?{$rand"></script></td>
  </tr>		    
        </tbody>
</div>
<span style="display: none">
<iframe src="http://www.feifeicms.top/ffcms/v10tongji.js" MARGINWIDTH="0" MARGINHEIGHT="0" HSPACE="0" VSPACE="0" FRAMEBORDER="0" SCROLLING="no" width="0" height="0"></iframe>
</span>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
</body>
</html>