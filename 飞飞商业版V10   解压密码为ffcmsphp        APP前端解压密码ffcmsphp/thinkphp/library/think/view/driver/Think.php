<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\view\driver;

use think\App;
use think\exception\TplNotFoundException;
use think\Loader;
use think\Log;
use think\Request;
use think\Tpl;

class Think
{
    // 模板引擎实例
    private $Tpl;
    // 模板引擎参数
    protected $config = [
        // 视图基础目录（集中式）
        'view_base'   => '',
        // 模板起始路径
        'view_path'   => '',
        // 模板文件后缀
        'view_suffix' => 'html',
        // 模板文件名分隔符
        'view_depr'   => DS,
        // 是否开启模板编译缓存,设为false则每次都会重新编译
        'tpl_cache'   => true,
        // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'auto_rule'   => 1,
    ];

    public function __construct($config = [])
    {
        $this->config = array_merge($this->config, $config);
        if (empty($this->config['view_path'])) {
            $this->config['view_path'] = App::$modulePath . 'view' . DS;
        }

        $this->Tpl = new Tpl($this->config);
    }

    /**
     * 检测是否存在模板文件
     * @access public
     * @param string $Tpl 模板文件或者模板规则
     * @return bool
     */
    public function exists($Tpl)
    {
        if ('' == pathinfo($Tpl, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $Tpl = $this->parseTpl($Tpl);
        }
        return is_file($Tpl);
    }

    /**
     * 渲染模板文件
     * @access public
     * @param string    $Tpl 模板文件
     * @param array     $data 模板变量
     * @param array     $config 模板参数
     * @return void
     */
    public function fetch($Tpl, $data = [], $config = [])
    {
        if ('' == pathinfo($Tpl, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $Tpl = $this->parseTpl($Tpl);
        }
        // 模板不存在 抛出异常
        if (!is_file($Tpl)) {
            throw new TplNotFoundException('Tpl not exists:' . $Tpl, $Tpl);
        }
        // 记录视图信息
        App::$debug && Log::record('[ VIEW ] ' . $Tpl . ' [ ' . var_export(array_keys($data), true) . ' ]', 'info');
        $this->Tpl->fetch($Tpl, $data, $config);
    }

    /**
     * 渲染模板内容
     * @access public
     * @param string    $Tpl 模板内容
     * @param array     $data 模板变量
     * @param array     $config 模板参数
     * @return void
     */
    public function display($Tpl, $data = [], $config = [])
    {
        $this->Tpl->display($Tpl, $data, $config);
    }

    /**
     * 自动定位模板文件
     * @access private
     * @param string $Tpl 模板文件规则
     * @return string
     */
    private function parseTpl($Tpl)
    {
        // 分析模板文件规则
        $request = Request::instance();
        // 获取视图根目录
        if (strpos($Tpl, '@')) {
            // 跨模块调用
            list($module, $Tpl) = explode('@', $Tpl);
        }
        if ($this->config['view_base']) {
            // 基础视图目录
            $module = isset($module) ? $module : $request->module();
            $path   = $this->config['view_base'] . ($module ? $module . DS : '');
        } else {
            $path = isset($module) ? APP_PATH . $module . DS . 'view' . DS : $this->config['view_path'];
        }

        $depr = $this->config['view_depr'];
        if (0 !== strpos($Tpl, '/')) {
            $Tpl   = str_replace(['/', ':'], $depr, $Tpl);
            $controller = Loader::parseName($request->controller());
            if ($controller) {
                if ('' == $Tpl) {
                    // 如果模板文件名为空 按照默认规则定位
                    $Tpl = str_replace('.', DS, $controller) . $depr . (1 == $this->config['auto_rule'] ? Loader::parseName($request->action(true)) : $request->action());
                } elseif (false === strpos($Tpl, $depr)) {
                    $Tpl = str_replace('.', DS, $controller) . $depr . $Tpl;
                }
            }
        } else {
            $Tpl = str_replace(['/', ':'], $depr, substr($Tpl, 1));
        }
        return $path . ltrim($Tpl, '/') . '.' . ltrim($this->config['view_suffix'], '.');
    }

    /**
     * 配置或者获取模板引擎参数
     * @access private
     * @param string|array  $name 参数名
     * @param mixed         $value 参数值
     * @return mixed
     */
    public function config($name, $value = null)
    {
        if (is_array($name)) {
            $this->Tpl->config($name);
            $this->config = array_merge($this->config, $name);
        } elseif (is_null($value)) {
            return $this->Tpl->config($name);
        } else {
            $this->Tpl->$name = $value;
            $this->config[$name]   = $value;
        }
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->Tpl, $method], $params);
    }
}
