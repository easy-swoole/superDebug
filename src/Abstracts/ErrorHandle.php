<?php
// +---------------------------------------------------------
// | easySwoole [ API framework based on Swoole ]
// +---------------------------------------------------------
// | Website: https://www.easyswoole.com
// +---------------------------------------------------------
// | Welcome Join QQGroup 633921431
// +---------------------------------------------------------

namespace easySwoole\SuperDebug\Abstracts;

use Core\AbstractInterface\ErrorHandlerInterface;
use easySwoole\SuperDebug\ErrorException;

/**
 * Abstracts ErrorHandle
 * Class ErrorHandle
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug\Handle
 */
abstract class ErrorHandle extends Handle implements ErrorHandlerInterface
{
    /**
     * @param $msg
     * @param null $file
     * @param null $line
     * @param null $errorCode
     * @param $trace
     * @author : evalor <master@evalor.cn>
     * @throws ErrorException
     */
    function handler($msg, $file = null, $line = null, $errorCode = null, $trace)
    {
        throw new ErrorException($errorCode, $msg, $file, $line, $trace);
    }
}