<?php

namespace Spl;


class VectorTest extends \PHPUnit_Framework_TestCase {


    function test_isEmpty_vectorIsSizeZero_returnsTrue() {
        $vector = new Vector(0);
        $this->assertTrue($vector->isEmpty());
    }


    function test_isEmpty_vectorIsGreaterThanZero_returnsFalse() {
        $vector = new Vector(1);
        $this->assertFalse($vector->isEmpty());
    }


    function test_setThenGet_returnsProperValue() {
        $vector = new Vector(1, null);
        $vector[0] = 1;
        $this->assertEquals(1, $vector[0]);
    }


    function test_offsetSet_withNull_throwsException() {
        $this->setExpectedException('\Exception');

        $vector = new Vector(1, null);
        $vector[] = 1;
    }


    function test_offsetSet_withNonIntegerString_throwsException() {
        $this->setExpectedException('\Exception');

        $vector = new Vector(1, null);
        $vector['not an integer'] = 1;
    }


    function test_offsetGet_withIntegerString_returnsValue() {
        $vector = new Vector(1, null);
        $vector[0] = 1;
        $this->assertEquals(1, $vector['0']);
    }


} 