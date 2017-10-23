<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>intro to MySQL</title>
    </head>
    <body>
        <?php


//        mysql_connect("localhost");

      $mySQlConnction =  mysqli_connect("localhost");                     // łączdenie z bazą danych


      if(!$mySQlConnction)
          die(mysqli_error());
      
      echo 'test';
      
      
      
      mysqli_close($mySQlConnction);
      
        ?>
    </body>
</html>
