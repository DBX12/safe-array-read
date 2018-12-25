<?php

namespace dbx12;


use Exception;
use PHPUnit\Framework\TestCase;

class SafeArrayReadTest extends TestCase
{

    public function testRead()
    {
        $array = [
            'foo' => 1,
        ];

        $output = SafeArrayRead::read('foo', $array, 'default');
        $this->assertEquals($array['foo'], $output);

        $output = SafeArrayRead::read('nonexistant', $array, 'default');
        $this->assertEquals('default', $output);

        $this->expectException(Exception::class);
        SafeArrayRead::read('foo', null, 'default');
    }
}
