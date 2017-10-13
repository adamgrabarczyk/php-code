<?php



class Time{

 date_default_timezone_set("Europe/Warsaw");
        
        
        function getFutureTime ($days, $pattern = "H:i:s d M Y") {
            
            return date( $pattern, strtotime("+ $days days") );;;
        }


        function getCurrentTime($pattern = "H:i:s d M Y") {
           
            
            return date( $pattern, time() );;
        } 
}
?>
