<?php



class Time{


// date_default_timezone_set("Europe/Warsaw");
    const DEFAULT_TIME_ZONE = "Europe/Warsaw";        
        
    public $futureTime;
        
    public $currentTime;
    
    function __construct() {

date_default_timezone_set(DEFAULT_TIME_ZONE);


        $this->currentTime = $this->getCurrentTime();                     // konstruktor jest wywoływany jeden raz dla każdej instancji klasy
    }
    
    
    function __toString() {
        return $this->currentTime;
    }
            
    
    
    
            
        function setFutureTime ($days, $pattern = "H:i:s d M Y") {
            
            $this->futureTime = date( $pattern, strtotime("+ $days days") );;
            
            return $this->futureTime;
        }


        function getCurrentTime($pattern = "H:i:s d M Y") {
           
            
            return date( $pattern, time() );;
        } 
}
?>
