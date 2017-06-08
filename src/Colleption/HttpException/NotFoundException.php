<?php

namespace Colleption\HttpException;

final class NotFoundException extends HttpException
{
    /**
     * The exception message.
     *
     * @var string
     */
    protected $message = 'Not Found';
    
    /**
     * The exception error code.
     *
     * @var int
     */
    protected $code = 404;
}
