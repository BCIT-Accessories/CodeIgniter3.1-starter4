<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class SetTest extends TestCase
{
    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('set');
        $this->set = new Set();
        $this->set->id = 0;
        $this->set->name = 'recruit';
        $this->set->helmet = 100;
        $this->set->chest = 101;
        $this->set->shoulder_left = 102;
        $this->set->shoulder_right = 103;
        $this->set->wrist = 104;
    }

    function testSetup() {
        $this->assertEquals(0, $this->set->id);
        $this->assertEquals('recruit', $this->set->name);
        $this->assertEquals(100, $this->set->helmet);
        $this->assertEquals(101, $this->set->chest);
        $this->assertEquals(102, $this->set->shoulder_left);
        $this->assertEquals(103, $this->set->shoulder_right);
        $this->assertEquals(104, $this->set->wrist);
    }

    function testValidId() {
        $expected = 0;
        $this->set->id = $expected;
        $this->assertEquals($expected, $this->set->id);
    }

    function testInValidNegativeID() {
        $badvalue = -1;
        $this->expectException(Exception::class);
        $this->set->id = $badvalue; // this should croak
    }

    /**
     * This is an alternate way to assert that an exception should occur
     * @expectedException InvalidArgumentException
     */
    function testInvalidID() {
        $this->expectException('InvalidArgumentException');
        $this->set->id = null;
    }

    function testInvalidNonNumericID() {
        $badvalue = "hello";
        $this->expectException(Exception::class);
        $this->set->id = $badvalue;
    }

    function testInvalidName() {
        $this->expectException('InvalidArgumentException');
        $this->set->name = null;
    }

    function testInvalidLongName() {
        $badvalue = "some really really long name longer than sixty-four character some really really long name longer than sixty-four character some really really long name longer than sixty-four character";
        $this->expectException(Exception::class);
        $this->set->name = $badvalue;
    }

    function testInvalidNonnumericHelmet() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->set->helmet = $badvalue;
    }    

    function testInvalidRangeHelmet() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->set->helmet = $badvalue;
    }


    function testInvalidNonnumericChest() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->set->chest = $badvalue;
    }

    function testInvalidRangeChest() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->set->chest = $badvalue;
    }


    function testInvalidNonnumericShoulder_Left() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->set->shoulder_left = $badvalue;
    }

    function testInvalidRangeShoulder_Left() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->set->shoulder_left = $badvalue;
    }

    function testInvalidNonnumericShoulder_Right() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->set->shoulder_right = $badvalue;
    }

    function testInvalidRangeShoulder_Right() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->set->shoulder_right = $badvalue;
    }

    function testInvalidNonnumericWrist() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->set->wrist = $badvalue;
    }

    function testInvalidRangeWrist() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->set->wrist = $badvalue;
    }
}
