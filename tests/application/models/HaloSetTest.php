<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class HaloSetTest extends TestCase
{
    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('haloSet');
        $this->haloSet = new HaloSet();
        $this->haloSet->id = 0;
        $this->haloSet->name = 'recruit';
        $this->haloSet->helmet = 100;
        $this->haloSet->chest = 101;
        $this->haloSet->shoulder_left = 102;
        $this->haloSet->shoulder_right = 103;
        $this->haloSet->wrist = 104;
    }

    function testSetup() {
        $this->assertEquals(0, $this->haloSet->id);
        $this->assertEquals('recruit', $this->haloSet->name);
        $this->assertEquals(100, $this->haloSet->helmet);
        $this->assertEquals(101, $this->haloSet->chest);
        $this->assertEquals(102, $this->haloSet->shoulder_left);
        $this->assertEquals(103, $this->haloSet->shoulder_right);
        $this->assertEquals(104, $this->haloSet->wrist);
    }

    function testValidId() {
        $expected = 0;
        $this->haloSet->id = $expected;
        $this->assertEquals($expected, $this->haloSet->id);
    }

    function testInValidNegativeID() {
        $badvalue = -1;
        $this->expectException(Exception::class);
        $this->haloSet->id = $badvalue; // this should croak
    }

    /**
     * This is an alternate way to assert that an exception should occur
     * @expectedException InvalidArgumentException
     */
    function testInvalidID() {
        $this->expectException('InvalidArgumentException');
        $this->haloSet->id = null;
    }

    function testInvalidNonNumericID() {
        $badvalue = "hello";
        $this->expectException(Exception::class);
        $this->haloSet->id = $badvalue;
    }

    function testInvalidName() {
        $this->expectException('InvalidArgumentException');
        $this->haloSet->name = null;
    }

    function testInvalidLongName() {
        $badvalue = "some really really long name longer than sixty-four character some really really long name longer than sixty-four character some really really long name longer than sixty-four character";
        $this->expectException(Exception::class);
        $this->haloSet->name = $badvalue;
    }

    function testInvalidNonnumericHelmet() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->haloSet->helmet = $badvalue;
    }    

    function testInvalidRangeHelmet() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->haloSet->helmet = $badvalue;
    }


    function testInvalidNonnumericChest() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->haloSet->chest = $badvalue;
    }

    function testInvalidRangeChest() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->haloSet->chest = $badvalue;
    }


    function testInvalidNonnumericShoulder_Left() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->haloSet->shoulder_left = $badvalue;
    }

    function testInvalidRangeShoulder_Left() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->haloSet->shoulder_left = $badvalue;
    }

    function testInvalidNonnumericShoulder_Right() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->haloSet->shoulder_right = $badvalue;
    }

    function testInvalidRangeShoulder_Right() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->haloSet->shoulder_right = $badvalue;
    }

    function testInvalidNonnumericWrist() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->haloSet->wrist = $badvalue;
    }

    function testInvalidRangeWrist() {
        $badvalue = 99;
        $this->expectException(Exception::class);
        $this->haloSet->wrist = $badvalue;
    }
}
