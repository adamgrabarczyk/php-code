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
        require_once('moderator.php');
        require_once('admin.php');
        
        
       $g = new Guest();
        
       $u = new User();
       
       echo var_dump($g->isPermmitrd(Guest::DELETE_USER));
       
        
        ?>
    </body>
</html>
