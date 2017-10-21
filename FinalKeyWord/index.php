<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Final Key Word</title>
    </head>
    <body>
        <?php

        
        class A {             // słówko final oznacza ze klasaa jest ostateczn i nie może byc rozszerzana przez klase inna
       
           final function mA() {
            echo 'to jest funkcja z klasy '.__CLASS__;
            }
        
        }
        
        class B extends A {
            
            
            
            }
            
        
        
        
        $b = new B();
        
        $b->mA(); 
        
//        echo 'final key word';
        
        ?>
    </body>
</html>
