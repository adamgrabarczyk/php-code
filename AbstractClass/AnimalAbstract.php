<?php

abstract class AnimalAbstract {
    
    protected $isHungry;
    
    function __construct($isHungry = true) {
       
        $this->isHungry = $isHungry;
    }
            
    function eat($food) {

        $isEtable = false;
        
        foreach ($this->eatableFood as $value)
        {
            if($value == $food)
$isEtable = true;
                break;
        };
        
        if($isEtable)
        {
        if ($food != 'kurcaka') {
            
        }
        
        if($this->isHungry){
            echo 'jem '.$food.'<br/>';
            $this->isHungry = false;
            
        } else {
        
            echo 'nie jestem głodny<br/>';
        } 
        }else {
            echo "ja nie jem $food<br/><br/>";    
        }
    }
    
    
   
}


?>
