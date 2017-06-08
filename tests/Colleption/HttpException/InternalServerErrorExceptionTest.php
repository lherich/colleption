<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;
use Colleption\HttpException\InternalServerErrorException;

class InternalServerErrorExceptionTest extends TestCase
{
    public function testMessageIsDefault()
    {
        $exception = new InternalServerErrorException();
        $this->assertEquals('Internal Server Error', $exception->getMessage());
    }

    public function testCodeIsDefault()
    {
        $exception = new InternalServerErrorException();
        $this->assertEquals(500, $exception->getCode());
    }

    public function testIsFinal()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\InternalServerErrorException');
        $this->assertEquals(true, $reflection->isFinal());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\InternalServerErrorException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\HttpException\HttpException'));
    }
}
