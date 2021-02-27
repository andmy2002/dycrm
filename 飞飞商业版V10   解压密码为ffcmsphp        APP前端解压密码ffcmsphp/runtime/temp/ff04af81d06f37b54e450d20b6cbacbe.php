<?php if (!defined('THINK_PATH')) exit(); /*a:31:{s:33:"Tpl/miaopon/html/index\index.html";i:1591067723;s:56:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\public\include.html";i:1591108536;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\seos.html";i:1590595766;s:55:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\themes.html";i:1591067726;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\public\head.html";i:1591067724;s:57:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\all_menu.html";i:1590595765;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\icon.html";i:1590595765;s:55:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\module\banner.html";i:1590595763;s:63:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\vod_box_banner.html";i:1590595766;s:58:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\module\home_menu.html";i:1590595763;s:55:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\notice.html";i:1590595765;s:61:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\home_menu_sm.html";i:1590566179;s:56:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\vod_box.html";i:1590595766;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\ads\ads_all.html";i:1590595761;s:61:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\art_box_home.html";i:1590566179;s:58:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\zbvod_box.html";i:1590566180;s:58:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\topic_box.html";i:1590566180;s:57:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\module\hom_rank.html";i:1590595763;s:62:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\rank_box_week.html";i:1578235052;s:57:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\rank_top.html";i:1590595765;s:60:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\rank_bottom.html";i:1590595765;s:63:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\rank_box_month.html";i:1578235052;s:61:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\rank_box_all.html";i:1578235052;s:54:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\module\links.html";i:1590595763;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\public\foot.html";i:1591112400;s:57:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\foot_nav.html";i:1590595765;s:54:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\icon2.html";i:1590595765;s:56:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\ads\ads_bottom.html";i:1590595761;s:56:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\infobox.html";i:1590595765;s:53:"D:\phpstudy_pro\WWW\Tpl\miaopon\html\widget\copy.html";i:1590566179;s:47:"application/bianxianwang/zhizhutongji/index.php";i:1590412365;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <?php $file = 'Tpl/miaopon/demo/admin/Miaopon.php'; $newfile = 'application/admin/controller/Miaopon.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'Tpl/miaopon/demo/admin/hltheme.php'; $newfile = 'application/extra/hltheme.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'Tpl/miaopon/demo/admin/theme.html'; $dir = 'application/admin/view/miaopon'; $newfile = 'application/admin/view/miaopon/theme.html'; if (file_exists($dir)) {} else { mkdir($dir, 0777); copy($file,$newfile); } $miaopon = file_exists('application/extra/hltheme.php') ? require('application/extra/hltheme.php') : require(substr($feifeicms['path_tpl'], strlen($feifeicms['path'])).'demo/admin/hltheme.php'); if($feifeicms['aid']==1): ?><!-- 首页 -->
<title><?php echo ffcms_default($miaopon['theme']['seos']['index_name'],$feifeicms['site_name']); ?></title>
<meta name="keywords" content="<?php echo ffcms_default($miaopon['theme']['seos']['index_key'],$feifeicms['site_keywords']); ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['index_des'],$feifeicms['site_description']); ?>" />
<?php elseif($feifeicms['aid']==4): ?><!-- 留言本 -->
<title>求片留言 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $feifeicms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $feifeicms['site_description']; ?>" />
<?php elseif($feifeicms['aid']==11): ?><!--  视频分类页 -->
<title><?php echo ffcms_filter_html(ffcms_default($obj['type_title'],$obj['type_name'])); ?>-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html(ffcms_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_default($obj['type_des'],$feifeicms['site_description']); ?>" />
<?php elseif($feifeicms['aid']==12): ?><!-- 视频分类筛选 -->
<title>最新<?php echo $obj['type_name']; ?>-推荐<?php echo $obj['type_name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
<meta name="description" content="<?php echo $obj['type_des']; ?>" />
<?php elseif($feifeicms['aid']==13): ?><!-- 视频搜索 -->
<title>搜索<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>,免费在线视频网站,在线观看,电影,电视剧,综艺,最新电影,最新电视剧" />
<meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果,<?php echo $feifeicms['site_name']; ?>" />
<?php elseif($feifeicms['aid']==14): ?><!-- 视频详情 -->
<title><?php echo ffcms_default(ffcms_filter_html($obj['vod_name']),'404'); ?>_<?php echo ffcms_filter_html($obj['type']['type_name']); ?>_<?php echo ffcms_filter_html($obj['type_1']['type_name']); ?>_<?php echo ffcms_default($miaopon['theme']['seos']['detail_name'],'高清资源在线播放_高清资源下载'); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html($obj['vod_name']); ?>,<?php echo ffcms_filter_html($obj['type']['type_name']); ?>,<?php echo ffcms_filter_html($obj['type_1']['type_name']); ?>,<?php echo ffcms_default($miaopon['theme']['seos']['detail_key'],'高清资源,在线播放,迅雷下载,百度网盘'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo $miaopon['theme']['seos']['detail_des']; ?><?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
<?php elseif($feifeicms['aid']==15): ?><!-- 视频播放 -->
<title><?php echo ffcms_default(ffcms_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo ffcms_default($miaopon['theme']['seos']['play_name'],'高清资源在线播放'); ?>_<?php echo ffcms_filter_html($obj['type']['type_name']); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html($obj['vod_name']); ?>,<?php echo ffcms_filter_html($obj['type']['type_name']); ?>,<?php echo ffcms_filter_html($obj['type_1']['type_name']); ?>,<?php echo ffcms_default($miaopon['theme']['seos']['play_key'],'高清资源,在线播放'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['play_des'],'高清资源在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($feifeicms['aid']==16): ?><!-- 视频下载 -->
<title><?php echo ffcms_default(ffcms_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo ffcms_default($miaopon['theme']['seos']['down_name'],'迅雷下载_百度网盘_高清资源'); ?>_<?php echo ffcms_filter_html($obj['type']['type_name']); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html($obj['vod_name']); ?>,<?php echo ffcms_filter_html($obj['type']['type_name']); ?>,<?php echo ffcms_filter_html($obj['type_1']['type_name']); ?>,<?php echo ffcms_default($miaopon['theme']['seos']['down_key'],'迅雷下载,百度网盘,高清资源'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['down_des'],'迅雷下载_百度网盘_高清资源'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($feifeicms['aid']==21): ?><!-- 文章分类 -->
<title><?php echo ffcms_filter_html(ffcms_default($miaopon['theme']['seos']['arti_name'],$obj['type_title'])); ?>-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html(ffcms_default($miaopon['theme']['seos']['arti_key'],$obj['type_key'])); ?> - <?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_filter_html(ffcms_default($miaopon['theme']['seos']['arti_des'],$obj['type_des'])); ?> - <?php echo $feifeicms['site_name']; ?>" />
<?php elseif($feifeicms['aid']==24): ?><!-- 文章详情 -->
<title><?php echo ffcms_default(ffcms_filter_html($obj['art_name']),'404'); ?>_<?php echo ffcms_filter_html(ffcms_default($miaopon['theme']['seos']['artd_name'],$obj['type']['type_name'])); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_filter_html(ffcms_default($obj['art_tag'],$obj['type']['type_name'])); ?>,<?php echo ffcms_default($miaopon['theme']['seos']['artd_key'],'资讯,热点新闻,社会热点'); ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['artd_des'],'资讯,热点新闻,社会热点'); ?>,<?php echo $obj['art_blurb']; ?>,<?php echo $feifeicms['site_name']; ?>" />
<?php elseif($feifeicms['aid']==30): ?><!-- 专题首页 -->
<title><?php echo ffcms_default($miaopon['theme']['seos']['topic_name'],'专题首页 - 精品专题'); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_default($miaopon['theme']['seos']['topic_key'],'电影专题,电视剧专题,综艺专题,动漫专题,推荐专题,专题收录'); ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['topic_des'],'本站提供最新最全精品专题数据'); ?>" />
<?php elseif($feifeicms['aid']==34): ?><!-- 专题详情 -->
<title><?php echo ffcms_default($obj['topic_title'],$obj['topic_name']); ?>_<?php echo ffcms_default($miaopon['theme']['seos']['topicd_name'],'专题详情'); ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo ffcms_default($obj['topic_key'],$obj['topic_name']); ?>,<?php echo ffcms_default($miaopon['theme']['seos']['topicd_key'],'精品专题'); ?>,<?php echo $feifeicms['site_name']; ?>" />
<meta name="description" content="<?php echo ffcms_default($miaopon['theme']['seos']['topicd_des'],'精品专题'); ?>,<?php echo ffcms_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<?php elseif($feifeicms['aid']==80): ?><!-- 明星首页 -->
<title><?php echo $feifeicms['seo']['actor']['name']; ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $feifeicms['seo']['actor']['key']; ?>" />
<meta name="description" content="<?php echo $feifeicms['seo']['actor']['des']; ?>" />
<?php elseif($feifeicms['aid']==82): ?><!-- 明星筛选 -->
<title>明星库-明星档案-高级搜索-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="明星,娱乐明星,电影明星,电视剧明星,明星大全" />
<meta name="description" content="<?php echo $feifeicms['site_name']; ?>为您提供各国男女明星的详细资料、近况以及最新电影，电视剧在线观看。" />
<?php elseif($feifeicms['aid']==84): ?><!-- 明星详情 -->
<title><?php echo $obj['actor_name']; ?>个人资料_<?php echo $obj['actor_name']; ?>演过的电视剧_<?php echo $obj['actor_name']; ?>电影全集-<?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['actor_name']; ?>个人资料,<?php echo $obj['actor_name']; ?>演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,<?php echo $obj['actor_name']; ?>最新电影,<?php echo $obj['actor_name']; ?>最新电视剧">
<meta name="description" content="<?php echo $feifeicms['site_name']; ?>为你收集了<?php echo $obj['actor_name']; ?>个人资料包括了<?php echo $obj['actor_name']; ?>最新演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,以及<?php echo $obj['actor_name']; ?>图片剧照最近动态等信息希望你能喜欢。"> 
<?php elseif($feifeicms['aid']==90): ?><!-- 角色首页 -->
<title><?php echo $feifeicms['seo']['role']['name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $feifeicms['seo']['role']['key']; ?>" />
<meta name="description" content="<?php echo $feifeicms['seo']['role']['des']; ?>" />
<?php elseif($feifeicms['aid']==94): ?><!-- 角色详情 -->
<title><?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者是<?php echo $obj['role_actor']; ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['data']['vod_name']; ?>,<?php echo $obj['role_actor']; ?>饰<?php echo $obj['role_name']; ?>" />
<meta name="description" content="<?php echo $feifeicms['site_name']; ?>为你收集了<?php echo $obj['data']['vod_name']; ?>的参演角色，及<?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者<?php echo $obj['role_actor']; ?>近期的电影作品，电视剧作品，综艺作品等动态信息。" />
<?php elseif($feifeicms['aid']==100): ?><!-- 剧情首页 -->
<title><?php echo $feifeicms['seo']['plot']['name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $feifeicms['seo']['plot']['key']; ?>" />
<meta name="description" content="<?php echo $feifeicms['seo']['plot']['des']; ?>" />
<?php elseif($feifeicms['aid']==104): ?><!-- 剧情详情 -->
<title><?php echo $obj['vod_name']; ?>分集剧情 - <?php echo $obj['vod_plot_list'][$param['page']]['name']; ?> - <?php echo $feifeicms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,分集剧情" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>分集剧情，<?php echo $obj['vod_plot_list'][$param['page']]['name']; ?>，<?php echo ffcms_filter_html(ffcms_substring($obj['vod_plot_list'][$param['page']]['detail'],55)); ?>" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo ffcms_url_img(ffcms_default($miaopon['theme']['logo']['webapp'],substr($feifeicms['path_tpl'], strlen($feifeicms['path'])).'demo/img/ios_fav.png')); ?>">
<link rel="shortcut icon" href="<?php echo ffcms_url_img(ffcms_default($miaopon['theme']['logo']['icon'],substr($feifeicms['path_tpl'], strlen($feifeicms['path'])).'demo/img/favicon.png')); ?>" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/mxstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/hlstyle.css">
<?php if($miaopon['theme']['color']['select']==green): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/green.css" name="skin">
<?php elseif($miaopon['theme']['color']['select']==blue): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/blue.css" name="skin">
<?php elseif($miaopon['theme']['color']['select']==pink): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/pink.css" name="skin">
<?php elseif($miaopon['theme']['color']['select']==red): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/red.css" name="skin">
<?php elseif($miaopon['theme']['color']['select']==gold): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/gold.css" name="skin">
<?php else: ?><link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/default.css" name="skin"><?php endif; if($miaopon['theme']['color']['ms']==black): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/black.css" name="color">
<?php else: ?><link rel="stylesheet" type="text/css" href="<?php echo $feifeicms['path_tpl']; ?>demo/css/white.css" name="color"><?php endif; ?>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/hlhtml.js"></script>
<script>var feifeicms={"path":"","mid":"<?php echo $feifeicms['mid']; ?>","url":"<?php echo $feifeicms['site_url']; ?>","wapurl":"<?php echo $feifeicms['site_wapurl']; ?>","mob_status":"<?php echo $feifeicms['mob_status']; ?>"};</script>
<?php if($miaopon['theme']['lazy']): ?>
<style type="text/css">.balist_thumb,.vodlist_thumb,.topiclist_thumb,.artlist_thumb,.artbanner_thumb,.art_relates .artlr_pic,.play_vlist_thumb,.zbo .play_vlist_thumb.zboad,.actor_pic,.ranklist_thumb{background-image:url("<?php echo ffcms_url_img($miaopon['theme']['lazy']); ?>");background-repeat: no-repeat;}</style>
<?php endif; if($miaopon['theme']['banner']['smbg']==0): ?>
<style type="text/css">.bgi_box{display: none!important;}</style>
<?php endif; if($miaopon['theme']['banner']['bgstyle']): ?>
<style type="text/css">.hot_banner{background: <?php echo $miaopon['theme']['banner']['bgstyle']; ?>;background-size: contain;background-position: center top;}</style><?php endif; ?>
<?php echo $miaopon['theme']['head']['text']; ?>
<script type="text/javascript">
$(function() {
    var cookie_style=$.cookie("mystyle");if(cookie_style==null){if(white==black){$("#black").addClass("hide");$("#white").removeClass("hide")}else{console.log(white);console.log(black);$("#white").addClass("hide");$("#black").removeClass("hide")}}else{$("[id='"+cookie_style+"'].mycolor").addClass("hide");$("[id!='"+cookie_style+"'].mycolor").removeClass("hide")}if(cookie_style){switchSkin(cookie_style)}if(cookie_style==null){}else{$("link[name='color']").attr("href","/Tpl/miaopon/demo/css/"+cookie_style+".css?v=4.0")}var $li=$(".mycolor");$li.click(function(){switchSkin(this.id)});function switchSkin(skinName){$("#"+skinName).addClass("hide").siblings().removeClass("hide");$("link[name='color']").attr("href","/Tpl/miaopon/demo/css/"+skinName+".css?v=4.0");$.cookie("mystyle",skinName,{path:'/',expires:10})}var cookie_themes=$.cookie("mythemes");if(cookie_themes==null){if(0==green){$("#themes li#green").addClass("cur")}else if(0==blue){$("#themes li#blue").addClass("cur")}else if(0==pink){$("#themes li#pink").addClass("cur")}else if(0==red){$("#themes li#red").addClass("cur")}else if(0==gold){$("#themes li#gold").addClass("cur")}else{$("#themes li#default").addClass("cur")}}else{$("#themes li[id='"+cookie_themes+"']").addClass("cur")}if(cookie_themes){switchSkin1(cookie_themes)}if(cookie_themes==null){}else{$("link[name='skin']").attr("href","/Tpl/miaopon/demo/css/"+cookie_themes+".css?v=4.0")}var $li=$("#themes li");$li.click(function(){switchSkin1(this.id)});function switchSkin1(skinName){$("#"+skinName).addClass("cur").siblings().removeClass("cur");$("link[name='skin']").attr("href","/Tpl/miaopon/demo/css/"+skinName+".css?v=4.0");$.cookie("mythemes",skinName,{path:'/',expires:10})}
	var changeindex=1;var clickindex=1;$(".v_change").click(function(index){var changeindex=$('.v_change').index(this);$(".cbox_list").each(function(index,element){var cboxindex=$(".cbox_list").index(this);if(cboxindex==changeindex){if(clickindex<3){$(this).find(".cbox"+(clickindex)).addClass("hide").removeClass("show").addClass('hide');$(this).find(".cbox"+(clickindex+1)).removeClass("hide").addClass('show');$(this).find(".cbox"+(clickindex+2)).removeClass("show").addClass('hide');clickindex++}else{$(this).find(".cbox"+clickindex).removeClass("show").addClass('hide');$(this).find(".cbox"+1).removeClass("hide").addClass('show');clickindex=1}}})});
	})
</script>
	<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/parts/loading.js"></script>
	<script src="<?php echo $feifeicms['path_tpl']; ?>demo/js/parts/jquery.adaptive.js"></script>
</head>
<body class="bstem">
<div id="topnav" class="head_box">
    <div class="header">
	<div class="head_a">
		<div class="head_logo">
			<a title="<?php echo $feifeicms['site_name']; ?>" class="logo logo_b" style="background-image: url(<?php echo ffcms_url_img(ffcms_default($miaopon['theme']['logo']['bpic'],substr($feifeicms['path_tpl'], strlen($feifeicms['path'])).'demo/img/logo_black.png')); ?>);" href="<?php echo $feifeicms['path']; ?>"></a>
			<a title="<?php echo $feifeicms['site_name']; ?>" class="logo logo_w" style="background-image: url(<?php echo ffcms_url_img(ffcms_default($miaopon['theme']['logo']['wpic'],substr($feifeicms['path_tpl'], strlen($feifeicms['path'])).'demo/img/logo_white.png')); ?>);" href="<?php echo $feifeicms['path']; ?>"></a>
		</div>
		<div class="head_menu_a hidden_xs hidden_mi">
	        <ul class="top_nav clearfix">
	        	<li <?php if($feifeicms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo $feifeicms['path']; ?>" title="首页">首页</a></li>
		        <?php $__TAG__ = '{"num":"7","order":"asc","by":"sort","ids":"'.$miaopon['theme']['nav']['id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?>><a href="<?php echo ffcms_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; if($miaopon['theme']['nav']['zdybtn'] == 1): if($miaopon['theme']['nav']['zdybtn1'] == 1): ?>
				<li><a href="<?php echo $miaopon['theme']['nav']['zdylink1']; ?>" title="<?php echo $miaopon['theme']['nav']['zdyname1']; ?>" target="_blank"><?php echo $miaopon['theme']['nav']['zdyname1']; ?></a></li>
				<?php endif; if($miaopon['theme']['nav']['zdybtn2'] == 1): ?>
				<li><a href="<?php echo $miaopon['theme']['nav']['zdylink2']; ?>" title="<?php echo $miaopon['theme']['nav']['zdyname2']; ?>" target="_blank"><?php echo $miaopon['theme']['nav']['zdyname2']; ?></a></li>
				<?php endif; if($miaopon['theme']['nav']['zdybtn3'] == 1): ?>
				<li><a href="<?php echo $miaopon['theme']['nav']['zdylink3']; ?>" title="<?php echo $miaopon['theme']['nav']['zdyname3']; ?>" target="_blank"><?php echo $miaopon['theme']['nav']['zdyname3']; ?></a></li>
				<?php endif; if($miaopon['theme']['nav']['zdybtn4'] == 1): ?>
				<li><a href="<?php echo $miaopon['theme']['nav']['zdylink4']; ?>" title="<?php echo $miaopon['theme']['nav']['zdyname4']; ?>" target="_blank"><?php echo $miaopon['theme']['nav']['zdyname4']; ?></a></li>
				<?php endif; endif; ?>
            </ul>
		</div>
		<div class="head_user">
		    <ul>
                <?php if(strpos($miaopon['theme']['rtnav']['ym'],'a') !==false): ?>
                <li class="top_ico"> 
                    <a href="javascript:;" class="history" title="观看历史"><i class="iconfont">&#xe624;</i></a>
                </li>
                <?php endif; if($miaopon['theme']['topic']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'b') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo ffcms_url_topic_index(); ?>" title="<?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?>"><i class="iconfont">&#xe64c;</i></a>
                </li>
                <?php endif; endif; if($GLOBALS['config']['gbook']['status'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'c') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo ffcms_url('gbook/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['gbook']['title'],'留言'); ?>"><i class="iconfont">&#xe632;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['map']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'d') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo ffcms_url('map/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['map']['title'],'最新'); ?>"><i class="iconfont">&#xe652;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['rank']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'e') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo ffcms_url('label/rank'); ?>" title="<?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?>"><i class="iconfont">&#xe618;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['apps']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'f') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo $miaopon['theme']['apps']['link']; ?>" title="下载APP" target="_blank"><i class="iconfont">&#xe653;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['qq']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'g') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo $miaopon['theme']['qq']['link']; ?>" title="<?php echo ffcms_default($miaopon['theme']['qq']['title'],'QQ联系'); ?>" target="_blank"><i class="iconfont">&#xe66a;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['weixin']['btn'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'h') !==false): ?>
                <li class="top_ico">
                    <a class="top_ico btn_wxgzh" href="javascript:void(0)" title="二维码"><i class="iconfont">&#xe614;</i></a>
                </li>
                <?php endif; endif; if($miaopon['theme']['rtnav']['zdybtn1'] == 1): ?>
				<li class="top_ico">
					<a href="<?php echo $miaopon['theme']['rtnav']['zdylink1']; ?>" title="<?php echo $miaopon['theme']['rtnav']['zdyname1']; ?>" target="_blank"><i class="iconfont">&#xe666;</i></a>
				</li>
				<?php endif; if($miaopon['theme']['rtnav']['zdybtn2'] == 1): ?>
				<li class="top_ico">
					<a href="<?php echo $miaopon['theme']['rtnav']['zdylink2']; ?>" title="<?php echo $miaopon['theme']['rtnav']['zdyname2']; ?>" target="_blank"><i class="iconfont">&#xe668;</i></a>
				</li>
				<?php endif; if($GLOBALS['config']['user']['status'] == 1): if(strpos($miaopon['theme']['rtnav']['ym'],'i') !==false): ?>
                <li class="top_ico">
					<a class="ffcms_user" href="javascript:;" title="<?php echo ffcms_default($miaopon['theme']['user']['title'],'会员'); ?>"><i class="iconfont">&#xe62b;</i></a>
                </li>
                <?php endif; endif; ?>
            </ul>
		</div>
	</div>
	</div>
	<div class="header"">
		<div class="head_b">
		    <a class="bk_btn fl" href="javascript:FFCMS.GoBack()" title="返回"><i class="iconfont">&#xe625;</i></a>
		    <span class="hd_tit fl"><?php echo $obj['vod_name']; ?><?php echo $obj['topic_name']; ?><?php echo $obj['art_name']; ?></span>
		    <a class="se_btn fr open-share" href="javascript:void(0)" title="分享"><i class="iconfont">&#xe615;</i></a>
		    <?php if($GLOBALS['config']['comment']['status'] == 1): ?>
		    <a class="se_btn pl_btn fr" href="#pinglun" title="评论"><i class="iconfont">&#xe632;</i></a>
		    <?php endif; ?>
			<div class="head_menu_b">
			<a class="menu" href="javascript:void(0)" title="全部分类"><i class="iconfont menu_ico">&#xe640;</i><span class="hidden_xs">&nbsp;全部分类</span></a>
				<div class="all_menu">
  <div class="all_menu_inner">
     <div class="menu_top hidden_mb"><a class="close_menu" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>全部分类</div>
     <!-- 分类 -->
     <div class="all_menu_box">
		 <ul class="nav_list clearfix">
			 <li <?php if($feifeicms['aid'] == 1): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn7" href="<?php echo $feifeicms['path']; ?>" title="首页"><i class="iconfont">&#xe634;</i><span>首页</span></a>
			 </li>

			 <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
			 <li <?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'])): ?> class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn<?php echo $key1; ?>" href="<?php echo ffcms_url_type($vo1); ?>" title="<?php echo $vo1['type_name']; ?>">
				 <?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><span><?php echo $vo1['type_name']; ?></span>
				 </a>
			 </li>
			 <?php endforeach; endif; else: echo "" ;endif; if($miaopon['theme']['topic']['btn'] == 1): ?>
			 <li <?php if($feifeicms['mid'] == 3): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn2" href="<?php echo ffcms_url_topic_index(); ?>" title="<?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?>"><i class="iconfont">&#xe64c;</i><span><?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?></span></a>
			 </li>
			 <?php endif; if($GLOBALS['config']['gbook']['status'] == 1): ?>
			 <li <?php if($feifeicms['aid'] == 4): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn1" href="<?php echo ffcms_url('gbook/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['gbook']['title'],'留言'); ?>"><i class="iconfont">&#xe632;</i><span><?php echo ffcms_default($miaopon['theme']['gbook']['title'],'留言'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['map']['btn'] == 1): ?>
			 <li <?php if($feifeicms['aid'] == 2): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn3" href="<?php echo ffcms_url('map/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['map']['title'],'最新'); ?>"><i class="iconfont">&#xe652;</i><span><?php echo ffcms_default($miaopon['theme']['map']['title'],'最新'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['rank']['btn'] == 1): ?>
			 <li <?php if($feifeicms['aid'] == 7): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn4" href="<?php echo ffcms_url('label/rank'); ?>" title="<?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?>"><i class="iconfont">&#xe618;</i><span><?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['actor']['btn'] == 1): ?>
			 <li <?php if($feifeicms['mid'] == 8): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn5" href="<?php echo ffcms_url('actor/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['actor']['title'],'明星'); ?>"><i class="iconfont">&#xe629;</i><span><?php echo ffcms_default($miaopon['theme']['actor']['title'],'明星'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['role']['btn'] == 1): ?>
			 <li <?php if($feifeicms['mid'] == 9): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn6" href="<?php echo ffcms_url('role/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['role']['title'],'角色'); ?>"><i class="iconfont">&#xe654;</i><span><?php echo ffcms_default($miaopon['theme']['role']['title'],'角色'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['plot']['btn'] == 1): ?>
			 <li <?php if($feifeicms['mid'] == 10): ?>class="active"<?php endif; ?>>
				 <a class="mob_btn mob_btn1" href="<?php echo ffcms_url('plot/index'); ?>" title="<?php echo ffcms_default($miaopon['theme']['plot']['title'],'剧情'); ?>"><i class="iconfont">&#xe630;</i><span><?php echo ffcms_default($miaopon['theme']['plot']['title'],'剧情'); ?></span></a>
			 </li>
			 <?php endif; if($miaopon['theme']['apps']['btn'] == 1): ?>
			 <li>
				 <a class="mob_btn mob_btn7 mob_btnapp" href="<?php echo $miaopon['theme']['apps']['link']; ?>" title="下载APP"><i class="iconfont">&#xe653;</i><span>下载APP</span></a>
			 </li>
			 <?php endif; ?>
		 </ul>
     <!-- 分类end -->
     </div>
  </div>
</div>
			</div>
			<div class="head_search">
				<form id="search" name="search" method="get" action="<?php echo ffcms_url('vod/search'); ?>" onsubmit="return qrsearch();">
					<i class="iconfont">&#xe633;</i>
					<input id="txt" type="text" name="wd" class="ffcms_wd form_control" value="<?php echo $param['wd']; ?>" placeholder="<?php echo ffcms_default($miaopon['theme']['search']['text'],'输入搜索关键字'); ?>">
					<button class="submit" id="searchbutton" type="submit" name="submit">搜索</button>
				</form>
			</div>
			<div class="head_hot_search hidden_xs">
				<ul class="pops_list">
					<li><span class="hot_search_tit"><i class="iconfont">&#xe631;</i>&nbsp;热门搜索</span></li>
					<?php $_5ed76b07cb398=explode(',',$feifeicms['search_hot']); if(is_array($_5ed76b07cb398) || $_5ed76b07cb398 instanceof \think\Collection || $_5ed76b07cb398 instanceof \think\Paginator): if( count($_5ed76b07cb398)==0 ) : echo "" ;else: foreach($_5ed76b07cb398 as $key=>$vo): if($key < 5): ?>
					<li><a href="<?php echo ffcms_url('vod/search',['wd'=>$vo]); ?>"><span class="hot_name"><?php echo $vo; ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
		
<div id="banstem" class="hot_banner">
<?php if($miaopon['theme']['banner']['btn'] == 1): if($miaopon['theme']['banner']['ms'] == 'small'): ?>
    <div class="bgi_box">
        <span id="bgimage" class="bgi"></span>
        <span class="bgfd"></span>
    </div>
    <div class="hot_list">
        <div class="hot_banner_box">
            <div class="banner-top">
                <ul class="swiper-wrapper vodlist clearfix">
                    <?php if($feifeicms['aid']==1): if($miaopon['theme']['ads']['banner']['btn'] == 1): ?>
                    <li class="balist_item swiper-slide">
						<a class="balist_thumb swiper-lazy" href="<?php echo $miaopon['theme']['ads']['banner']['link']; ?>" title="<?php echo $miaopon['theme']['ads']['banner']['title']; ?>" data-background="<?php echo ffcms_url_img($miaopon['theme']['ads']['banner']['pic']); ?>">
							<span class="play hidden_xs"></span>
							<?php if($miaopon['theme']['ads']['banner']['tbtn'] == 1): ?>
							<div class="tagtip tagb adtip">广告</div>
							<?php endif; ?>
							<div class="balist_titbox pic_text">
							   <p class="vodlist_title"><?php echo $miaopon['theme']['ads']['banner']['title']; ?></p>
							   <p class="vodlist_sub"><?php echo $miaopon['theme']['ads']['banner']['sub']; ?></p>
							</div>
							<span class="balist_bg"></span>
						</a>
					</li>
                    <?php endif; if($miaopon['theme']['topic']['btn'] == 1): $__TAG__ = '{"num":"3","paging":"no","type":"all","level":"9","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="balist_item swiper-slide">
						<a class="balist_thumb swiper-lazy" href="<?php echo ffcms_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" data-background="<?php echo ffcms_url_img(ffcms_default($vo['topic_pic_slide'],$vo['topic_pic'])); ?>">
							<span class="play hidden_xs"></span>
							<div class="tagtip tagb"><?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?></div>
							<div class="balist_titbox pic_text">
							   <p class="vodlist_title"><?php echo $vo['topic_name']; ?></p>
							   <p class="vodlist_sub"><?php echo ffcms_filter_html(ffcms_default($vo['topic_sub'],$vo['topic_remarks'])); ?></p>
							</div>
							<span class="balist_bg"></span>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; endif; endif; $__TAG__ = '{"num":"9","paging":"no","type":"current","level":"9","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> <li class="balist_item swiper-slide">
    <a class="balist_thumb swiper-lazy" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-background="<?php echo ffcms_url_img($vo['vod_pic']); ?>">
		<span class="play hidden_xs"></span>
        <div class="balist_titbox pic_text">
           <p class="vodlist_title"><?php echo $vo['vod_name']; ?></p>
           <p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
        </div>
        <span class="balist_bg"></span>
    </a>
</li> <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="banner-arrow">
                <a class="swiper-button-prev" href="javascript:;"><i class="iconfont">&#xe625;</i></a>
                <a class="swiper-button-next" href="javascript:;"><i class="iconfont">&#xe623;</i></a>
            </div>
        </div>
    </div><?php endif; if($miaopon['theme']['banner']['ms'] == 'big'): ?>
    <div class="hot_wlist">
        <div class="hot_banner_box">
            <div class="bg_wtop"></div>
            <div class="banner-wtop">
                <ul class="swiper-wrapper clearfix">
                    <?php if($feifeicms['aid']==1): if($miaopon['theme']['ads']['banner']['btn'] == 1): ?>
                    <li class="wbalist_item swiper-slide">
                        <a class="wbalist_thumb" href="<?php echo $miaopon['theme']['ads']['banner']['link']; ?>" title="<?php echo $miaopon['theme']['ads']['banner']['title']; ?>" style="background-image:url(<?php echo ffcms_url_img($miaopon['theme']['ads']['banner']['pic']); ?>)" data-adaptive-background data-ab-css-background>
                            <div class="bg_wtop_banner"></div>
                            <div class="wbalist_titbox pic_text">
                                <div class="wbalist_con adb">
                                    <?php if($miaopon['theme']['ads']['banner']['tbtn'] == 1): ?>
                                    <div class="tagtip tagb adtip">广告</div><?php endif; ?>
                                    <p class="vodlist_title"><?php echo $miaopon['theme']['ads']['banner']['title']; ?></p>
                                    <p class="vodlist_sub"><?php echo $miaopon['theme']['ads']['banner']['sub']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endif; if($miaopon['theme']['topic']['btn'] == 1): $__TAG__ = '{"num":"3","paging":"no","type":"all","level":"9","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="wbalist_item swiper-slide">
                        <a class="wbalist_thumb" href="<?php echo ffcms_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" style="background-image:url(<?php echo ffcms_url_img(ffcms_default($vo['topic_pic_slide'],$vo['topic_pic'])); ?>)" data-adaptive-background data-ab-css-background>
                            <div class="bg_wtop_banner"></div>
                            <div class="wbalist_titbox pic_text">
                                <div class="wbalist_con">
                                    <i class="wba_ico hidden_xs"></i>
                                    <p class="vodlist_title"><?php echo $vo['topic_name']; ?></p>
                                    <p class="vodlist_sub">[<?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?>]&nbsp;<?php echo ffcms_filter_html(ffcms_default($vo['topic_sub'],$vo['topic_remarks'])); ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
					<?php endforeach; endif; else: echo "" ;endif; endif; endif; $__TAG__ = '{"num":"9","paging":"no","type":"current","level":"9","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="wbalist_item swiper-slide">
                        <a class="wbalist_thumb" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" style="background-image:url(<?php echo ffcms_url_img(ffcms_default($vo['vod_pic_slide'],$vo['vod_pic'])); ?>)" data-adaptive-background data-ab-css-background>
                            <div class="bg_wtop_banner"></div>
                            <div class="wbalist_titbox pic_text">
                                <div class="wbalist_con">
                                    <i class="wba_ico hidden_xs"></i>
                                    <p class="vodlist_title"><?php echo $vo['vod_name']; ?></p>
                                    <p class="vodlist_sub">[<?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?>]&nbsp;<?php echo ffcms_default(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'吐血推荐'); ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="swiper-pagination"></div>
                <div class="banner-arrow">
                    <a class="swiper-button-prev" href="javascript:;"><i class="iconfont">&#xe625;</i></a>
                    <a class="swiper-button-next" href="javascript:;"><i class="iconfont">&#xe623;</i></a>
                </div>
            </div>
        </div>
    </div><?php endif; endif; ?>
</div>
<?php if($miaopon['theme']['banner']['btn'] == 0): ?>
<script type="text/javascript">
        $("#banstem").remove();
        $("body").removeClass("bstem");
</script>
<?php elseif($miaopon['theme']['banner']['btn'] == 1): if($miaopon['theme']['banner']['ms'] == 'small'): ?>
	<script type="text/javascript">
		var bannum = document.getElementById('banstem').getElementsByTagName("li").length;
		if (bannum < 3) {
			$("#banstem").remove();
			$("body").removeClass("bstem");
		}
	</script>
	<?php endif; if($miaopon['theme']['banner']['ms'] == 'big'): ?>
	<script type="text/javascript">
		var bannum = document.getElementById('banstem').getElementsByTagName("li").length;
		if (bannum < 1) {
			$("#banstem").remove();
			$("body").removeClass("bstem");
		}
	</script>
	<?php endif; endif; ?>
    <div class="container ">
        <?php if($miaopon['theme']['type']['meunbtn'] == 1): ?>
<div class="row hidden_mb">
    <div class="pannel">
        <ul class="hom_mob_list">
            <?php $__TAG__ = '{"num":"5","ids":"'.$miaopon['theme']['type']['meunid'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
            <li>
                <a class="mob_btn mob_btn<?php echo $key1; ?>" href="<?php echo ffcms_url_type($vo1); ?>">
					<?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><span class="mob_font"><?php echo $vo1['type_name']; ?></span>
				</a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="pannel">
        <ul class="hom_sm_list vodlist_wi">
            <?php if($miaopon['theme']['notice']['btn'] == 1): ?>
            <li class="notice"<?php if($miaopon['theme']['type']['meunbtn'] == 0): ?> style="width: 100%;"<?php endif; ?>>
                <div class="smlist_box">
                    <marquee scrollamount="4" behavior="scroll" onmouseover=this.stop() onmouseout=this.start()>
<?php echo $miaopon['theme']['notice']['text']; ?>
</marquee>
                    <i class="iconfont nico">&#xe62d;</i>
                </div>
            </li>
            <?php endif; if($miaopon['theme']['type']['meunbtn'] == 1): if($miaopon['theme']['notice']['btn'] == 1): if($miaopon['theme']['type']['meunys'] == 'one'): $__TAG__ = '{"num":"2","ids":"'.$miaopon['theme']['type']['meunid'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
				<li class="hidden_xs">
    <div class="smlist_box list_m">
        <a class="text_muted" href="<?php echo ffcms_url_type($vo1); ?>" title="<?php echo $vo1['type_name']; ?>">
		<?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><?php echo $vo1['type_name']; ?>
        </a>
        <?php if($vo1['childids']||$vo1['parent']['childids']): $__TAG__ = '{"num":"5","parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
        <a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo2); ?>" title="<?php echo $vo2['type_name']; ?>"><?php echo ffcms_substring($vo2['type_name'],2); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; else: $_5ed76b07c8514=explode(',',$vo1['type_extend']['class']); if(is_array($_5ed76b07c8514) || $_5ed76b07c8514 instanceof \think\Collection || $_5ed76b07c8514 instanceof \think\Paginator): if( count($_5ed76b07c8514)==0 ) : echo "" ;else: foreach($_5ed76b07c8514 as $key2=>$vo2): if($key2 < 5): ?>
		<a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo1,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo ffcms_substring($vo2,2); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</li>
				<?php endforeach; endif; else: echo "" ;endif; elseif($miaopon['theme']['type']['meunys'] == 'two'): $__TAG__ = '{"num":"5","ids":"'.$miaopon['theme']['type']['meunid'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
				<li class="hidden_xs">
    <div class="smlist_box list_m">
        <a class="text_muted" href="<?php echo ffcms_url_type($vo1); ?>" title="<?php echo $vo1['type_name']; ?>">
		<?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><?php echo $vo1['type_name']; ?>
        </a>
        <?php if($vo1['childids']||$vo1['parent']['childids']): $__TAG__ = '{"num":"5","parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
        <a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo2); ?>" title="<?php echo $vo2['type_name']; ?>"><?php echo ffcms_substring($vo2['type_name'],2); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; else: $_5ed76b07c7b26=explode(',',$vo1['type_extend']['class']); if(is_array($_5ed76b07c7b26) || $_5ed76b07c7b26 instanceof \think\Collection || $_5ed76b07c7b26 instanceof \think\Paginator): if( count($_5ed76b07c7b26)==0 ) : echo "" ;else: foreach($_5ed76b07c7b26 as $key2=>$vo2): if($key2 < 5): ?>
		<a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo1,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo ffcms_substring($vo2,2); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</li>
				<?php endforeach; endif; else: echo "" ;endif; endif; else: if($miaopon['theme']['type']['meunys'] == 'one'): $__TAG__ = '{"num":"3","ids":"'.$miaopon['theme']['type']['meunid'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
				<li class="hidden_xs">
    <div class="smlist_box list_m">
        <a class="text_muted" href="<?php echo ffcms_url_type($vo1); ?>" title="<?php echo $vo1['type_name']; ?>">
		<?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><?php echo $vo1['type_name']; ?>
        </a>
        <?php if($vo1['childids']||$vo1['parent']['childids']): $__TAG__ = '{"num":"5","parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
        <a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo2); ?>" title="<?php echo $vo2['type_name']; ?>"><?php echo ffcms_substring($vo2['type_name'],2); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; else: $_5ed76b07c6f5e=explode(',',$vo1['type_extend']['class']); if(is_array($_5ed76b07c6f5e) || $_5ed76b07c6f5e instanceof \think\Collection || $_5ed76b07c6f5e instanceof \think\Paginator): if( count($_5ed76b07c6f5e)==0 ) : echo "" ;else: foreach($_5ed76b07c6f5e as $key2=>$vo2): if($key2 < 5): ?>
		<a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo1,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo ffcms_substring($vo2,2); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</li>
				<?php endforeach; endif; else: echo "" ;endif; elseif($miaopon['theme']['type']['meunys'] == 'two'): $__TAG__ = '{"num":"6","ids":"'.$miaopon['theme']['type']['meunid'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
				<li class="hidden_xs">
    <div class="smlist_box list_m">
        <a class="text_muted" href="<?php echo ffcms_url_type($vo1); ?>" title="<?php echo $vo1['type_name']; ?>">
		<?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><?php echo $vo1['type_name']; ?>
        </a>
        <?php if($vo1['childids']||$vo1['parent']['childids']): $__TAG__ = '{"num":"5","parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
        <a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo2); ?>" title="<?php echo $vo2['type_name']; ?>"><?php echo ffcms_substring($vo2['type_name'],2); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; else: $_5ed76b07c65b3=explode(',',$vo1['type_extend']['class']); if(is_array($_5ed76b07c65b3) || $_5ed76b07c65b3 instanceof \think\Collection || $_5ed76b07c65b3 instanceof \think\Paginator): if( count($_5ed76b07c65b3)==0 ) : echo "" ;else: foreach($_5ed76b07c65b3 as $key2=>$vo2): if($key2 < 5): ?>
		<a class="num<?php echo $key2; ?>" href="<?php echo ffcms_url_type($vo1,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo ffcms_substring($vo2,2); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</li>
				<?php endforeach; endif; else: echo "" ;endif; endif; endif; endif; ?>
        </ul>
    </div>
</div>
        <?php if($miaopon['theme']['hotvod']['btn'] == 1): ?>
        <div class="vod_row tit_up">
            <div class="pannel">
                <div class="pannel_head clearfix">
                   <a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;换一换</a>
                    <h2 class="title"><i class="iconfont">&#xe631;</i><?php echo ffcms_default($miaopon['theme']['hotvod']['title'],'热播推荐'); ?></h2>
                    <span class="text_muted pull_left">
						<a href="<?php if($miaopon['theme']['map']['btn'] == 1): ?><?php echo ffcms_url('map/index'); else: ?>javascript:;<?php endif; ?>"><?php echo ffcms_default($miaopon['theme']['map']['title'],'最新'); ?><em class="new_date"><?php echo ffcms_data_count(0,'today','vod'); ?></em></a>
                    </span>
                </div>
                <div class="cbox_list">
                <div class="cbox1">
                <ul class="vodlist vodlist_wi <?php if($miaopon['theme']['hotvod']['num']=='6'): ?>list_v6<?php elseif($miaopon['theme']['hotvod']['num']=='12'): ?>list_v12<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['hotvod']['num']).'","paging":"no","type":"all","level":"1","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                <div class="cbox2 hide">
                <ul class="vodlist vodlist_wi <?php if($miaopon['theme']['hotvod']['num']=='6'): ?>list_v6<?php elseif($miaopon['theme']['hotvod']['num']=='12'): ?>list_v12<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['hotvod']['num']).'","paging":"no","type":"all","level":"1","start":"'.($miaopon['theme']['hotvod']['num']+1).'","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                <div class="cbox3 hide">
                <ul class="vodlist vodlist_wi <?php if($miaopon['theme']['hotvod']['num']=='6'): ?>list_v6<?php elseif($miaopon['theme']['hotvod']['num']=='12'): ?>list_v12<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['hotvod']['num']).'","paging":"no","type":"all","level":"1","start":"'.($miaopon['theme']['hotvod']['num']*2+1).'","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                </div>
            </div>
        </div>
        <?php endif; if($miaopon['theme']['ads']['btn']==1||$miaopon['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($miaopon['theme']['ads']['all']['btn'] == 1): ?>
<div class="pannel ads_all clearfix">
	<div id="1003" class="ads ads_w">
		<?php echo $miaopon['theme']['ads']['all']['content']; ?>
	</div>
</div>
<script type="text/javascript">var o = document.getElementById("1003");var h = o.offsetHeight; if (h > 0) {} else {$(".pannel.ads_all").addClass("hide");}</script>
<?php endif; endif; if($miaopon['theme']['art']['hbtn'] == 1): ?>
        <div class="row tit_up">
            <?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
            <div class="pannel">
                <div class="pannel_head clearfix">
                    <a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;换一换</a>
                    <h2 class="title"><i class="iconfont">&#xe630;</i><?php echo ffcms_default($miaopon['theme']['art']['htitle'],$vo1['type_name']); ?></h2>
                    <a class="text_muted pull_left" href="<?php echo ffcms_url_type($vo1); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
                    <span class="hidden_xs pull_left">
						<?php $__TAG__ = '{"num":"5","parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <span class="split_line"></span><a href="<?php echo ffcms_url_type($vo2); ?>" class="text_muted"><?php echo $vo2['type_name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </span>
                </div>
                <div class="cbox_list">
                <div class="cbox1">
                <ul class="arthom_list <?php if($miaopon['theme']['art']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['art']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['art']['hnum']).'","type":"'.$vo1['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['art_pic'] == ''): ?>
<li class="arthom_item no_pic num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">
		<div class="art_date">
			<span class="day_date"><?php echo date('d',$vo['art_time']); ?></span>
			<span class="split_line"></span>
			<span class="year_month">
			<p><?php echo $vo['type']['type_name']; ?></p><p><?php echo date('Y年m月',$vo['art_time']); ?></p>
			</span>
		</div>
		<div class="art_from"><i class="iconfont">&#xe62b;</i>&nbsp;<?php echo ffcms_default($vo['art_from'],'网络'); ?></div>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php else: ?>
<li class="arthom_item num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">						
		<span class="look hidden_xs"></span>
		<span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                <div class="cbox2 hide">
                <ul class="arthom_list <?php if($miaopon['theme']['art']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['art']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['art']['hnum']).'","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['art']['hnum']+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['art_pic'] == ''): ?>
<li class="arthom_item no_pic num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">
		<div class="art_date">
			<span class="day_date"><?php echo date('d',$vo['art_time']); ?></span>
			<span class="split_line"></span>
			<span class="year_month">
			<p><?php echo $vo['type']['type_name']; ?></p><p><?php echo date('Y年m月',$vo['art_time']); ?></p>
			</span>
		</div>
		<div class="art_from"><i class="iconfont">&#xe62b;</i>&nbsp;<?php echo ffcms_default($vo['art_from'],'网络'); ?></div>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php else: ?>
<li class="arthom_item num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">						
		<span class="look hidden_xs"></span>
		<span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                <div class="cbox3 hide">
                <ul class="arthom_list <?php if($miaopon['theme']['art']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['art']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['art']['hnum']).'","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['art']['hnum']*2+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['art_pic'] == ''): ?>
<li class="arthom_item no_pic num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">
		<div class="art_date">
			<span class="day_date"><?php echo date('d',$vo['art_time']); ?></span>
			<span class="split_line"></span>
			<span class="year_month">
			<p><?php echo $vo['type']['type_name']; ?></p><p><?php echo date('Y年m月',$vo['art_time']); ?></p>
			</span>
		</div>
		<div class="art_from"><i class="iconfont">&#xe62b;</i>&nbsp;<?php echo ffcms_default($vo['art_from'],'网络'); ?></div>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php else: ?>
<li class="arthom_item num_<?php echo $key; ?>">
	<a class="artlist_thumb lazyload" href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" data-original="<?php echo ffcms_url_img($vo['art_pic']); ?>">						
		<span class="look hidden_xs"></span>
		<span class="pic_text text_right"><?php echo $vo['type']['type_name']; ?></span>
	</a>	
	<div class="arthom_title"><a href="<?php echo ffcms_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo $vo['art_name']; ?></a></div>	
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div><?php endif; ?>
        <div class="vod_row tit_up">
           <?php $__TAG__ = '{"ids":"'.$miaopon['theme']['type']['hom'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;if($vo1['type_id'] != 5): ?>
           <div class="pannel">
                <div class="pannel_head clearfix">
                    <a class="text_muted pull_right v_change" href="javascript:;"><i class="iconfont">&#xe62a;</i>&nbsp;换一换</a>
                    <h2 class="title"><?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; ?><?php echo $vo1['type_name']; ?></h2>
                    <a class="text_muted pull_left" href="<?php echo ffcms_url_type($vo1); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
                    <span class="hidden_xs pull_left">
						<?php $__TAG__ = '{"num":"3","paging":"no","type":"'.$vo1['type_id'].'","order":"dasc","by":"hits","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;if(in_array(($vo1['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
                        <span class="split_line"></span><a href="<?php echo ffcms_url_vod_play($vo2,['sid'=>$vo2['sid'],'nid'=>1]); ?>" title="<?php echo $vo2['vod_name']; ?>" class="text_muted"><?php echo ffcms_substring($vo2['vod_name'],16); ?></a>
                        <?php else: ?>
                        <span class="split_line"></span><a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo2,['sid'=>$vo2['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo2); ?>"<?php endif; ?> title="<?php echo $vo2['vod_name']; ?>" class="text_muted"><?php echo ffcms_substring($vo2['vod_name'],16); ?></a>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </span>
                </div>
                <?php if($vo1['type_id']==$miaopon['theme']['type']['zb']): ?>
                <div class="cbox_list">
					<div class="cbox1">
                	<ul class="vodlist vodlist_wi zbvodlist_hom <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						   <li class="zbvodlist_item num_<?php echo $key; ?>">
    <a class="zbvodlist_box" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>">
	<span class="zbvodlist_thumb lazyload" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>"></span>									
	<p class="zbvodlist_title"><?php echo $vo['vod_name']; ?></p>
	</a>
</li>

						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                    </div>
                    <div class="cbox2 hide">
                	<ul class="vodlist vodlist_wi zbvodlist_hom <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['vod']['hnum']+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						   <li class="zbvodlist_item num_<?php echo $key; ?>">
    <a class="zbvodlist_box" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>">
	<span class="zbvodlist_thumb lazyload" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>"></span>									
	<p class="zbvodlist_title"><?php echo $vo['vod_name']; ?></p>
	</a>
</li>

						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                    </div>
                    <div class="cbox3 hide">
                	<ul class="vodlist vodlist_wi zbvodlist_hom <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['vod']['hnum']*2+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						   <li class="zbvodlist_item num_<?php echo $key; ?>">
    <a class="zbvodlist_box" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>">
	<span class="zbvodlist_thumb lazyload" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>"></span>									
	<p class="zbvodlist_title"><?php echo $vo['vod_name']; ?></p>
	</a>
</li>

						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                    </div>
                </div>
                <?php else: ?>
                <div class="cbox_list">
					<div class="cbox1">
					<ul class="vodlist <?php if(in_array(($vo1['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>vodlist_hb <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; else: ?>vodlist_wi <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v6<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v12<?php endif; endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					</div>
					<div class="cbox2 hide">
					<ul class="vodlist <?php if(in_array(($vo1['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>vodlist_hb <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; else: ?>vodlist_wi <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v6<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v12<?php endif; endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['vod']['hnum']+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					</div>
					<div class="cbox3 hide">
					<ul class="vodlist <?php if(in_array(($vo1['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>vodlist_hb <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v10<?php endif; else: ?>vodlist_wi <?php if($miaopon['theme']['vod']['hnum']=='6'): ?>list_v6<?php elseif($miaopon['theme']['vod']['hnum']=='12'): ?>list_v12<?php endif; endif; ?> clearfix">
						<?php $__TAG__ = '{"num":"'.($miaopon['theme']['vod']['hnum']).'","paging":"no","type":"'.$vo1['type_id'].'","start":"'.($miaopon['theme']['vod']['hnum']*2+1).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($feifeicms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo ffcms_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo ffcms_default(ffcms_filter_html(ffcms_url_create(ffcms_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					</div>
                </div>
                <?php endif; ?>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php if($miaopon['theme']['actor']['btn'] == 1): if($miaopon['theme']['actor']['hbtn'] == 1): ?>
        <div class="row tit_up">
            <div class="pannel">
                <div class="pannel_head clearfix">
                    <h2 class="title"><i class="iconfont">&#xe629;</i><?php echo ffcms_default($miaopon['theme']['actor']['htitle'],'荧幕热星'); ?></h2>
                    <a class="text_muted pull_left" href="<?php echo ffcms_url('actor/index'); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
                </div>
                <ul class="actor_hom vodlist_sh list_scroll clearfix">
				<?php $__TAG__ = '{"num":"8","level":"1,9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li class="actorlist_item">
				  <div class="actorlist_box">
					<a class="vodlist_thumb lazyload" href="<?php echo ffcms_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>" data-original="<?php echo ffcms_url_img($vo['actor_pic']); ?>"></a>
					<div class="actorlist_tit">									
						<a href="<?php echo ffcms_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>"><?php echo $vo['actor_name']; ?></a>
					</div>
				  </div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <?php endif; endif; if($miaopon['theme']['topic']['btn'] == 1): if($miaopon['theme']['topic']['hbtn'] == 1): ?>
        <div class="row tit_up">
            <div class="pannel">
                <div class="pannel_head clearfix">
                    <h2 class="title"><i class="iconfont">&#xe64c;</i><?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?></h2>
                    <a class="text_muted pull_left" href="<?php echo ffcms_url_topic_index(); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
                </div>
                <ul class="topiclist topic_hom <?php if($miaopon['theme']['topic']['hnum']=='6'): ?>list_v5<?php elseif($miaopon['theme']['topic']['hnum']=='12'): ?>list_v10<?php endif; ?> clearfix">
                    <?php $__TAG__ = '{"num":"'.($miaopon['theme']['topic']['hnum']).'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					   <li class="topiclist_item num_<?php echo $key; ?>">
	<a class="topiclist_thumb lazyload" href="<?php echo ffcms_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" data-original="<?php echo ffcms_url_img($vo['topic_pic']); ?>">						
		<span class="play hidden_xs"></span>		
		<span class="pic_text text_right"><i class="iconfont">&#xe62f;</i>&nbsp;<?php echo count(explode(',',$vo['topic_rel_vod'])); ?>个影片</span>
	</a>									
	<div class="topiclist_title">
	    <a href="<?php echo ffcms_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"><?php echo $vo['topic_name']; ?></a>
	    <p class="topiclist_blurb"><?php echo ffcms_default($vo['topic_sub'],'暂无简介'); ?></p>
	</div>
</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div><?php endif; endif; if($miaopon['theme']['rank']['hbtn'] == 1): ?>
       	<div class="row tit_up">
            <div class="pannel">
            <div class="pannel_head clearfix">
                    <h2 class="title"><i class="iconfont">&#xe618;</i><?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></h2>
                    <?php if($miaopon['theme']['rank']['btn'] == 1): ?>
                    <a class="text_muted pull_left" href="<?php echo ffcms_url('label/rank'); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
                    <?php endif; ?>
                </div>
            <div class="rank_hom list_scroll">
        		<!-- 排行榜列表 -->
				<?php $__TAG__ = '{"num":"4","ids":"'.$miaopon['theme']['rank']['hid'].'","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($miaopon['theme']['rank']['hby'] == 'week'): ?>
<div class="rank_info">
    <div class="list_info">
        <div class="pannel_head clearfix">
            <h3 class="title"><?php echo $vo['type_name']; ?>周<?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></h3>	
        </div>
        <ul class="part_rows">
            <?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> <li class="ranklist_item">
    <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
            <?php if($vo['type_id_1']==1): if($vo['vod_score'] == 0): else: ?>
            <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
            <?php endif; endif; ?>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
              <span class="text_muted pull_right"><i class="iconfont">&#xe631;</i>
<?php echo $vo['vod_hits_week']; ?>
              </span>
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
         <p class="vodlist_sub">简介：<?php echo ffcms_default(ffcms_filter_html($vo['vod_content']),'暂无简介'); ?></p>
	     <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
	     <p class="vodlist_sub"><?php echo ffcms_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_class'],'未知'); ?></p>
	     <p><span class="vodlist_sub">状态：<?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>
 <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"4","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="part_eone">
                <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
                <a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
				<a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: ?>
				<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
				<?php endif; endif; ?>
				<span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_week']; ?></span><?php echo $vo['vod_name']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div><?php endif; if($miaopon['theme']['rank']['hby'] == 'month'): ?>
<div class="rank_info">
    <div class="list_info">
        <div class="pannel_head clearfix">
            <h3 class="title"><?php echo $vo['type_name']; ?>月<?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></h3>	
        </div>
        <ul class="part_rows">
            <?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> <li class="ranklist_item">
    <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
            <?php if($vo['type_id_1']==1): if($vo['vod_score'] == 0): else: ?>
            <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
            <?php endif; endif; ?>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
              <span class="text_muted pull_right"><i class="iconfont">&#xe631;</i>
<?php echo $vo['vod_hits_month']; ?>
              </span>
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
         <p class="vodlist_sub">简介：<?php echo ffcms_default(ffcms_filter_html($vo['vod_content']),'暂无简介'); ?></p>
	     <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
	     <p class="vodlist_sub"><?php echo ffcms_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_class'],'未知'); ?></p>
	     <p><span class="vodlist_sub">状态：<?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>
 <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"4","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="part_eone">
                <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
                <a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
				<a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: ?>
				<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
				<?php endif; endif; ?>
				<span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_month']; ?></span><?php echo $vo['vod_name']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div><?php endif; if($miaopon['theme']['rank']['hby'] == 'all'): ?>
<div class="rank_info">
    <div class="list_info">
        <div class="pannel_head clearfix">
            <h3 class="title"><?php echo $vo['type_name']; ?><?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></h3>	
        </div>
        <ul class="part_rows">
            <?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?> <li class="ranklist_item">
    <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo ffcms_url_img($vo['vod_pic']); ?>">						
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
            <?php if($vo['type_id_1']==1): if($vo['vod_score'] == 0): else: ?>
            <span class="pic_text text_right text_dy"><?php echo $vo['vod_score']; ?></span>
            <?php endif; endif; ?>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
              <span class="text_muted pull_right"><i class="iconfont">&#xe631;</i>
<?php echo $vo['vod_hits']; ?>
              </span>
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
         <p class="vodlist_sub">简介：<?php echo ffcms_default(ffcms_filter_html($vo['vod_content']),'暂无简介'); ?></p>
	     <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
	     <p class="vodlist_sub"><?php echo ffcms_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo ffcms_default($vo['vod_class'],'未知'); ?></p>
	     <p><span class="vodlist_sub">状态：<?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>
 <?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"4","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="part_eone">
                <?php if($vo['type_id_1']==$miaopon['theme']['type']['zb']): ?>
                <a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: if(in_array(($vo['type_id']), is_array($miaopon['theme']['type']['hb'])?$miaopon['theme']['type']['hb']:explode(',',$miaopon['theme']['type']['hb']))): ?>
				<a href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
				<?php else: ?>
				<a <?php if($miaopon['theme']['playlink']['btn'] == 1): ?>href="<?php echo ffcms_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo ffcms_url_vod_detail($vo); ?>"<?php endif; ?>>
				<?php endif; endif; ?>
				<span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits']; ?></span><?php echo $vo['vod_name']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				<!-- end 排行榜列表 -->
           </div>
           </div>
        </div><?php endif; if($miaopon['theme']['links']['btn'] == 1): ?>
<div class="link_row">
	<div class="pannel clearfix">
		<div class="pannel_head clearfix">
			<h3 class="title"><?php echo ffcms_default($miaopon['theme']['links']['title'],'友情链接'); ?></h3>	
		</div>
		<ul class="link_text list_scroll clearfix">
			<?php $__TAG__ = '{"num":"'.($miaopon['theme']['links']['num']).'","type":"all","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['link_type'] == 0): ?>
			<li><a class="text_muted" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_name']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a>
					</li>
			<?php elseif($vo['link_type'] == 1): ?>
			<li><a class="text_muted" href="<?php echo $vo['link_url']; ?>" title="<?php echo $vo['link_name']; ?>" target="_blank"><img src="<?php echo $vo['link_logo']; ?>" class="link_logo"></a>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div><?php endif; ?>
    </div>
    <div class="foot <?php if($miaopon['theme']['fnav']['btn'] == 1): ?>foot_nav<?php endif; ?> clearfix">
<div class="container">
	<ul class="extra clearfix">
		<li id="backtop-ico">
			<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部"><span class="top_ico"><i class="iconfont">&#xe628;</i></span></a>
		</li>
		<?php if($miaopon['theme']['qq']['btn'] == 1): ?>
    	<li>
			<a href="<?php echo $miaopon['theme']['qq']['link']; ?>" title="<?php echo ffcms_default($miaopon['theme']['qq']['title'],'QQ联系'); ?>" target="_blank"><span class="m_ico"><i class="iconfont">&#xe66a;</i></span></a>
	    </li>
	    <?php endif; if($miaopon['theme']['color']['mbtn'] == 1): ?>
		<li>
		<a id="black" class="mycolor <?php if($miaopon['theme']['color']['ms'] == 'black'): ?>hide<?php endif; ?>" href="javascript:void(0)" title="暗夜模式"><span class="m_ico theme_ico"><i class="iconfont">&#xe656;</i></span></a>
	    <a id="white" class="mycolor <?php if($miaopon['theme']['color']['ms'] == 'white'): ?>hide<?php endif; ?>" href="javascript:void(0)" title="白昼模式"><span class="m_ico theme_ico"><i class="iconfont">&#xe657;</i></span></a>
 	    </li>
 	    <?php endif; if($miaopon['theme']['color']['sbtn'] == 1): ?>
  	    <li>
			<a class="btn_theme" href="javascript:void(0)" title="主题颜色"><span class="m_ico"><i class="iconfont">&#xe665;</i></span></a>
    		<div class="sideslip">
				<div class="themecolor">
				  <p class="text_center"><i class="iconfont">&#xe665;</i>&nbsp;主题颜色</p>
					<ul id="themes"> 
						<li id="default" class="color_default">橘色</li>
						<li id="green" class="color_green">绿色</li>
						<li id="blue" class="color_blue">蓝色</li> 
						<li id="pink" class="color_pink">粉色</li>
						<li id="red" class="color_red">红色</li>
						<li id="gold" class="color_gold">金色</li>
					</ul>
				</div>
			</div>
	    </li>
	    <?php endif; ?>
	    <li class="hidden_xs">
			<a class="mobil_q" href="javascript:void(0)" title="手机访问"><span class="m_ico"><i class="iconfont">&#xe620;</i></span></a>
			<div class="sideslip">
				<div class="cans"></div>
				<div class="col_pd">
				  <p class="qrcode"></p>
				  <p class="text_center">扫码用手机访问</p>
				</div>
			</div>
	    </li>
	</ul>
	<div class="fo_t">
        <?php echo $miaopon['theme']['foot']['text']; ?>
        <p>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo $feifeicms['site_url']; ?>&nbsp;&nbsp;E-Mail：<?php echo $feifeicms['site_email']; ?>&nbsp;&nbsp;<span <?php if($miaopon['theme']['tj']['btn'] == 0): ?>class="hide"<?php endif; ?>><?php echo $feifeicms['site_tj']; ?></span></p>
    </div>						
    <div class="map_nav">
		<a href="<?php echo ffcms_url('rss/index'); ?>" target="_blank">RSS订阅</a>
		<span class="split_line"></span>
		<a href="<?php echo ffcms_url('rss/baidu'); ?>" target="_blank">百度蜘蛛</a>
		<span class="split_line"></span>
		<a href="<?php echo ffcms_url('rss/sm'); ?>" target="_blank">神马爬虫</a>
		<span class="split_line"></span>
		<a href="<?php echo ffcms_url('rss/sogou'); ?>" target="_blank">搜狗蜘蛛</a>
		<span class="split_line"></span>
		<a href="<?php echo ffcms_url('rss/so'); ?>" target="_blank">奇虎地图</a>
		<span class="split_line hidden_xs"></span>
		<a class="hidden_xs" href="<?php echo ffcms_url('rss/google'); ?>" target="_blank">谷歌地图</a>
		<span class="split_line hidden_xs"></span>
		<a class="hidden_xs" href="<?php echo ffcms_url('rss/bing'); ?>" target="_blank">必应爬虫</a>
	</div>
</div>
<?php if($miaopon['theme']['fnav']['btn'] == 1): ?>
<div class="foot_mnav hidden_mb">
	<ul class="foot_rows">
	    <?php if(strpos($miaopon['theme']['fnav']['ym'],'h') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['aid'] == 1): ?>class="active" <?php endif; ?>href="<?php echo $feifeicms['path']; ?>">
				<?php if($feifeicms['aid'] == 1): ?><i class="iconfont">&#xe678;</i><?php else: ?><i class="iconfont">&#xe634;</i><?php endif; ?>
				<span class="foot_font">首页</span>
			</a>
		</li>
		<?php endif; $__TAG__ = '{"num":"5","order":"asc","by":"sort","ids":"'.$miaopon['theme']['fnav']['id'].'","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
		<li class="foot_text">
			<a <?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?> href="<?php echo ffcms_url_type($vo1); ?>">	
				<?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'])): if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe66f;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe677;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe671;<?php break; case "2": ?>&#xe672;<?php break; case "3": ?>&#xe676;<?php break; case "4": ?>&#xe66c;<?php break; case "5": ?>&#xe67d;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe66b;<?php break; default: ?>&#xe675;<?php endswitch; ?></i><?php endif; else: if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $miaopon['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; endif; ?>
				<span class="foot_font"><?php echo $vo1['type_name']; ?></span>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; if($miaopon['theme']['fnav']['zdybtn1'] == 1): ?>
		<li class="foot_text">
			<a href="<?php echo $miaopon['theme']['fnav']['zdylink1']; ?>" target="_blank">		
				<i class="iconfont">&#xe666;</i>
				<span class="foot_font"><?php echo $miaopon['theme']['fnav']['zdyname1']; ?></span>
			</a>
		</li>
		<?php endif; if($miaopon['theme']['fnav']['zdybtn2'] == 1): ?>
		<li class="foot_text">
			<a href="<?php echo $miaopon['theme']['fnav']['zdylink2']; ?>" target="_blank">		
				<i class="iconfont">&#xe668;</i>
				<span class="foot_font"><?php echo $miaopon['theme']['fnav']['zdyname2']; ?></span>
			</a>
		</li>
		<?php endif; if($miaopon['theme']['topic']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'a') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['mid'] == 3): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url_topic_index(); ?>">		
				<?php if($feifeicms['mid'] == 3): ?><i class="iconfont">&#xe67c;</i><?php else: ?><i class="iconfont">&#xe64c;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['topic']['title'],'专题'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($GLOBALS['config']['gbook']['status'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'b') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['aid'] == 4): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('gbook/index'); ?>">		
				<?php if($feifeicms['aid'] == 4): ?><i class="iconfont">&#xe66d;</i><?php else: ?><i class="iconfont">&#xe632;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['gbook']['title'],'留言'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($miaopon['theme']['map']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'c') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['aid'] == 2): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('map/index'); ?>">		
				<?php if($feifeicms['aid'] == 2): ?><i class="iconfont">&#xe66e;</i><?php else: ?><i class="iconfont">&#xe652;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['map']['title'],'最新'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($miaopon['theme']['rank']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'d') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['aid'] == 7): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('label/rank'); ?>">		
				<i class="iconfont">&#xe618;</i>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['rank']['title'],'排行榜'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($miaopon['theme']['actor']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'e') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['mid'] == 8): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('actor/index'); ?>">		
				<?php if($feifeicms['mid'] == 8): ?><i class="iconfont">&#xe670;</i><?php else: ?><i class="iconfont">&#xe629;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['actor']['title'],'明星'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($miaopon['theme']['role']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'f') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['mid'] == 9): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('role/index'); ?>">		
				<?php if($feifeicms['mid'] == 9): ?><i class="iconfont">&#xe674;</i><?php else: ?><i class="iconfont">&#xe654;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['role']['title'],'角色'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($miaopon['theme']['plot']['btn'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'h') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['mid'] == 10): ?>class="active" <?php endif; ?>href="<?php echo ffcms_url('plot/index'); ?>">		
				<?php if($feifeicms['mid'] == 10): ?><i class="iconfont">&#xe67d;</i><?php else: ?><i class="iconfont">&#xe630;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['plot']['title'],'剧情'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($GLOBALS['config']['user']['status'] == 1): if(strpos($miaopon['theme']['fnav']['ym'],'g') !==false): ?>
		<li class="foot_text">
			<a <?php if($feifeicms['aid'] == 6): ?>class="active"<?php endif; ?> href="<?php if($user['user_id']): ?><?php echo ffcms_url('user/index'); else: ?><?php echo ffcms_url('user/login'); endif; ?>">	
				<?php if($feifeicms['aid'] == 6): ?><i class="iconfont">&#xe67a;</i><?php else: ?><i class="iconfont">&#xe62b;</i><?php endif; ?>
				<span class="foot_font"><?php echo ffcms_default($miaopon['theme']['user']['title'],'会员'); ?></span>
			</a>
		</li>
		<?php endif; endif; ?>
	</ul>
</div>
<?php endif; if($miaopon['theme']['ads']['btn']==1||$miaopon['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($miaopon['theme']['ads']['bottom']['btn'] == 1): ?>
<div id="bottom_ads" class="hl_bottom_ads">
<a class="close_ads_btn" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>
<iframe width="100%" height="100%" id="adiframe" class="bottom_ads_box" src="<?php echo ffcms_url('label/ads_iframe'); ?>" frameborder="0" border="0" marginwidth="0" marginheight="0" scrolling="no" onLoad="iFrameHeight()"></iframe>
<script type="text/javascript">
	function iFrameHeight() {
	var ifm= document.getElementById("adiframe");
		var subWeb = document.frames ? document.frames["adiframe"].document : ifm.contentDocument;
		if(ifm != null && subWeb != null) {
			ifm.style.height = 'auto';
			ifm.style.height = subWeb.body.scrollHeight+'px';
		}
		var height = $("#adiframe").height();
		if (height > 0) {
			$(".foot").addClass("foot_stem");
		}
	};
</script>
</div>
<?php endif; endif; ?>
<div class="infobox" style="display: none!important;">
<input type="hidden" id="wx_title" value="<?php echo ffcms_default($miaopon['theme']['weixin']['title'],'关注我们'); ?>">
<input type="hidden" id="wx_text" value="<?php echo ffcms_default($miaopon['theme']['weixin']['text'],'扫描二维码关注我们'); ?>">
<input type="hidden" id="wx_qrcode" value="<?php echo ffcms_url_img($miaopon['theme']['weixin']['qrcode']); ?>">
<input type="hidden" id="zans_title" value="<?php echo ffcms_default($miaopon['theme']['zans']['title'],'感谢赞赏'); ?>">
<input type="hidden" id="zans_text" value="<?php echo ffcms_default($miaopon['theme']['zans']['text'],'多少都是支持'); ?>">
<input type="hidden" id="zans_qrcode" value="<?php echo ffcms_url_img($miaopon['theme']['zans']['qrcode']); ?>">
<input type="hidden" id="shareurl" value="<?php echo $miaopon['theme']['share']['link']; ?>">
<input type="hidden" id="version"  value="<?php echo $version; ?>">
<?php if($miaopon['theme']['share']['api']==sina): ?>
<input type="hidden" id="openapi"  value="sina">
<input type="hidden" id="apiurl"  value="<?php echo ffcms_default($miaopon['theme']['share']['apiurl'],'#'); ?>">
<?php endif; if($miaopon['theme']['share']['api']==bd): ?>
<input type="hidden" id="openapi"  value="bd">
<input type="hidden" id="Tok"  value="<?php echo ffcms_default($miaopon['theme']['share']['tok'],'#'); ?>">
<?php if($miaopon['theme']['share']['term']==long): ?><input type="hidden" id="Term"  value="long-term"><?php endif; if($miaopon['theme']['share']['term']==one): ?><input type="hidden" id="Term"  value="1-year"><?php endif; endif; ?>
</div>
<div id="show" style="display: none;">
    <div class="copy-tip">
       <p>耶～～复制成功</p>
    </div>
</div>
<div class="am-share">
	<div class="am-share-url">
	<span class="title_span">复制下方链接，去粘贴给好友吧：</span>
	<span id="short" class="url_span shorturl"><?php echo $obj['vod_name']; ?><?php echo $obj['art_name']; if($feifeicms['mid'] == 3): ?>专题-<?php echo $obj['topic_name']; endif; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>-http://<?php echo $feifeicms['site_url']; ?><?php echo ffcms_url_vod_play($obj,['sid'=>$param['sid'],'nid'=>$param['nid']]); ?></span>
	</div>
	<div class="am-share-footer">
	<span class="share_btn">取消</span>
	<span id="btn" class="copy_btn" data-clipboard-action="copy" data-clipboard-target="#short">一键复制</span>
	</div>
</div>
</div>
<div class="miaopon_history_pop <?php if($GLOBALS['config']['user']['status'] == 1): ?>user_log<?php endif; ?>">
	<div class="miaopon_history_bg">
		<div class="miaopon_history_title"><span>观看记录</span><a id="close_history" target="_self" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a></div>
		<div class="miaopon_history_box">
			<ul class="vodlist" id="miaopon_history"></ul>
		</div>
	</div>
</div>
<div style="display: none;" class="ffcms_timming" data-file="" ></div>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>js/jquery.stem.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/hlexpand.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/home.js"></script>
<?php if($miaopon['theme']['search']['lxbtn'] == 1): ?>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/jquery.ac.js"></script>
<?php endif; if($miaopon['theme']['font'] == 1): ?>
<script type="text/javascript" src="<?php echo $feifeicms['path_tpl']; ?>demo/js/strantext.js"></script><?php endif; use think\Db;

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
</body>
</html>