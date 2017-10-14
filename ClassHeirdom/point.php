<?php

class Point {
    
    
    
   public $x;   // trzeba określić modyfikator dostępu (public)
    
   public function __construct($x = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       $this->x = $x;
   }
   
   
   public function getX(){
       
   return $this->x;
   }
    
   
   public function setX($x) {
       
       if ($x > 50 || $x < 0)
           echo 'wartośc z poza zakresu';
       else {
       
           $this->x = $x;
       }
   }
   
}


?>
