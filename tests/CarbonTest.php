<?php

use Aw\Carbon;


/**
 * Class carbonTest
 */
class CarbonTest extends PHPUnit_Framework_TestCase
{
    public function testNow()
    {
        $this->assertEquals(date('Y-m-d'), Carbon::now()->format('Y-m-d'));
    }

    public function testEndOfDay()
    {
        $da = new Carbon('2018-10-9');
        $da->lastDayOfMonth();
        $this->assertEquals("2018-10-31 23:59:59", $da->format("Y-m-d H:i:s"));
    }

    public function testStartOfDay()
    {
        $da = new Carbon('2018-10-9');
        $da->firstDayOfMonth();
        $this->assertEquals("2018-10-01 00:00:00", $da->format("Y-m-d H:i:s"));
    }

    public function testEndOfDayOfWeek()
    {
        $da = new Carbon('2018-10-2');
        $da->lastDayOfWeek();
        $this->assertEquals("2018-10-07 23:59:59", $da->format("Y-m-d H:i:s"));
    }

    public function testStartOfDayOfWeek()
    {
        $da = new Carbon('2018-10-2');
        $da->firstDayOfWeek();
        $this->assertEquals("2018-10-01 00:00:00", $da->format("Y-m-d H:i:s"));
    }

    public function testAddMonth()
    {
        $da = new Carbon('2018-2-28');
        $da->addMonth();
        $this->assertEquals("2018-03-28", $da->format("Y-m-d"));
        $da->subMonth();
        $da->addDay();
        $this->assertEquals("2018-03-01", $da->format("Y-m-d"));
    }

    public function testAddYear()
    {
        $da = new Carbon('2018-2-28');
        $da->addYear();
        $this->assertEquals("2019-02-28", $da->format("Y-m-d"));
        $da->subYear();
        $this->assertEquals("2018-02-28", $da->format("Y-m-d"));
    }
}