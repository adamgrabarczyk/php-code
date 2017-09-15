<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Loops</title>
    </head>
    <body>
        <?php
        // for
for ($i = 0; $i < 10; $i++ ){
    
    echo $i."<br/>";
    
}        


echo '<br/>--------------<br/>';

// while 

$j = 0;

while ($j < 3) 
    
{
    echo $j."<br/>";
    $j++;
}

echo '<br/>--------------<br/>';



echo "\$i= ".$i."<br/>" ;
echo '\$j= '.$j ;

echo '<br/>--------------<br/>';

// do while


$k = 0;

do {
    
    echo $k."<br/>";
    
    $k++;
    
}while ($k != 5);


        
        ?>
    </body>
</html>
