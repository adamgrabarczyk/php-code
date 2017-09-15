<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions PHP</title>
    </head>
    <body>
        <?php

        $stringLen = strlen("test");
        
        echo $stringLen;
        
        
        echo '<br/><br/><br/>';
        
        
        function nameFunc () {
            
            echo 'lalala';
            
        }
        
        nameFunc();
        
        
        echo '<br/><br/><br/>';
        
        
        
        
        function getHigher ($c, $d)
        {
            return ($c > $d ? $c : $d);
        }                
        
        echo getHigher(5, 6);
        
        echo '<br/><br/><br/>';
        
        // how to change global function 
        
        $frog = 50;
        
        function changeValue (&$valueToChange, $value) {   // the most importatnt chart is & !!
            $valueToChange = $value;
        }
        
        
        changeValue($frog, 80);
        
        echo $frog;
        
        
        
      
        ?>
    </body>
</html>






