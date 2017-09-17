<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
       
        
        
        <link rel="stylesheet" href="StyleSheet.css" type="text/css" />
        <script type="text/javascript" src="js.js"></script>

    </head>
    <body>
        <div id="container">
            <div id="top">
                BANER
            </div>
            
            <div id="menu">
                <div><a href="?page=basketball">Basketball</a></div>
                <div><a href="?page=football">Football</a></div>
                <div><a href="?page=tenis">Tenis</a></div>
            </div>
            <div id="content">     
                <div id="text">
        <?php
        
       
        
       
//        if($_GET['akcja'] == "QRA");
//echo 'jestes na te jstronie';
        
       
      
            
        if (isset($_GET['page']))          //isset sprawdza czy isnieje dany zakres
        {   
            
            $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);     // filtrowanie zmiennych      
            
            if (!empty($page))               // empty - zwraca prawda/falsz jezeli zmienna jest pusta/niepusta
            {
                
                    if (is_file($page.".html"))           // is_file sprawdza czy istnieje jakis plik
                        include($page.".html");           // include - dołącza plik
                    else
                        echo "Taka strona nie istnieje";
                }
            }
        
        echo '<br/>';
        
        echo '<br/>----------------------</br>';
                echo 'lorem ipsumsssssssssssssssssssssssssssssssssssssssssssssssssmdlasldasdkaksda';
        ?>
               </div>
           </div>

        </div>
    </body>
</html>
