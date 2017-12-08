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
 * conversion error to exception
 * Class ErrorException
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug
 */
class ErrorException extends Exception
{
    protected $severity;

    public function __construct($severity, $message, $file, $line, array $context = [])
    {
        $this->severity = $severity;
        $this->message  = $message;
        $this->file     = $file;
        $this->line     = $line;
        $this->code     = 0;
        empty($context) || $this->setData('Error Context', $context);
    }

    final public function getSeverity()
    {
        return $this->severity;
    }
}