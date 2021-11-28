<?php

class BerlinClock{

    public function calculateMinutes($timer) //12:00:00
    {
        $var = explode(":", $timer);
        $minutes = strval($var[1]);
        $mod = $minutes % 5;
        $string = "";
        for ($i = 0; $i < $mod; $i++) {
            $string .= "Y";
        }
        return $string;
    }

    public function calculateBlockOf5Minutes($timer)
    {
        $var = explode(":", $timer);
        $minutes = strval($var[1]);
        $blocks = $minutes / 5;
        $string = "";
        for ($i = 1; $i <= $blocks; $i++) {
            if ($i % 3 == 0)
                $string .= "R";
            else
                $string .= "Y";
        }
        return $string;
    }

    public function calculateHours($timer)
    {
        $var = explode(":", $timer);
        $hours = strval($var[0]);
        $mod = $hours % 5;
        $string = "";
        for ($i = 0; $i < $mod; $i++) {
            $string .= "R";
        }
        return $string;
    }

    public function calculateBlockOf5Hours($timer)
    {
        $var = explode(":",$timer);
        $hours = strval($var[0]);
        $blocks = $hours/5;
        $string = "";
        for ($i = 0; $i < $blocks; $i++){
            $string.= "R";
        }
        return $string;
    }

    public function calculateSeconds($timer){
        $var=explode(":",$timer);
        $sec = strval($var[2]) ;
        if($sec != 0 || $sec%2==0)
            return "R";
        else
            return "";
    }

}