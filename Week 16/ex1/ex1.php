<?php

class ArrayCountTest extends \PHPUnit\Framework\TestCase {
    public function testArrayCount() {
       $array = ['A', 'B', 'C', 'B'];

        $result = arrayCount($array, 'B');

        $this->assertEquals($result, 2);
    }

    public function testArrayCount2() {
        $array = ['A', 'B', 'C', 'B'];

        $result = arrayCount($array, 'A');

        $this->assertEquals($result, 1);
    }

    public function testArrayCount3() {
        $array = ['A', 'B', 'C', 'B'];

        $result = arrayCount($array, 'Z');

        $this->assertEquals($result, 0);
    }

    public function testArrayCount4() {
        $array = [];

        $result = arrayCount($array, 'Z');

        $this->assertEquals($result, 0);
    }
}
