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
       


        
       $a =  new Time();
       
       $b =  new Time("America/Atka");
        
        $c = new Time("Australia/Yancowinna");
       
       echo $a->setFutureTime(5)."<br/>";
       echo $b->setFutureTime(10)."<br/>";
       
       
       echo $a->futureTime."<br/>";
       $b->setFutureTime(2);
       echo $b->futureTime."<br/><br/>";
       
       echo $a."<br/><br/>";
       
       echo $b."<br/><br/>";
       
       echo $c."<br/><br/>";
       
       
       $a->setFutureTime("4");
       
       echo $a->futureTime."<br/><br/>";
       
       echo $a->timeZone."<br/>";
       echo $b->timeZone."<br/>";
       echo $c->timeZone."<br/><br/>";
//        echo getCurrentTime()."<br/>";
//        echo getFutureTime(10)."<br/>";
//       
                   
        
        
        
        
        ?>
    </body>
</html>
