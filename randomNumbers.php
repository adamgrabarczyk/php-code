<html>
    <head>
        <meta charset="UTF-8">
        <title>random numbers</title>
    </head>
    <body>
        <?php
        
        $someText = array(
            
            "siema",
            "haloo",
            "elo",
            "czesc"
        );
        
        
        $randomNumber = rand(0, count($someText)-1);
        
      echo $someText[$randomNumber];
        
        ?>
        
    </body>
</html>
