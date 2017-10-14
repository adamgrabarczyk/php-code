<?php


class Point2D extends Point {
    
    
    
//   public $x;   // trzeba określić modyfikator dostępu (public)
//    protected $y; 
    
    private $y;    // ta zmienna jest dostępna tylko wewnątrz tej klasy


    public function __construct($x = 0, $y = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       parent::__construct($x);
       
       $this->y = $y;
   }
   
   
     public function getY(){
       
   return $this->y;
   }
    
   
   public function setY($y) {
       
       $this->y = $y;
   }
 
    
}


?>
