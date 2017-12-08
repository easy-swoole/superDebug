<?php
// +---------------------------------------------------------
// | easySwoole [ API framework based on Swoole ]
// +---------------------------------------------------------
// | Website: https://www.easyswoole.com
// +---------------------------------------------------------
// | Welcome Join QQGroup 633921431
// +---------------------------------------------------------

namespace easySwoole\SuperDebug;

/**
 * Class Exception
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug
 */
class Exception extends \Exception
{
    protected $data = [];

    /**
     * 设置异常额外的 Debug 数据
     * 数据将会显示为下面的格式
     * Exception Data
     * --------------------------------------------------
     * Label 1
     *   key1      value1
     *   key2      value2
     * Label 2
     *   key1      value1
     *   key2      value2
     * @access protected
     * @param  string $label 数据分类，用于异常页面显示
     * @param  array $data 需要显示的数据，必须为关联数组
     * @return void
     */
    final protected function setData($label, array $data)
    {
        $this->data[$label] = $data;
    }

    /**
     * 获取异常额外 Debug 数据
     * 主要用于输出到异常页面便于调试
     * @access public
     * @return array
     */
    final public function getData()
    {
        return $this->data;
    }
}