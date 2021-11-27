<?php
require "vendor/autoload.php";
require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    // test minutes
    public function test_CalculateMinutes_given12H00_returnNothing(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);
    }

    public function test_CalculateMinutes_given12H01_Y(){
        $test = new BerlinClock();
        $timer="12:01:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("Y",$actual);
    }

    public function test_CalculateMinutes_given12H02_YY(){
        $test = new BerlinClock();
        $timer="12:02:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YY",$actual);
    }

    public function test_CalculateMinutes_given12H03_YYY(){
        $test = new BerlinClock();
        $timer="12:03:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYY",$actual);
    }

    public function test_CalculateMinutes_given12H04_YYYY(){
        $test = new BerlinClock();
        $timer="12:04:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYYY",$actual);
    }

    public function test_CalculateMinutes_given12H05_(){
        $test = new BerlinClock();
        $timer="12:05:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);
    }

    // test block 5 minutes
    public function test_CalculateBlockOf5Minutes_given12H00_returnNothing(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("",$actual);
    }

    public function test_CalculateBlockOf5Minutes_given12H05_Y(){
        $test = new BerlinClock();
        $timer="12:05:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("Y",$actual);
    }

    public function test_CalculateBlockOf5Minutes_given12H59_YYRYYRYYRYY(){
        $test = new BerlinClock();
        $timer="12:59:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("YYRYYRYYRYY",$actual);
    }

    public function test_CalculateBlockOf5Minutes_given12H10_YY(){
        $test = new BerlinClock();
        $timer="12:10:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("YY",$actual);
    }

    public function test_CalculateBlockOf5Minutes_given12H15_YYR(){
        $test = new BerlinClock();
        $timer="12:15:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("YYR",$actual);
    }
}
