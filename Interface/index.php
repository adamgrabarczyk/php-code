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
        
        
        class MonitorA implements screean {
            
            function display() {
                ;
            }
        }
        
        ?>
    </body>
</html>
