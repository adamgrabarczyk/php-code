<?php


class Point2D {
    
    
    
   public $x;   // trzeba określić modyfikator dostępu (public)
   public $y; 


   public function __construct($x = 0, $y = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       $this->x = $x;
       
       $this->y = $y;
   }
    
}


?>
