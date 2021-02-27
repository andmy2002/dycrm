<?php

//decode by http://www.yunlu99.com/
namespace app\admin\controller;

class Miaopon extends Base
{
	public function theme()
	{
		if (request()->isPost()) {
			$miaopon = input();
			$miaopon["theme"]["fnav"]["ym"] = join("|", $miaopon["theme"]["fnav"]["ym"]);
			$miaopon["theme"]["rtnav"]["ym"] = join("|", $miaopon["theme"]["rtnav"]["ym"]);
			$miaopon["theme"]["show"]["filter"] = join("|", $miaopon["theme"]["show"]["filter"]);
			$miaopon_new["theme"] = $miaopon["theme"];
			$miaopon_old = config("hltheme");
			$miaopon_new = array_merge($miaopon_old, $miaopon_new);
			$res = ffcms_arr2file(APP_PATH . "extra/hltheme.php", $miaopon_new);
			if ($res === false) {
				return $this->error("保存失败，请重试!");
			} else {
				return $this->success("保存成功!");
			}
		} else {
			$miaopon = config("hltheme");
			$this->assign("miaopon", $miaopon);
			$this->assign("title", "喵哣主题设置");
			return $this->fetch("admin@miaopon/theme");
		}
	}
}
