<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Object and Class
   </title>
    </head>
    <body>
        <?php

        require_once('Class.time.php');          // wymaga tego pliku do wykonania dalszej częsci kodu (dołącza tylko raz)
       


        
       $a =  new Time;
       
       $b =  new Time;
        
        
       
       echo $a->getFutureTime(5)."<br/>";
       echo $b->getFutureTime(10)."<br/>";
       
//        echo getCurrentTime()."<br/>";
//        echo getFutureTime(10)."<br/>";
//       
                   
        
        
        
        
        ?>
    </body>
</html>
