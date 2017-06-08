<?php

namespace Colleption\HttpException;

final class UnauthorizedException extends HttpException
{
    /**
     * The exception message.
     *
     * @var string
     */
    protected $message = 'Unauthorized';
    
    /**
     * The exception error code.
     *
     * @var int
     */
    protected $code = 401;
}
