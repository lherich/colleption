<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;
use Colleption\HttpException\UnauthorizedException;

class UnauthorizedExceptionTest extends TestCase
{
    public function testMessageIsDefault()
    {
        $exception = new UnauthorizedException();
        $this->assertEquals('Unauthorized', $exception->getMessage());
    }

    public function testCodeIsDefault()
    {
        $exception = new UnauthorizedException();
        $this->assertEquals(401, $exception->getCode());
    }

    public function testIsFinal()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\UnauthorizedException');
        $this->assertEquals(true, $reflection->isFinal());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\UnauthorizedException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\HttpException\HttpException'));
    }
}
