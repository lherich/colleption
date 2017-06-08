<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;

class HttpExceptionTest extends TestCase
{
    public function testIsAbstract()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\HttpException');
        $this->assertEquals(true, $reflection->isAbstract());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\HttpException\HttpException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Colleption\BaseException'));
    }
}
