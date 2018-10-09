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
        $da->endOfDay();
        $this->assertEquals("2018-10-31 23:59:59", $da->format("Y-m-d H:i:s"));
    }

    public function testStartOfDay()
    {
        $da = new Carbon('2018-10-9');
        $da->startOfDay();
        $this->assertEquals("2018-10-01 00:00:00", $da->format("Y-m-d H:i:s"));
    }
}