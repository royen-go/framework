<?php

namespace awheel\Exceptions;

use Exception;

/**
 * 请求方式不允许异常
 *
 * @package awheel\Exceptions
 */
class NotAllowCallException extends HttpException
{
    /**
     * NotAllowCallException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct(405, $message, $previous, $code);
    }
}
