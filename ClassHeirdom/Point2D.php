<?php


class Point2D extends Point {
    
    
    
   public $x;   // trzeba określić modyfikator dostępu (public)
   public $y; 


   public function __construct($x = 0, $y = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       parent::__construct($x);
       
       $this->y = $y;
   }
    
}


?>
