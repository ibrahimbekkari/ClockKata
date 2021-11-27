<?php
require "vendor/autoload.php";
require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    //TEST SIMPLES MINUTES
    public function test_CalculateMinutes_given12H00_returnNothing(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);
    }

}
