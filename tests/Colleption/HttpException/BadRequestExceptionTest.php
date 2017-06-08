<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;
use Colleption\HttpException\BadRequestException;

class BadRequestExceptionTest extends TestCase
{
    public function testMessageIsDefault()
    {
        $exception = new BadRequestException();
        $this->assertEquals('Bad Request', $exception->getMessage());
    }

    public function testCodeIsDefault()
    {
        $exception = new BadRequestException();
        $this->assertEquals(400, $exception->getCode());
    }

    public function testIsFinal()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\BadRequestException');
        $this->assertEquals(true, $reflection->isFinal());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\BadRequestException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\HttpException\HttpException'));
    }
}
