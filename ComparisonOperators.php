<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ComparisonOperators</title>
    </head>
    <body>
        <?php
        
        $zm = 5;
        $zm2 = 5;
       
        //bool - true=1 ; false = 0 or null
        
        var_dump($zm == $zm2);  //pokazuje informacje na temat tupu i wartoci danej
        
          echo '<br/>---------------<br/>';
        
         var_dump($zm != $zm2)."<br/>";
        
          echo '<br/>---------------<br/>';
          
          var_dump($zm <> $zm2)."<br/>";  //CZY SĄ RÓŻNE    
          
           echo '<br/>---------------<br/>';
           
           var_dump($zm > $zm2)."<br/>";
           
            echo '<br/>---------------<br/>';
            
            var_dump($zm < $zm2)."<br/>";
            
             echo '<br/>---------------<br/>';
             
             var_dump($zm >= $zm2)."<br/>";
             
              echo '<br/>---------------<br/>';
              
              var_dump($zm <= $zm2)."<br/>";
              
               echo '<br/>---------------<br/>';
        
              var_dump($zm == $zm2)."<br/>";
              
               echo '<br/>---------------<br/>';
         
               var_dump($zm === $zm2)."<br/>";
              
               echo '<br/>---------------<br/>';
        
               var_dump($zm !== $zm2)."<br/>";
              
               echo '<br/>---------------<br/>';
        
               ?>
    </body>
</html>
