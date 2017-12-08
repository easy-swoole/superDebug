<?php
// +---------------------------------------------------------
// | easySwoole [ API framework based on Swoole ]
// +---------------------------------------------------------
// | Website: https://www.easyswoole.com
// +---------------------------------------------------------
// | Welcome Join QQGroup 633921431
// +---------------------------------------------------------

namespace easySwoole\SuperDebug\Abstracts;

/**
 * Class Handle
 * @author : evalor <master@evalor.cn>
 * @package easySwoole\SuperDebug\Abstracts
 */
abstract class Handle
{
    /**
     * auto render exception
     * @param \Exception $e
     * @author : evalor <master@evalor.cn>
     */
    public function render(\Exception $e)
    {

    }

    /**
     * render exception to Console
     * @author : evalor <master@evalor.cn>
     * @param \Exception $e
     */
    public function renderConsole(\Exception $e)
    {

    }

    /**
     * render exception to Response
     * @author : evalor <master@evalor.cn>
     * @param \HttpException $e
     */
    public function renderResponse(\HttpException $e)
    {

    }
}