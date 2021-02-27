<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'feifeicmsv10',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'ffcms_',
    'backup_path' => './application/data/backup/database/',
    'part_size' => 20971520,
    'compress' => 1,
    'compress_level' => 4,
  ),
  'site' => 
  array (
    'site_name' => '喵哣影院-全网最新电影热播电视剧在线观看',
    'site_url' => 'www.miaopon.com',
    'site_wapurl' => 'wap.miaopon.com',
    'site_keywords' => '高清视频,搞笑视频,视频分享,免费视频,在线视频,预告片',
    'site_description' => '提供最新最快的海量高清视频在线观看',
    'site_icp' => ' ICP备1306428988号',
    'site_qq' => '123456789',
    'site_email' => '123456789@QQ.COM',
    'install_dir' => '/',
    'site_logo' => 'static/images/logo.png',
    'site_waplogo' => 'static/images/logo.png',
    'Tpl_dir' => 'miaopon',
    'html_dir' => 'html',
    'mob_status' => '2',
    'mob_Tpl_dir' => 'miaopon',
    'mob_html_dir' => 'html',
    'site_tj' => '<script type="text/javascript" src="//js.users.51.la/20816665.js"></script>',
    'site_status' => '1',
    'site_close_tip' => '站点暂时关闭，请稍后再访问，谢谢！',
    'ads_dir' => 'ads',
    'mob_ads_dir' => 'ads',
  ),
  'app' => 
  array (
    'pathinfo_depr' => '/',
    'suffix' => 'html',
    'popedom_filter' => '0',
    'cache_type' => 'file',
    'cache_host' => '127.0.0.1',
    'cache_port' => '6379',
    'cache_username' => '',
    'cache_password' => '123456',
    'cache_flag' => 'a6bcf9aa58',
    'cache_core' => '0',
    'cache_time' => '3600',
    'cache_page' => '0',
    'cache_time_page' => '3600',
    'compress' => '0',
    'search' => '1',
    'search_timespan' => '3',
    'search_vod_rule' => 'vod_en|vod_sub',
    'search_art_rule' => 'art_en|art_sub',
    'copyright_status' => '1',
    'copyright_notice' => '该视频由于版权限制，暂不提供播放，谢谢！',
    'browser_junmp' => '0',
    'collect_timespan' => '3',
    'pagesize' => '20',
    'makesize' => '30',
    'admin_login_verify' => '1',
    'editor' => 'ueditor',
    'player_sort' => '1',
    'encrypt' => '2',
    'search_hot' => '我和我的祖国,火影忍者,复仇者联盟,战狼,红海行动',
    'art_extend_class' => '段子手,私房话,八卦精,爱生活,汽车迷,科技咖,美食家,辣妈帮',
    'vod_extend_class' => '爱情,动作,喜剧,战争,科幻,剧情,武侠,冒险,枪战,恐怖,微电影,其它',
    'vod_extend_state' => '正片,预告片,花絮',
    'vod_extend_version' => '高清版,剧场版,抢先版,OVA,TV,影院版',
    'vod_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'vod_extend_lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'vod_extend_year' => '2020,2019,2018,2017,2016,2015,2014,2013,2012,2011,2010',
    'vod_extend_weekday' => '一,二,三,四,五,六,日',
    'actor_extend_area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'filter_words' => 'www,http,com,net',
    'extra_var' => '',
  ),
  'user' => 
  array (
    'status' => '1',
    'reg_open' => '1',
    'reg_status' => '1',
    'reg_phone_sms' => '0',
    'reg_email_sms' => '0',
    'reg_verify' => '0',
    'login_verify' => '0',
    'reg_points' => '10',
    'reg_num' => '',
    'invite_reg_points' => '10',
    'invite_visit_points' => '1',
    'invite_visit_num' => '',
    'reward_status' => '1',
    'reward_ratio' => '1',
    'reward_ratio_2' => '3',
    'reward_ratio_3' => '5',
    'cash_status' => '1',
    'cash_ratio' => '100',
    'cash_min' => '1',
    'trysee' => '1',
    'vod_points_type' => '0',
    'art_points_type' => '0',
    'portrait_status' => '1',
    'portrait_size' => '100x100',
    'filter_words' => 'admin,cao,sex,xxx',
  ),
  'gbook' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'comment' => 
  array (
    'status' => '1',
    'audit' => '0',
    'login' => '0',
    'verify' => '1',
    'pagesize' => '20',
    'timespan' => '3',
  ),
  'upload' => 
  array (
    'thumb' => '1',
    'thumb_size' => '300x300',
    'thumb_type' => '1',
    'watermark' => '0',
    'watermark_location' => '7',
    'watermark_content' => 'www.baidu.com',
    'watermark_size' => '15',
    'watermark_color' => '#FF0000',
    'protocol' => 'http',
    'mode' => 'local',
    'remoteurl' => 'http://img.baidu.com/',
    'api' => 
    array (
      'ftp' => 
      array (
        'host' => '',
        'port' => '21',
        'user' => 'test',
        'pwd' => 'test',
        'path' => '/',
        'url' => '',
      ),
      'qiniu' => 
      array (
        'bucket' => '',
        'accesskey' => '',
        'secretkey' => '',
        'url' => '',
      ),
      'uomg' => 
      array (
        'openid' => '',
        'key' => '',
        'type' => 'ali',
      ),
      'upyun' => 
      array (
        'bucket' => '',
        'username' => '',
        'pwd' => '',
        'url' => '',
      ),
      'weibo' => 
      array (
        'user' => '',
        'pwd' => '',
        'size' => 'large',
        'cookie' => '',
        'time' => '1546239694',
      ),
    ),
  ),
  'interface' => 
  array (
    'status' => 0,
    'pass' => '4QGBKEK49N5QGNL0',
    'vodtype' => '动作片=动作',
    'arttype' => '头条=头条',
  ),
  'pay' => 
  array (
    'min' => '10',
    'scale' => '1',
    'card' => 
    array (
      'url' => '',
    ),
    'alipay' => 
    array (
      'account' => '1234567890',
      'appid' => 'weeeeeeeeeee',
      'appkey' => 'eeeeeeeeeeeeee',
    ),
    'codepay' => 
    array (
      'appid' => '123456',
      'appkey' => 'cI1YHggnYbQyA8lLpOu7wXhtuVjULqZZ',
      'type' => '1,2,3',
      'act' => '0',
    ),
    'weixin' => 
    array (
      'appid' => '123456',
      'mchid' => '123456',
      'appkey' => '67890',
    ),
    'zhapay' => 
    array (
      'appid' => '123456',
      'appkey' => 'bW2V5oo3TdeXzwyjCwVwhX3guDGO8YDX',
      'type' => '1,2',
      'act' => '2',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '1',
      'class_filter' => '1',
      'psename' => '1',
      'psernd' => '0',
      'psesyn' => '0',
      'urlrole' => '1',
      'inrule' => ',f,g',
      'uprule' => ',a,b,c',
      'filter' => '色戒,色即是空',
      'namewords' => '第1季=第一季#第2季=第二季#第3季=第三季#第4季=第四季',
      'thesaurus' => ' =',
      'words' => '',
    ),
    'art' => 
    array (
      'status' => '1',
      'hits_start' => '1',
      'hits_end' => '1000',
      'updown_start' => '1',
      'updown_end' => '1000',
      'score' => '1',
      'pic' => '0',
      'tag' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'inrule' => ',b',
      'uprule' => ',a,d',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
    ),
    'actor' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '无奈的人',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'role' => 
    array (
      'status' => '0',
      'hits_start' => '1',
      'hits_end' => '999',
      'updown_start' => '1',
      'updown_end' => '999',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'uprule' => ',a,b,c',
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
    ),
    'website' => 
    array (
      'status' => '0',
      'hits_start' => '',
      'hits_end' => '',
      'updown_start' => '',
      'updown_end' => '',
      'score' => '0',
      'pic' => '0',
      'psernd' => '0',
      'psesyn' => '0',
      'filter' => '',
      'thesaurus' => '',
      'words' => '',
      'inrule' => ',a',
      'uprule' => ',',
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => 0,
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img.baidu.com/',
      'typefilter' => '',
      'datafilter' => ' vod_status=1',
      'cachetime' => '',
      'from' => '',
      'auth' => 'test.com#163.com',
    ),
    'art' => 
    array (
      'status' => 0,
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.baidu.com/',
      'typefilter' => '',
      'datafilter' => 'art_status=1',
      'cachetime' => '',
      'auth' => 'qq.com#baidu.com',
    ),
    'actor' => 
    array (
      'status' => '1',
      'charge' => '0',
      'pagesize' => '20',
      'imgurl' => 'http://img2.baidu.com/',
      'datafilter' => 'actor_status=1',
      'cachetime' => '',
      'auth' => '',
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => '1',
      'key' => 'aa',
      'secret' => 'bb',
    ),
    'weixin' => 
    array (
      'status' => '1',
      'key' => 'cc',
      'secret' => 'dd',
    ),
  ),
  'weixin' => 
  array (
    'status' => '1',
    'duijie' => 'wx.baidu.com',
    'sousuo' => 'wx.baidu.com',
    'token' => 'qweqwe',
    'guanzhu' => '欢迎关注',
    'wuziyuan' => '没找到资源，请更换关键词或等待更新',
    'wuziyuanlink' => 'demo.baidu.com',
    'bofang' => '0',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
  'view' => 
  array (
    'index' => '0',
    'map' => '0',
    'search' => '0',
    'rss' => '0',
    'label' => '0',
    'vod_type' => '0',
    'vod_show' => '0',
    'art_type' => '0',
    'art_show' => '0',
    'topic_index' => '0',
    'topic_detail' => '0',
    'vod_detail' => '0',
    'vod_play' => '0',
    'vod_down' => '0',
    'art_detail' => '0',
  ),
  'path' => 
  array (
    'topic_index' => 'topic/index',
    'topic_detail' => 'topic/{id}/index',
    'vod_type' => 'vodtypehtml/{id}/index',
    'vod_detail' => 'vodhtml/{id}/index',
    'vod_play' => 'vodplayhtml/{id}/index',
    'vod_down' => 'voddownhtml/{id}/index',
    'art_type' => 'arttypehtml/{id}/index',
    'art_detail' => 'arthtml/{id}/index',
    'page_sp' => '_',
    'suffix' => 'html',
  ),
  'rewrite' => 
  array (
    'suffix_hide' => '0',
    'route_status' => '1',
    'status' => '0',
    'vod_id' => '1',
    'art_id' => '0',
    'type_id' => '0',
    'topic_id' => '0',
    'actor_id' => '0',
    'role_id' => '0',
    'website_id' => '0',
    'route' => 'map   => map/index
rss   => rss/index

index-<page?>   => index/index

gbook-<page?>   => gbook/index
gbook$   => gbook/index

topic-<page?>   => topic/index
topic$  => topic/index
topicdetail-<id>   => topic/detail

actortype/<id>-<page?>   => actor/type
actortype/<id>   => actor/type
actor-<page?>   => actor/index
actor$ => actor/index
actordetail-<id>   => actor/detail
actorshow/<id>-<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/show
actorsearch/<wd?>-<area?>-<blood?>-<by?>-<letter?>-<level?>-<order?>-<page?>-<sex?>-<starsign?>   => actor/search

role-<page?>   => role/index
role$ => role/index
roledetail-<id>   => role/detail
roleshow/<by?>-<letter?>-<level?>-<order?>-<page?>-<rid?>   => role/show

websitetype/<id>-<page?>   => website/type
websitetype/<id>   => website/type
website-<page?>   => website/index
website$ => website/index
websitedetail-<id>   => website/detail
websiteshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<tag?>   => website/show
websitesearch/<wd?>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<tag?>   => website/search

vodtype/<id>-<page?>   => vod/type
vodtype/<id>   => vod/type
voddetail<id>   => vod/detail
vodrss-<id>   => vod/rss
vodplay/<id>-<sid>-<nid>   => vod/play
down/<id>-<sid>-<nid>   => vod/down
vodshow/<id>-<area?>-<by?>-<class?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/show
vodsearch/<wd?>-<actor?>-<area?>-<by?>-<class?>-<director?>-<lang?>-<letter?>-<level?>-<order?>-<page?>-<state?>-<tag?>-<year?>   => vod/search


arttype/<id>-<page?>   => art/type
arttype/<id>   => art/type
artshow-<id>   => art/show
artdetail-<id>-<page?>   => art/detail
artdetail-<id>   => art/detail
artrss-<id>-<page>   => art/rss
artshow/<id>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/show
artsearch/<wd?>-<by?>-<class?>-<level?>-<letter?>-<order?>-<page?>-<tag?>   => art/search

label-<file> => label/index',
  ),
  'email' => 
  array (
    'host' => 'smtp.qq.com',
    'port' => '587',
    'username' => '123456789@qq.com',
    'password' => '',
    'nick' => '飞飞CMS',
    'test' => '123456789@qq.com',
  ),
  'play' => 
  array (
    'width' => '100%',
    'height' => '100%',
    'widthmob' => '100%',
    'heightmob' => '100%',
    'widthpop' => '',
    'heightpop' => '',
    'second' => '',
    'prestrain' => '',
    'buffer' => '',
    'parse' => '',
    'autofull' => '1',
    'showtop' => '0',
    'showlist' => '0',
    'flag' => '0',
    'colors' => '',
  ),
  'sms' => 
  array (
    'type' => '',
    'appid' => 'xxx',
    'appkey' => 'xxxx',
    'sign' => '飞飞CMS',
    'tpl_code_reg' => 'SMS_123456789',
    'tpl_code_bind' => 'SMS_123456789',
    'tpl_code_findpass' => 'SMS_123456789',
  ),
  'extra' => 
  array (
  ),
  'seo' => 
  array (
    'vod' => 
    array (
      'name' => '视频首页',
      'key' => '高清短视频,搞笑视频,视频分享,免费视频,在线视频,预告片',
      'des' => '提供最新最快的海量高清视频在线观看',
    ),
    'art' => 
    array (
      'name' => '文章首页',
      'key' => '新闻资讯,娱乐新闻,八卦娱乐,狗仔队,重大事件',
      'des' => '提供最新最快的新闻资讯',
    ),
    'actor' => 
    array (
      'name' => '演员首页',
      'key' => '大陆明星,港台明星,日韩明星,欧美明星,最火明星',
      'des' => '明星个人信息介绍',
    ),
    'role' => 
    array (
      'name' => '角色首页',
      'key' => '电影角色,电视剧角色,动漫角色,综艺角色',
      'des' => '角色人物介绍',
    ),
    'plot' => 
    array (
      'name' => '剧情首页',
      'key' => '剧情连载,剧情更新,剧情前瞻,剧情完结',
      'des' => '提供最新的剧情信息',
    ),
  ),
);