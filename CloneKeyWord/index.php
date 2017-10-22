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
            public $eye;


            public function __construct($imie, $color) {
                $this->imie = $imie;
                $this->eye = new eye($color);                // tworzymy nowy obiekt jako jedna z cech tej klassy
            }
        }
        
        class eye {
            public $color;
            
            public function __construct($color) {
                $this->color = $color;
            }
        }
        
       $a = new student("Adam", "brązowe");
        
       
       $b = clone $a;
       
       $b->imie = "Wiola";
        
       echo $a->imie."<br/>";
       echo $b->imie."<br/>";
       
       echo $a->eye->color."<br/>";
       echo $b->eye->color."<br/>";
       
        ?>
    </body>
</html>
