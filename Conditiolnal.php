<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditional instruction</title>
    </head>
    <body>
        <?php
         /*
     * TRUE - gdy jest różny od 0, FALSE - 0 lub też null
     * warunek to wyrażenie (cokolwiek co będzie jakąś ostateczine wartością liczbową lub też nullem)
     * JEŚLI (warunek1)
     *  instrukcja1;
     * JEŚLI W innym wypadku (warunek2)
     *  instrukcja2;
     * CAŁKOWICIE w innym wypadku, gdy poprzednie warunki nie są spełnione
     *  instrukcja3;
     * 
     */
        
        
       
       $a = 10;
       $b = 10;
//       $b = "10";
        
       if ($a > $b) {
           
           echo 'ababa';
       } else if ($a < $b){
               
           echo 'adasdasdas';    
           
       } else {
       
           echo 'a jest rowne b';
       if ($a === $b) 
           
           echo '<br/> a jest tego samego typu co b';
       }      
       
          echo '<br/>-------------------<br/>';
        
          
          if (15 > 7 && 7 > 4) {
              
               echo 'true';
              
          }
          
          
          
        
        ?>
    </body>
</html>
