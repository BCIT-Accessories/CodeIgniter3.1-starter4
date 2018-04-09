<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class EquipmentTest extends TestCase
{
    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('equip');
        $this->equip = new Equip();
        $this->equip->id = 100;
        $this->equip->desc = 'tier1';
        $this->equip->image = '/assets/images/chest_tier1.PNG';
        $this->equip->categoryId = 0;
        $this->equip->protection = 120;
        $this->equip->speed = -20;
        $this->equip->weight = 120;
    }

    function testSetup() {
        $this->assertEquals(100, $this->equip->id);
        $this->assertEquals('tier1', $this->equip->desc);
        $this->assertEquals('/assets/images/chest_tier1.PNG', $this->equip->image);
        $this->assertEquals(0, $this->equip->categoryId);
        $this->assertEquals(120, $this->equip->protection);
        $this->assertEquals(-20, $this->equip->speed);
        $this->assertEquals(120, $this->equip->weight);
    }

    function testValidId() {
        $expected = 0;
        $this->equip->id = $expected;
        $this->assertEquals($expected, $this->equip->id);
    }

    function testInValidNegativeID() {
        $badvalue = -1;
        $this->expectException(Exception::class);
        $this->equip->id = $badvalue; // this should croak
    }

    /**
     * This is an alternate way to assert that an exception should occur
     * @expectedException InvalidArgumentException
     */
    function testInvalidID() {
        $this->expectException('InvalidArgumentException');
        $this->equip->id = null;
    }

    function testInvalidNonNumericID() {
        $badvalue = "hello";
        $this->expectException(Exception::class);
        $this->equip->id = $badvalue;
    }

    function testInvalidDesc() {
        $this->expectException('InvalidArgumentException');
        $this->equip->desc = null;
    }

    function testInvalidLongDesc() {
        $badvalue = "some really really long name longer than sixty-four character some really really long name longer than sixty-four character some really really long name longer than sixty-four character";
        $this->expectException(Exception::class);
        $this->equip->desc = $badvalue;
    }


    function testInvalidImage() {
        $this->expectException('InvalidArgumentException');
        $this->equip->image = null;
    }

    function testInvalidLongImage() {
        $badvalue = "some really really long name longer than sixty-four character some really really long name longer than sixty-four character some really really long name longer than sixty-four character";
        $this->expectException(Exception::class);
        $this->equip->image = $badvalue;
    }

    function testInvalidNonnumericProtection() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->equip->protection = $badvalue;
    }

    function testInvalidNonnumericSpeed() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->equip->speed = $badvalue;
    }

    function testInvalidNonnumericWeight() {
        $badvalue = "nonnumeric";
        $this->expectException(Exception::class);
        $this->equip->weight = $badvalue;
    }
}
