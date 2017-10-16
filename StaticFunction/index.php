<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Static function
   </title>
    </head>
    <body>
        <?php
//require_once('PremmisionInterface.php');
require_once('guest.php');
        require_once('user.php');
        
        
       $g = new Guest();
        
       $u = new User();
       
       
       echo Guest::WRITE_POST;
        
        ?>
    </body>
</html>
