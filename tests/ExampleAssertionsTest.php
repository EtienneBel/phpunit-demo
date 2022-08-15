<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{
    public function testThatStringsMatch()
    {
        $string1 = 'testing';
        $string2 = 'testing';

        // success assertion
        $this->assertSame($string1, $string2);

        // failed assertion
        // $string3 = 'Testing';
        // $this->assertSame($string1, $string3);
    }
}
