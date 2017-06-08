<?php
namespace Colleption\HttpException;

final class BadRequestException extends HttpException
{
    /**
     * The exception message.
     *
     * @var string
     */
    protected $message = 'Bad Request';
    
    /**
     * The exception error code.
     *
     * @var int
     */
    protected $code = 400;
}
