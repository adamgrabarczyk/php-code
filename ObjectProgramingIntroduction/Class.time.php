<?php



class Time{


// date_default_timezone_set("Europe/Warsaw");
    const DEFAULT_TIME_ZONE = "Europe/Warsaw";        
        
    public $futureTime;
        
    public $currentTime;
    
    public $timeZone;
    
    function __construct($timeZone =self:: DEFAULT_TIME_ZONE ) {    // self:: oznacza odwołanie do siebie(danej klasy).  

        $this->timeZone = $timeZone;                               // za pomocą this odwolujemy sie do wyzej zdefiniowanego time zione a bez this do tego w parametrze
        
date_default_timezone_set($this->timeZone);


        $this->currentTime = $this->getCurrentTime();                     // konstruktor jest wywoływany jeden raz dla każdej instancji klasy
    }
    
    
    function __toString() {
        return $this->currentTime;
    }
            
    
    
    
            
        function setFutureTime ($days, $pattern = "H:i:s d M Y") {
            
            $this->setTimeZone();
            
            $this->futureTime = date( $pattern, strtotime("+ $days days") );;
            
            return $this->futureTime;
        }


        function getCurrentTime($pattern = "H:i:s d M Y") {
           
            $this->setTimeZone();
            
            return date( $pattern, time() );;
        } 
        
        function setTimeZone() {
            if($this->timeZone != date_default_timezone_get())
            date_default_timezone_set($this->timeZone);
            
            
        }
        
}
?>
