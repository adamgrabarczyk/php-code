<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Name Space</title>
    </head>
    <body>
        <?php

        require_once ("Customer.php");
        
        class Customer {
            
            public $id = 50;
            
            
        }
        
        $c = new Customer();
        
       echo $c->id;
        
        ?>
    </body>
</html>
