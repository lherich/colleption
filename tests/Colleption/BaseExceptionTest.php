<?php

namespace Colleption\HttpException;

use PHPUnit\Framework\TestCase;

class BaseExceptionTest extends TestCase
{
    public function testIsAbstract()
    {
        $reflection = new \ReflectionClass('\Colleption\BaseException');
        $this->assertEquals(true, $reflection->isAbstract());
    }
    
    public function testIsSubclassOf()
    {
        $reflection = new \ReflectionClass('\Colleption\BaseException');
        $this->assertEquals(true, $reflection->isSubclassOf('\Exception'));
    }
}
