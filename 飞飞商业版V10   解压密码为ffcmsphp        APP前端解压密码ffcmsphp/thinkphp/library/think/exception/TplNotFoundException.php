<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: xiaofeng <1306428988@qq.com>
// +----------------------------------------------------------------------

namespace think\exception;

class TplNotFoundException extends \RuntimeException
{
    protected $Tpl;

    public function __construct($message, $Tpl = '')
    {
        $this->message  = $message;
        $this->Tpl = $Tpl;
    }

    /**
     * 获取模板文件
     * @access public
     * @return string
     */
    public function getTpl()
    {
        return $this->Tpl;
    }
}
