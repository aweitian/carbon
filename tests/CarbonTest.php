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
//        echo $da->format("Y-m-d H:i:s");
        $this->assertEquals("2018-10-07 23:59:59", $da->format("Y-m-d H:i:s"));
    }

    public function testStartOfDayOfWeek()
    {
        $da = new Carbon('2018-10-2');
        $da->firstDayOfWeek();
//        echo $da->format("Y-m-d H:i:s");
        $this->assertEquals("2018-10-01 00:00:00", $da->format("Y-m-d H:i:s"));
    }
}