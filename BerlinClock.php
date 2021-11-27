<?php

class BerlinClock
{

    public function calculateMinutes($timer)
    {
        $var = explode(":", $timer);
        $minutes = strval($var[0]);
        $mod = $minutes % 5;
        $string = "";
        for ($i = 0; $i < $mod; $i++) {
            $string .= "Y";
        }
        return $string;
    }

}