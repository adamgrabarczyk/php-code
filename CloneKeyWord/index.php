<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clone Key Word</title>
    </head>
    <body>
        <?php

        
//        $a = 50;
//        
//        $b = &$a;               // & wiaze zmienna a ze zmienna b - zwraca te sama wartosc 
//        
//        
//        $b = 70;  
//        
//        echo $a.'<br/>';
//
//        echo $b."<br/>";        
//      
        
        class student {
            
            public $imie;
            
            public function __construct($imie) {
                $this->imie = $imie;
            }
        }
        
       $a = new student("Adam");
        
       
       $b = $a;
        
       echo $a->imie."<br/>";
       echo $b->imie."<br/>";
       
        ?>
    </body>
</html>
