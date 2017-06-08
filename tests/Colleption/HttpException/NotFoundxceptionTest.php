<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;
use Colleption\HttpException\NotFoundException;

class NotFoundExceptionTest extends TestCase
{
    public function testMessageIsDefault()
    {
        $exception = new NotFoundException();
        $this->assertEquals('Not Found', $exception->getMessage());
    }

    public function testCodeIsDefault()
    {
        $exception = new NotFoundException();
        $this->assertEquals(404, $exception->getCode());
    }

    public function testIsFinal()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\NotFoundException');
        $this->assertEquals(true, $reflection->isFinal());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\NotFoundException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\HttpException\HttpException'));
    }
}
