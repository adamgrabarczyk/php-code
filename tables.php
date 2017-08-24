
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>table's</title>
        
    </head>       
    <body>
        
        
<?php
$table_name[0] = 10;
$table_name[1] = 20;


echo $table_name[0]."<br/>";
echo $table_name[1]."<br/><br/>";

$liczby[0] = 10;
$liczby[1] = 20;
$liczby[2] = 30;
$liczby[3] = 40;

echo $liczby[0]."<br/><br/>";

$tab[0] = "cos";
$tab[1] = 50;
$tab[] = 54; //dodaje wartosc na koniec tablicy jesli nie wskazemy na kotrym ma byc miejscu


echo $tab[0]."<br/><br/>";
echo $tab[1];





echo "<pre>";
print_r($tab); // informuje czlowieka o całym obiekcie (co jest przyporzadkowane do czego)  
echo "</pre>"."<br/><br/>";



// Tablica asocjacyjna

$człowiek ["imie"] = "adam";
$człowiek ["nazwisko"] = "grabarczyk";
$człowiek ["wiek"] = 15;

echo "<pre>";
print_r($człowiek);   
echo "</pre>"."<br/><br/>";








$tab2 = array(2 => "lala", "lala", "blala"); 

echo "<pre>";
print_r($tab2);   
echo "</pre>"."<br/><br/>";


?>
    </body>
</html>


