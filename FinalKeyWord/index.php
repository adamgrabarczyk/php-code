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
            echo 'to jest funkcja z klasy a';
            }
        
        }
        
        class B extends A {
            
            final function mA() {
            
            }
            
        }
        
        
        $b = new B();
        
        $b->mA(); 
        
//        echo 'final key word';
        
        ?>
    </body>
</html>
