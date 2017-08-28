<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>bitOperators</title> 
    </head>
    <body>
        <?php
//bit -najmniejsza jednostka informacji

        /*
 * 1 2 6 = 1 * 10 ^ 2 + 2 * 10 ^ 1 + 6 * 10 ^ 0 = 100 + 20 + 6 = 126
 * 1 0 1 0 = 1 * 2 ^ 3 + 0 * 2 ^ 2 + 1 * 2 ^ 1 + 0 * 2 ^ 0 = 8 + 2 = 10
 * 1 0 1 0 = 2 ^ 1 + 2 ^ 3 = 2 + 8 = 10
 */

    // 2 -  0 0 1 0
    // 10 - 1 0 1 0
    
    // & - KONIUNKCJA
    // 0 0 1 0
    // 1 0 1 0
    // 0 0 1 0 - 2

    echo 2 & 10;
    
    echo "<br />----------<br />";
    // | - ALTERNATYWA
    // 0 0 1 0
    // 1 0 1 0
    // 1 0 1 0 - 10

    echo 2 | 10; 
    
    
    echo "<br />----------<br />";
    // ^ - XOR
    // 0 0 1 0
    // 1 0 1 0
    // 1 0 0 0 - 8

    echo 2 ^ 10;     
    
    echo "<br />----------<br />";
    // ~ - NOT
    // 1 0 1 0
    // 0 1 0 1 - 5

    echo ~10;  
    
     echo "<br />----------<br />";
    
    // 0 1 0 1 - 5
    // 0 0 1 0 (1)
     // 0 0 0 1 (0) (1)
    echo 5 >> 2;   
       echo "<br />----------<br />";  
    // 0 1 0 1 - 5
    // 1 0 1 0 - 10
    // 000000000000000000 1 0 1 0 0 - 20
    echo 5 << 2;     
    
        ?>
    </body>
</html>
