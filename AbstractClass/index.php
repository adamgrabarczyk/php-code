<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Abstract Class
   </title>
    </head>
    <body>
        <?php

        require_once("AnimalAbstract.php");
        require_once("Dog.php");
        require_once("Cat.php");
        
        $p = new Dog();
       
        
        $p->eat('kurcaka');
        $p->eat('groch');
        
        
        $p2 = new Cat();
        
        $p2->eat('fish');
        $p2->eat('fish');
        
        
        
        
       
        ?>
    </body>
</html>
