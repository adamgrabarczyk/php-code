<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Class heirdom
   </title>
    </head>
    <body>
        <?php

        
        require_once("point.php");
         require_once("Point2D.php");
        
        
       $p = new Point(40);
       
       echo $p->x."<br/><br/>";
       
       $p2 = new Point2D(80,50);
       $p2->setX(70);
       
       echo $p2->getX()."<br/>";
       echo $p2->y."<br/>";
       
       
        ?>
    </body>
</html>
