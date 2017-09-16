<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>nested Loops PHP</title>
    </head>
    <body>
        <?php
        
        
        // pętle zagnieżdżone (petla w petli)
         
        echo '<table>';
        
        for($i = 1; $i <= 10; $i++){
            
            echo '<tr>';
            
            for ($j = 1; $j <= 10; $j++ )
           echo "<td>".($i*$j)."</td>";
            
            echo '<br />';
            echo '</tr>';
        }
        echo '</table>';
        
        ?>
    </body>
</html>
