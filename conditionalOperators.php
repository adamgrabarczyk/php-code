<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditional Operators</title>
    </head>
    <body>
        <?php
        $a = 20;
        $b = 100;
        
        $message = ($a > $b) ?"a jest wieksze od b" : "b jest wieksze od a";
        
        echo $message."<br/><br/>";
        
        
        
        echo ($a > $b) ? $a."<br/><br/>" : $b."<br/><br/><br/><br/>";
        
        
        
        $isGreenCheckd = true;
         $isRedCheckd = false;
        $isBlueCheckd = true;
       
        echo "<input type='checkbox' name='color' value='green' ".($isGreenCheckd ? "checked" : "" )." />Green<br/>";
        echo "<input type='checkbox' name='color' value='red' ".($isRedCheckd ? "checked" : "" )." />red<br/>";
        echo "<input type='checkbox' name='color' value='blue' ".($isBlueCheckd ? "checked" : "" )." />blue<br/>";
        
        
        ?>
    </body>
</html>
