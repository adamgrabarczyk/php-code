<?php

require_once("AnimalAbstract.php");

class Dog extends AnimalAbstract {
    
    
    
    function eat($food) {
        
        if($this->isHungry){
            echo 'jem '.$food.'<br/>';
            $this->isHungry = false;
            
        } else {
        
            echo 'nie jestem głodny<br/>';
        }
        
    }
}


?>