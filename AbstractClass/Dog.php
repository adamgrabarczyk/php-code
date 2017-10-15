<?php

require_once("AnimalAbstract.php");

class Dog extends AnimalAbstract {
    
    
    
    function eat() {
        
        if($this->isHungry){
            echo 'jem<br/>';
            $this->isHungry = false;
            
        } else {
        
            echo 'nie jestem głodny<br/>';
        }
        
    }
}


?>