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
          exit("nie udało się nawiązać połączenia z bazą");
      
      echo 'test';
        ?>
    </body>
</html>
