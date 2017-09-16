<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>nested Loops PHP</title>
    </head>
    <body>
        <?php
        
        
        // pętle zagnieżdżone (petla w petli)
         
        function tableMulti ($wiersz, $kolumna) {

        echo '<table>';
        
        for($i = 1; $i <= $wiersz; $i++){
            
            echo '<tr>';
            
            for ($j = 1; $j <= $kolumna; $j++ )
           echo "<td>".($i*$j)."</td>";
            
            echo '<br />';
            echo '</tr>';
            
            if ($i == 10)
                break; 
        }
        echo '</table>';
        }
        
        tableMulti(20, 20);
        
        echo '<br/>------------------------<br/>';
        
        
        function power ($a, $w) {
            
            $p = $a;
            
//            for ($i = 0; i < $w -1; $i++)
            while (--$w)
            $a += $p; 
            
            return $a; 
        }
        
        
        echo power(3, 3);
        
        
        ?>
    </body>
</html>
