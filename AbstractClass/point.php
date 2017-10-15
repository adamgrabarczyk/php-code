<?php

class Point {
    
    
                            // trzeba określić modyfikator dostępu (public)   
    protected $x;           //mamy dostęp do zmiennej z klasy która dziedziczy, ale nie mamy dostępu z instancji klasy
   
    
   public function __construct($x = 0) {     // ustawiamy wartosc domyslna dla x
        
       
       $this->x = $x;
   }
   
   
   public function getX(){
       
   return $this->x;
   }
    
   
   public function setX($x) {
       
       if ($x > 50 || $x < 0)
           echo 'wartośc z poza zakresu,';
       else {
       
           $this->x = $x;
       }
   }
   
}


?>
