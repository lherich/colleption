<?php

namespace Colleption\HttpException;

final class InternalServerErrorException extends HttpException
{
    /**
     * The exception message.
     *
     * @var string
     */
    protected $message = 'Internal Server Error';
    
    /**
     * The exception error code.
     *
     * @var int
     */
    protected $code = 500;
}
