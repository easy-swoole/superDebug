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
 * Class ClassNotFoundException
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug
 */
class ClassNotFoundException extends \RuntimeException
{
    protected $class;

    public function __construct($message, $class = '')
    {
        $this->message = $message;
        $this->class   = $class;
    }

    /**
     * 获取类名
     * @access public
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}