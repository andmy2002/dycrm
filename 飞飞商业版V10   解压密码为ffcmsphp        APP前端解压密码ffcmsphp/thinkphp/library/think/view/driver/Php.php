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

class Php
{
    // 模板引擎参数
    protected $config = [
        // 视图基础目录（集中式）
        'view_base'   => '',
        // 模板起始路径
        'view_path'   => '',
        // 模板文件后缀
        'view_suffix' => 'php',
        // 模板文件名分隔符
        'view_depr'   => DS,
        // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
        'auto_rule'   => 1,
    ];
    protected $Tpl;
    protected $content;

    public function __construct($config = [])
    {
        $this->config = array_merge($this->config, $config);
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
     * @return void
     */
    public function fetch($Tpl, $data = [])
    {
        if ('' == pathinfo($Tpl, PATHINFO_EXTENSION)) {
            // 获取模板文件名
            $Tpl = $this->parseTpl($Tpl);
        }
        // 模板不存在 抛出异常
        if (!is_file($Tpl)) {
            throw new TplNotFoundException('Tpl not exists:' . $Tpl, $Tpl);
        }
        $this->Tpl = $Tpl;
        // 记录视图信息
        App::$debug && Log::record('[ VIEW ] ' . $Tpl . ' [ ' . var_export(array_keys($data), true) . ' ]', 'info');

        extract($data, EXTR_OVERWRITE);
        include $this->Tpl;
    }

    /**
     * 渲染模板内容
     * @access public
     * @param string    $content 模板内容
     * @param array     $data 模板变量
     * @return void
     */
    public function display($content, $data = [])
    {
        $this->content = $content;

        extract($data, EXTR_OVERWRITE);
        eval('?>' . $this->content);
    }

    /**
     * 自动定位模板文件
     * @access private
     * @param string $Tpl 模板文件规则
     * @return string
     */
    private function parseTpl($Tpl)
    {
        if (empty($this->config['view_path'])) {
            $this->config['view_path'] = App::$modulePath . 'view' . DS;
        }

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
     * 配置模板引擎
     * @access private
     * @param string|array  $name 参数名
     * @param mixed         $value 参数值
     * @return void
     */
    public function config($name, $value = null)
    {
        if (is_array($name)) {
            $this->config = array_merge($this->config, $name);
        } elseif (is_null($value)) {
            return isset($this->config[$name]) ? $this->config[$name] : null;
        } else {
            $this->config[$name] = $value;
        }
    }

}
