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

    public function test_CalculateBlockOf5Minutes_given12H25_YYRYY(){
        $test = new BerlinClock();
        $timer="12:25:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("YYRYY",$actual);
    }

    public function test_CalculateBlockOf5Minutes_given12H20_YYRY(){
        $test = new BerlinClock();
        $timer="12:20:00";
        $actual = $test->calculateBlockOf5Minutes($timer);
        $this->assertEquals("YYRY",$actual);
    }

    // test hours
    public function test_CalculateHours_given10H_returnNothing(){
        $test = new BerlinClock();
        $timer="10:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("",$actual);
    }

    public function test_CalculateHours_given11H_R(){
        $test = new BerlinClock();
        $timer="11:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("R",$actual);
    }

    public function test_CalculateHours_given12H_RR(){
        $test = new BerlinClock();
        $timer="12:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RR",$actual);
    }

    public function test_CalculateHours_given13H_RRR(){
        $test = new BerlinClock();
        $timer="13:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RRR",$actual);
    }

    public function test_CalculateHours_given14H_RRRR(){
        $test = new BerlinClock();
        $timer="14:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RRRR",$actual);
    }

    public function test_CalculateHours_given15H_returnNothing(){
        $test = new BerlinClock();
        $timer="15:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("",$actual);
    }

    // test block 5 hours

    public function test_CalculateBlockOf5Hours_given00H00_returnNothing(){
        $test = new BerlinClock();
        $timer = "00:00";
        $actual = $test->calculateBlockOf5Hours($timer);
        $this->assertEquals("",$actual);
    }

    public function test_CalculateBlockOf5Hours_given05H00_R(){
        $test = new BerlinClock();
        $timer = "05:00";
        $actual = $test->calculateBlockOf5Hours($timer);
        $this->assertEquals("R",$actual);

    }

    public function test_CalculateBlockOf5Hours_given10H00_RR(){
        $test = new BerlinClock();
        $timer = "10:00";
        $actual = $test->calculateBlockOf5Hours($timer);
        $this->assertEquals("RR",$actual);

    }

    public function test_CalculateBlockOf5Hours_given15H00_RRR(){
        $test = new BerlinClock();
        $timer = "15:00";
        $actual = $test->calculateBlockOf5Hours($timer);
        $this->assertEquals("RRR",$actual);

    }

    public function test_CalculateBlockOf5Hours_given20H00_RRRR(){
        $test = new BerlinClock();
        $timer = "20:00";
        $actual = $test->calculateBlockOf5Hours($timer);
        $this->assertEquals("RRRR",$actual);
    }


}
