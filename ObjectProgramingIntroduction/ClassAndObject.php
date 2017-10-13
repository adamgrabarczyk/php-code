<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Object and Class
   </title>
    </head>
    <body>
        <?php

        
        date_default_timezone_set("Europe/Warsaw");
        
        
        function getFutureTime ($days, $pattern = "H:i:s d M Y") {
            
            return date( $pattern, strtotime("+ $days days") );;;
        }


        function getCurrentTime($pattern = "H:i:s d M Y") {
           
            
            return date( $pattern, time() );;
        }


        echo getCurrentTime()."<br/>";
        echo getFutureTime(10)."<br/>";
       
                   
        
        
        
        
        ?>
    </body>
</html>
