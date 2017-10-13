<?php

date_default_timezone_set("Europe/Warsaw");

class Time{

// date_default_timezone_set("Europe/Warsaw");
        
        
    public $futureTime;
            
        function setFutureTime ($days, $pattern = "H:i:s d M Y") {
            
            $this->futureTime = date( $pattern, strtotime("+ $days days") );;
            
            return $this->futureTime;
        }


        function getCurrentTime($pattern = "H:i:s d M Y") {
           
            
            return date( $pattern, time() );;
        } 
}
?>
