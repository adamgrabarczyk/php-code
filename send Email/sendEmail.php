<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Send Email</title>
    </head>
    <body>
        <?php

            $do    = "emailadresata@przyklad.pl";
            $temat = "Temat wiadomości";
            $tresc = "<b>Testowy</b> e-mail do $do o treśći\n<br />".
                     "Tekst w następnej lini\n".
                     "Jeszcze jedna linia";
            $tresc = wordwrap($tresc, 70);
            $tresc = str_replace("\n.", "\n..", $tresc);
            
            $naglowki = "Content-type: text/html; charset=UTF8\r\n".
                        "From: "."naszemail@domena.pl"."\r\n".
                        "Reply-to: "."naszemail@domena.pl"."\r\n";
            
            
            mail($do, $temat, $tresc, $naglowki);
            
            //text/html
                   
        
        
        
        
        ?>
    </body>
</html>
