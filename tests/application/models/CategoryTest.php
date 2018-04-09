<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('category');
        $this->category = new Category();
        $this->category->id = 0;
        $this->category->name = 'helmet';
    }

    function testSetup() {
        $this->assertEquals(0, $this->category->id);
        $this->assertEquals('helmet', $this->category->name);
    }

    function testValidId() {
        $expected = 0;
        $this->category->id = $expected;
        $this->assertEquals($expected, $this->category->id);
    }

    function testInValidNegativeID() {
        $badvalue = -1;
        $this->expectException(Exception::class);
        $this->category->id = $badvalue; // this should croak
    }

    /**
     * This is an alternate way to assert that an exception should occur
     * @expectedException InvalidArgumentException
     */
    function testInvalidID() {
        $this->expectException('InvalidArgumentException');
        $this->category->id = null;
    }

    function testInvalidNonNumericID() {
        $badvalue = "hello";
        $this->expectException(Exception::class);
        $this->category->id = $badvalue;
    }

    function testInvalidName() {
        $this->expectException('InvalidArgumentException');
        $this->category->name = null;
    }

    function testInvalidLongName() {
        $badvalue = "some really really long name longer than sixty-four character some really really long name longer than sixty-four character some really really long name longer than sixty-four character";
        $this->expectException(Exception::class);
        $this->category->name = $badvalue;
    }
}
