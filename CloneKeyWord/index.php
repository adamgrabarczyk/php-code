<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clone Key Word</title>
    </head>
    <body>
        <?php

        
        $a = 50;
        
        $b = &$a;
        
        
        $b = 70;  
        
        echo $a.'<br/>';

        echo $b."<br/>";        
        
        ?>
    </body>
</html>
