<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;
use Colleption\HttpException\ForbiddenException;

class ForbiddenExceptionTest extends TestCase
{
    public function testMessageIsDefault()
    {
        $exception = new ForbiddenException();
        $this->assertEquals('Forbidden', $exception->getMessage());
    }

    public function testCodeIsDefault()
    {
        $exception = new ForbiddenException();
        $this->assertEquals(403, $exception->getCode());
    }

    public function testIsFinal()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\ForbiddenException');
        $this->assertEquals(true, $reflection->isFinal());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\ForbiddenException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\HttpException\HttpException'));
    }
}
