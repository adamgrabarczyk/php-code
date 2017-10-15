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
        
        $p = new Dog();
       
        
        $p->eat();
        $p->eat();
        
       
        ?>
    </body>
</html>
