<?php

class Point {
    
    
    
   public $x = 50;   // trzeba określić modyfikator dostępu (public)
    
   public function __construct($x = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       $this->x = $x;
   }
    
}


?>
