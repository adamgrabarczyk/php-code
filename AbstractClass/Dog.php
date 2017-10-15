<?php

require_once("AnimalAbstract.php");

class Dog extends AnimalAbstract {
    
    protected $eatableFood = array("kurcaka", "groch", "nalesniki");
    
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
            echo "ja nie jem $food";    
        }
    }
}


?>