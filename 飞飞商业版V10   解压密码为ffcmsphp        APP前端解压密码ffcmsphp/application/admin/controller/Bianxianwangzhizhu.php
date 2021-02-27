<?php
namespace app\admin\controller;
use think\Db;

class Bianxianwangzhizhu extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $param = input();
		$this->assign('csh',$this->shifouchushihua());
        $this->assign('param',$param);
        $this->assign('title','变现网蜘蛛统计插件');
        return $this->fetch('admin@Bianxianwangzhizhu/index');
    }


    public function shezhi()
    {
        $param = input();
        $this->assign('param',$param);
        $this->assign('title','设置');
		
		
		
		if($param['type']=='shezhi'){
			if(!empty($param['kaiqi'])){
				$shezhi['kaiqi']='1';
			}else{
				$shezhi['kaiqi']='0';
			}
			if(!empty($param['tongjixiangqing'])){
				$shezhi['tongjixiangqing']='1';
			}else{
				$shezhi['tongjixiangqing']='0';
			}
			$shezhi=json_encode($shezhi);
			@fwrite(fopen(APP_PATH.'data/config/bianxianwangzhizhushezhi.txt','wb'),$shezhi);
		}
		$shezhi='';
		$shezhi = ffcms_read_file( APP_PATH.'data/config/bianxianwangzhizhushezhi.txt');
		$shezhi=json_decode($shezhi,true);
		if($shezhi['kaiqi']==''){
			$shezhi['kaiqi']='1';
		}
		if($shezhi['tongjixiangqing']==''){
			$shezhi['tongjixiangqing']='1';
		}		
		$this->assign('shezhi',$shezhi);
		
		
		
		
        return $this->fetch('admin@Bianxianwangzhizhu/shezhi');
    }

	public function paxiangbangdan()
	{
		$param = input();
		
		$kstime=$param['kstime'];
		$jstime=$param['jstime'];
		$name=$param['name'];
		
		if(empty($kstime)){
				$kstime=date('Ymd',time());
			}else{
				$kstime=str_replace("-","",$kstime);
			}
		if(empty($jstime)){
				$jstime=date('Ymd',time());
			}else{
				$jstime=str_replace("-","",$jstime);
			}
		$this->assign('param',$param);
		$this->assign('title','爬行榜单');
		$this->assign('time',date('Y-m-d',time()));
		$this->assign('kstime',$param['kstime']);
		$this->assign('jstime',$param['jstime']);
		$this->assign('zzlx',$param['zzlx']);
		$this->assign('fy',$param['fy']);
		
		
		$sql="select count('bianxian_wang_zhizhu.urlid') as num,bianxian_wang_zhizhu.urlid,bianxian_wang_zhizhu_url.url 
				from 
				bianxian_wang_zhizhu,bianxian_wang_zhizhu_url 
				where bianxian_wang_zhizhu.urlid=bianxian_wang_zhizhu_url.url_id
				 and
				 bianxian_wang_zhizhu.time >= ".$kstime." 
				 and 
				 bianxian_wang_zhizhu.time <= ".$jstime;
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		
		$fy=$param['fy'];
		
		if($fy=='' or $fy <=1){
			$fy=0;
		}else{
			$fy=$fy-1;
			$fy=$fy*10;
		}
		$sql=$sql." group by bianxian_wang_zhizhu.urlid,bianxian_wang_zhizhu_url.url";
		$sql=$sql." order by num desc limit ".$fy.",10";
		$this->assign('list',db()->query($sql));
		
		
		$sql="select count('bianxian_wang_zhizhu.urlid') as num,bianxian_wang_zhizhu.urlid,bianxian_wang_zhizhu_url.url
				from 
				bianxian_wang_zhizhu,bianxian_wang_zhizhu_url 
				where bianxian_wang_zhizhu.urlid=bianxian_wang_zhizhu_url.url_id
				 and
				 bianxian_wang_zhizhu.time >= ".$kstime." 
				 and 
				 bianxian_wang_zhizhu.time <= ".$jstime;
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		$sql=$sql." group by bianxian_wang_zhizhu.urlid,bianxian_wang_zhizhu_url.url";
		
		$sql = "select count(*) 
		from
		(".$sql.") A
		";
		
		$jg = db()->query($sql);
		
		$this->assign('sjzs',$jg[0]['count(*)']);
		return $this->fetch('admin@Bianxianwangzhizhu/paxingbangdan');
	}


	public function zonlan()
	{
		 $param = input();
		 $this->assign('param',$param);
		 $this->assign('title','历史总览');
		 
		 $fy=$param['fy'];
		 if($fy=='' or $fy <=1){
		 	$fy=0;
		 }else{
		 	$fy=$fy-1;
		 	$fy=$fy*10;
		 }
		 
		 
		 $this->assign('fy',$param['fy']);
		 
		 $sql = "SELECT * FROM bianxian_wang_zhizhu_tj order by tjid desc limit ".$fy.",10";
		 $this->assign('list',db()->query($sql));
		 
		 $sql = "SELECT COUNT(*) FROM bianxian_wang_zhizhu_tj ";
		 $jg = db()->query($sql);
		 $this->assign('sjzs',$jg[0]['COUNT(*)']);

		 return $this->fetch('admin@Bianxianwangzhizhu/zonlan');
	}
	



	public function jinri()
	{
		$param = input();
		$this->assign('param',$param);
		$this->assign('title','今日数据总览');
		$this->assign('time',date('Y-m-d',time()));
		
		$sql='select count(*) as num,name from bianxian_wang_zhizhu where time='.date('Ymd',time()).' group by name';
		$jg = db()->query($sql);
		$this->assign('list',$jg);
		
		$paxinzonshu = $this->n_shujuchaxun_zs(date('Ymd',time()),date('Ymd',time()),'全部');
		$this->assign('paxinzonshu',$paxinzonshu);
		
		return $this->fetch('admin@Bianxianwangzhizhu/jinri');
	}

	public function shujuchaxun()
	{
		 $param = input();
		 $this->assign('param',$param);
		 $this->assign('title','数据查询');
		 $this->assign('time',date('Y-m-d',time()));
		 $this->assign('kstime',$param['kstime']);
		 $this->assign('jstime',$param['jstime']);
		 $this->assign('zzlx',$param['zzlx']);
		 $this->assign('fy',$param['fy']);
		 $this->assign('list',$this->n_shujuchaxun($param['kstime'],$param['jstime'],$param['zzlx'],$param['fy']));
		 
		 $this->assign('sjzs',$this->n_shujuchaxun_zs($param['kstime'],$param['jstime'],$param['zzlx']));

		 return $this->fetch('admin@Bianxianwangzhizhu/shujuchaxun');
	}
	
	public function del()
	{
		$param = input();
		$id = $param['ids'];
		
		$jg = Db::table('bianxian_wang_zhizhu')->delete($id);
		
		if($jg >= 0){
			$msg = '删除成功!';
			return $this->success($msg);
		}
		$msg = '删除失败!';
		return $this->error($msg);
	}
	
	public function del_zl1()
	{
		$param = input();
		$id = $param['ids'];
		
		$jg = Db::table('bianxian_wang_zhizhu_tj')->where('tjid',$id)->find();
		
		if(!empty($jg['time'])){	
				$where=[];
				$where['time']=$jg['time'];
				$jg = Db::table('bianxian_wang_zhizhu')->where($where)->delete();
		}
		
		if($jg >= 0){
			
			Db::table('bianxian_wang_zhizhu_tj')->where('tjid', $id)->update(['state' => '已清空详情']);
			
			$msg = '清空成功!';
			return $this->error($msg);
		}
		$msg = '清空失败!';
		return $this->error($msg);
	}		
	
	public function del_zl()
	{
		$param = input();
		$id = $param['ids'];
		
		$jg = Db::table('bianxian_wang_zhizhu_tj')->where('tjid',$id)->find();
		
		if(!empty($jg['time'])){	
				$where=[];
				$where['time']=$jg['time'];
				$jg = Db::table('bianxian_wang_zhizhu')->where($where)->delete();
		}
		
		$jg = Db::table('bianxian_wang_zhizhu_tj')->delete($id);
		
		if($jg >= 0){
			$msg = '删除成功!';
			return $this->success($msg);
		}
		$msg = '删除失败!';
		return $this->error($msg);
	}	
	public function n_shujuchaxun($kstime,$jstime,$name,$fy)
	{
		if(empty($kstime)){
				$kstime=date('Ymd',time());
			}else{
				$kstime=str_replace("-","",$kstime);
			}
		if(empty($jstime)){
				$jstime=date('Ymd',time());
			}else{
				$jstime=str_replace("-","",$jstime);
			}
		$sql="SELECT * FROM 
		bianxian_wang_zhizhu,bianxian_wang_zhizhu_url  
		WHERE 
		bianxian_wang_zhizhu.urlid = bianxian_wang_zhizhu_url.url_id 
		and 
		bianxian_wang_zhizhu.time >= ".$kstime." 
		and 
		bianxian_wang_zhizhu.time <= ".$jstime;
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		if($fy=='' or $fy <=1){
			$fy=0;
		}else{
			$fy=$fy-1;
			$fy=$fy*10;
		}
		$sql=$sql." order by id desc limit ".$fy.",10";

		$jg = db()->query($sql);
		return $jg;
	}
	public function n_shujuchaxun_pxbd($kstime,$jstime,$name,$fy)
	{
		if(empty($kstime)){
				$kstime=date('Ymd',time());
			}else{
				$kstime=str_replace("-","",$kstime);
			}
		if(empty($jstime)){
				$jstime=date('Ymd',time());
			}else{
				$jstime=str_replace("-","",$jstime);
			}
		$sql="SELECT * FROM 
		bianxian_wang_zhizhu,bianxian_wang_zhizhu_url  
		WHERE 
		bianxian_wang_zhizhu.urlid = bianxian_wang_zhizhu_url.url_id 
		and 
		bianxian_wang_zhizhu.time >= ".$kstime." 
		and 
		bianxian_wang_zhizhu.time <= ".$jstime;
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		if($fy=='' or $fy <=1){
			$fy=0;
		}else{
			$fy=$fy-1;
			$fy=$fy*10;
		}
		$sql=$sql." order by id desc limit ".$fy.",10";
	
		$jg = db()->query($sql);
		return $jg;
	}
	public function n_shujuchaxun_zs($kstime,$jstime,$name)
	{
		if(empty($kstime)){
				$kstime=date('Ymd',time());
			}else{
				$kstime=str_replace("-","",$kstime);
			}
		if(empty($jstime)){
				$jstime=date('Ymd',time());
			}else{
				$jstime=str_replace("-","",$jstime);
			}
		$sql="SELECT COUNT(*) FROM 
		bianxian_wang_zhizhu,bianxian_wang_zhizhu_url  
		WHERE 
		bianxian_wang_zhizhu.urlid = bianxian_wang_zhizhu_url.url_id 
		and 
		bianxian_wang_zhizhu.time >= ".$kstime." 
		and 
		bianxian_wang_zhizhu.time <= ".$jstime;
		if($name!='' and $name!='全部'){
			$sql=$sql." and
		bianxian_wang_zhizhu.name='".$name."'";
		}
		
		$jg = db()->query($sql);
		return $jg[0]['COUNT(*)'];
	}
	
	
   public function shifouchushihua()
   {
		$chushihua=1;
	   $tableName = 'bianxian_wang_zhizhu';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
		   $chushihua=0;
	   }
	   $tableName = 'bianxian_wang_zhizhu_url';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
		   $chushihua=0;
	   }
	   $tableName = 'bianxian_wang_zhizhu_tj';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
	   		   $chushihua=0;
	   }
		return  $chushihua;
   }
   public function chushihua()
   {
	   $cg1=0;
	   $cg2=0;
	   $cg3=0;
	   $tableName = 'bianxian_wang_zhizhu';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
		   $sql = "CREATE TABLE `bianxian_wang_zhizhu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urlid` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0',
  `time1` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '蜘蛛名称',
  `ip` varchar(30) DEFAULT '',
  `ua` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `urlid` (`urlid`),
  KEY `name` (`name`),
  KEY `time` (`time`),
  KEY `ip` (`ip`),
  KEY `state` (`state`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

			";
			$zxjg = db()->query($sql);
			
			$isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
			if($isTable){
				$cg1=1;
			}
	   }else{
		   $cg1=2;
	   }
	   
	   
	   $tableName = 'bianxian_wang_zhizhu_url';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
	   		   $sql = "CREATE TABLE `bianxian_wang_zhizhu_url` (
				  `url_id` int(11) NOT NULL AUTO_INCREMENT,
				  `url` varchar(255) DEFAULT NULL,
				  PRIMARY KEY (`url_id`),
				  KEY `url` (`url`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	   			";
	   			$zxjg = db()->query($sql);
				
				$isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   			if($isTable){
	   				$cg2=1;
	   			}
	   }else{
		   $cg2=2;
	   }
	   
	   $tableName = 'bianxian_wang_zhizhu_tj';
	   $isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   if(!$isTable){
	   		   $sql = "	CREATE TABLE `bianxian_wang_zhizhu_tj` (
  `tjid` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) DEFAULT NULL,
  `baidu` int(11) DEFAULT '0' COMMENT '百度',
  `guge` int(11) DEFAULT '0' COMMENT '谷歌',
  `haosou` int(11) DEFAULT '0' COMMENT '360',
  `sougou` int(11) DEFAULT '0' COMMENT '搜狗',
  `sm` int(11) DEFAULT '0' COMMENT '神马',
  `biying` int(11) DEFAULT '0' COMMENT '必应',
  `youdao` int(11) DEFAULT '0' COMMENT '有道',
  `soso` int(11) DEFAULT '0' COMMENT '搜搜',
  `yahu` int(11) DEFAULT '0' COMMENT '雅虎',
  `state` varchar(100) DEFAULT '正常',
  PRIMARY KEY (`tjid`),
  KEY `time` (`time`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

	   			";
	   			$zxjg = db()->query($sql);
				
				$isTable = db()->query('SHOW TABLES LIKE '."'".$tableName."'");
	   			if($isTable){
	   				$cg3=1;
	   			}
	   }else{
		   $cg3=2;
	   }	   
	   
	   


	   if($cg1==0){
		   $jieguo = 'bianxian_wang_zhizhu 创建失败<br />';
	   }	   
	   if($cg1==1){
		   $jieguo = 'bianxian_wang_zhizhu 创建成功<br />';
	   }
	   if($cg1==2){
	   		   $jieguo = 'bianxian_wang_zhizhu 已存在<br />';
	   }
	   
	   if($cg2==0){
	   	$jieguo = $jieguo.'bianxian_wang_zhizhu_url 创建失败<br />';
	   }
	  if($cg2==1){
	  	$jieguo = $jieguo.'bianxian_wang_zhizhu_url 创建成功<br />';
	  }
	  if($cg2==2){
	  	$jieguo = $jieguo.'bianxian_wang_zhizhu_url 已存在<br />';
	  }
	  
	   if($cg3==0){
	   	$jieguo = $jieguo.'bianxian_wang_zhizhu_tj 创建失败<br />';
	   }
	  if($cg3==1){
	  	$jieguo = $jieguo.'bianxian_wang_zhizhu_tj 创建成功<br />';
	  }
	  if($cg3==2){
	  	$jieguo = $jieguo.'bianxian_wang_zhizhu_tj 已存在<br />';
	  }	  
	  return $jieguo;
   }
   
   
}
