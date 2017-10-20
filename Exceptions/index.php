<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exceptions</title>
    </head>
    <body>
        <?php

        require_once ('FileRead.php');
        
        try {
            
         
            
        
        $reder = new FileRead("nazwaPliku.txt");
        
        echo $reder->getWallContent()."<br/>";
        
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
    </body>
</html>
