<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Interface
   </title>
    </head>
    <body>
        <?php

      echo screean::Color;
        
        interface screean {
            
            const Color = " grey";
            
            function display();                // domyślnie ma ustawione public i abstract 
        }
        
        interface buttons {
            
            function on();
        }


        
        class MonitorA implements screean, buttons {
            
            function display() {
                ;
            }
            
            function on() {
                ;
            }
        }
        
        ?>
    </body>
</html>
