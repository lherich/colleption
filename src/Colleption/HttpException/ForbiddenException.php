<?php

namespace Colleption\HttpException;

final class ForbiddenException extends HttpException
{
    /**
     * The exception message.
     *
     * @var string
     */
    protected $message = 'Forbidden';
    
    /**
     * The exception error code.
     *
     * @var int
     */
    protected $code = 403;
}
