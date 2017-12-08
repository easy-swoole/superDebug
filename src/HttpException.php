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
 * Class HttpException
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug
 */
class HttpException extends \RuntimeException
{
    private $statusCode;
    private $headers;

    public function __construct($statusCode, $message = null, \Exception $previous = null, array $headers = [], $code = 0)
    {
        $this->statusCode = $statusCode;
        $this->headers    = $headers;
        parent::__construct($message, $code, $previous);
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}