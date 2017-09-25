<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>fileOperation</title>
    </head>
    <body>
        
        
        <?php
        
        /*      FILE
             *     $wskaznik = fopen("nazwaPliku.txt", "TRYBEM OTWARCIA");
             *          
             *     r - (read) - otwiera nam plik do odczytu; ustawia wskaźnik (uchwyt pliku) na początek; WYMAGA ABY PLIK BYL JUZ STWORZONY
             *     r+ - robi to co wyżej + pozwala zapisywać
             * 
             *     w - (write) - otwiera plik do zapisu; ustawia wskaźnik na początku pliku. Usuwa dotychczasowa zawartość pliku; jeżeli plik nie istnieje to go tworzy!
             *     w+ - robi to co wyżej + pozwala odczytywać
             * 
             *     a - (attach) - otwiera plik do zapisu; ustawia wskaźnik na koniec pliku; jeśli plik nie istnieje to go tworzy
             *     a+ - robi to co wyżej + pozwala odczytywać
             */
      
        $namefile = "test";
        
        $wskaznik = @fopen($namefile, "r"); // @ blokuje wyswietlania warningow
        
        if($wskaznik)
        {
            
            
        } else {
        
            echo 'nie ma takeigo pliku';
            
        } 
            
            
        @fclose($wskaznik);   // zamyka plik
                
        ?>
    </body>
</html>
