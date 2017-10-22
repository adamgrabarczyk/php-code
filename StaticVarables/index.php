<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Static Varables</title>
    </head>
    <body>
        <?php

        require_once ("Customers.php");
        
        for ($i = 0; $i < 10; $i++) {
            
            $a[$i] = new Customers();
        }
        
        
        echo Customers::$numberOfCustomers;
        
        
        ?>
    </body>
</html>
